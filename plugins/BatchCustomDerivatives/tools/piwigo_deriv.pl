#!/usr/bin/env perl

my $name = 'piwigo_deriv.pl';
my $version = 0.3;

=begin comment

Tool Name: piwigo_deriv.pl
Description: Queries list of or generates missing image derivatives and types
Author: Scott Shambarger
Author URI: http://github.com/sshambar/BatchCustomDerivatives

Example usage:

 # piwigo_deriv.pl -a gen_missing -c deriv.conf -t medium -s 0.5 -l 100

This tool can be used directly or as a background task (from cron)
to pre-generate missing image derivatives in a Piwigo gallery.
Authentication will be performed through the Piwigo WebService API, as
admin priviledges are required for most operations.

Username/password may be supplied as parameters, but the more secure
option is to supply these options in a config file (identified by -c option).

By default, all missing derivatives will be generated as quickly as possible.
However, generation may be restricted to specified types, and there are
options to control the speed and number of derivatives generated.


 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program.  If not, see <http://www.gnu.org/licenses/>.
=end comment
=cut

use strict;
use warnings;

use POSIX;
use JSON;
use LWP::UserAgent;
use Getopt::Long;

sub list_types($);
sub list_missing_derivs($);
sub gen_missing_derivs($);
sub get_types;
sub get_custom_types;
sub get_missing_derivs($$);
sub get_missing_custom_derivs($$);
sub get_missing_derivs_urls($$$);
sub error($);
sub json_query($;%);
sub get_ua;

my %opt = ();
Getopt::Long::Configure('bundling');
GetOptions(
    \%opt,
    qw/
          action|a=s@
          base_url|b=s
          basic_auth|x
          config|c=s
          help|h
          limit|l=i
          password|p=s
          sleep|s=f
          timeout|o=i
          types|t=s@
          username|u=s
          verbose|v:+
      /
);

my %conf_default = (
    action => [],
    base_url => 'http://localhost/piwigo',
    basic_auth => 0,
    limit => 0,
    password => '',
    sleep => 0,
    timeout => 20,
    types => [],
    username => 'admin',
    verbose => 0,
    );

my %conf = %conf_default;

# load config file
if (defined $opt{'config'}) {

    open CONFIG, "$opt{'config'}" or die "Couldn't open the config '$opt{'config'}'. $!\n";
    my @actions = ();
    my @types = ();
    while (<CONFIG>) {
	chomp;
	s/^\s+|\s+$//g;
	next if /^#/;
	my ($key, $val) = m/^([^=\s]+)\s*=\s*"(.*)"$/;
	($key, $val) = m/^([^=\s]+)\s*=\s*(.*)$/ if ! defined($key);
	next if ! (defined($key) && defined($conf_default{$key}));
	for ($key) {
	    /^action$/ && do { push @actions, $val; };
	    /^types$/ && do { push @types, $val; };
	    /.*/ && do { $conf{$key} = $val; };
	}
    }
    $conf{action} = \@actions if scalar @actions > 0;
    $conf{types} = \@types if scalar @types > 0;
    close CONFIG;
}

# command line overrides
foreach my $conf_key (keys %conf_default) {
    $conf{$conf_key} = $opt{$conf_key} if defined $opt{$conf_key};
}
if (defined $conf{action}) {
    my $actions = $conf{action};
    $conf{action} = [ split /,/, join ',', @$actions ];
}
if (defined $conf{types}) {
    my $types = $conf{types};
    $conf{types} = [ split /,/, join ',', @$types ];
}

my $ws_url = $conf{base_url}.'/ws.php';

my %valid_actions = (
    'gen_missing' => 'generate missing derivatives',
    'gen_missing_custom' => 'generate missing custom derivatives',
    'list_custom_types' => 'list valid custom derivative types',
    'list_missing' => 'list urls of missing derivatives',
    'list_missing_custom' => 'list urls of missing custom derivatives',
    'list_types' => 'list valid derivative types',
    'test_login' => 'test login'
);
my $actions = $conf{action};
for (@$actions) {
    if (! exists($valid_actions{$_})) {
	error "Unrecognized action: $_";
    }
}
my @actions = sort { $b cmp $a } @$actions;

binmode STDOUT, ":encoding(utf-8)";

if (scalar @actions == 0 or defined ($opt{help})) {
    print "Piwigo Derivative Generator v$version\n";
    print "Usage: $name -a <action>[,<action>] [ <options> ]\n";
    print "<options> may be:\n";
    print "  -a or --action=<from-list> (repeatable)\n";
    for (sort keys %valid_actions) {
	print "    $_ - $valid_actions{$_}\n";
    }
    print "  -u or --username=<login> - login name (default: $conf_default{username})\n";
    print "  -p or --password=<pass> - login password (default: <empty>)\n";
    print "  -x or --basic_auth - use HTTP Basic Auth in photo query\n";
    print "  -s or --sleep=<secs> - seconds to sleep between requests (fractions ok)\n";
    print "  -l or --limit=<#> - max number of urls to process (default: <no-limit>)\n";
    print "  -b or --base_url=<url> - base url or site (default: $conf_default{base_url})\n";
    print "  -t or --types=<type>[,<type>] - derivative types to consider (default: <all>)\n";
    print "  -o or --timeout=<secs> - HTTP timeout (default: $conf_default{timeout})\n";
    print "  -v or --verbose - increase level of feedback (repeatable)\n";
    print "  -c or --config=<config-file> - file containing option=value lines\n";
    print "Config file requires long option names (no dashes, # start comments)\n";
    exit(1);
}

# support single "." output when verbose
STDOUT->autoflush(1) if $conf{verbose} == 1;

my $ua = get_ua;

my %args = (
    username => $conf{username},
    password => $conf{password},
);
json_query "pwg.session.login", %args;
print "Cookies after login: ".$ua->cookie_jar->as_string if $conf{verbose} > 2;

my $list_total = 0;
my $gen_total = 0;
my $gen_failed = 0;

for (@actions) {
    print "\nPerforming action $_\n" if $conf{verbose} > 1;
    /^list_types$/ && do { 
	list_types \&get_types;
    };
    /^list_missing$/ && do {
	list_missing_derivs \&get_missing_derivs;
    };
    /^gen_missing$/ && do {
	gen_missing_derivs \&get_missing_derivs;
    };
    /^list_custom_types$/ && do { 
	list_types \&get_custom_types;
    };
    /^list_missing_custom$/ && do {
	list_missing_derivs \&get_missing_custom_derivs;
    };
    /^gen_missing_custom$/ && do {
	gen_missing_derivs \&get_missing_custom_derivs;
    };
    /^test_login$/ && do {
	print "Login successful\n";
    };
}

print "\n" if ($conf{verbose} == 1 and $gen_total);
print "Total images processed: $gen_total\n"
    if ($gen_total and ($conf{verbose} or $gen_failed));
print "Total failures: $gen_failed\n" if $gen_failed;

json_query 'pwg.session.logout';

sub list_types($) {
    # type source function
    my $source = shift;

    my $types = &$source;
    my $str = join ",", @$types;
    print $str."\n";
}

sub list_missing_derivs($) {
    # url source function
    my $source = shift;

    my ($next, $urls);
    do {
	$urls = &$source($conf{types}, $next);
	foreach (@$urls) {
	    if ( $conf{limit} > 0 and $list_total >= $conf{limit} ) {
		undef $next;
		last;
	    }
	    print $_."\n";
	    $list_total++;
	}
    } while($next);
}

sub gen_missing_derivs($) {
    # url source function
    my $source = shift;

    my ($next, $urls, $response);
    my $sleep = 0;
    my $sleep_debt = 0.0;

    # url query agent
    my $cua = get_ua;
    # ignore redirects for orig smaller than deriv
    $cua->max_redirect( 0 );

    if ($conf{basic_auth}) {
	$cua->default_headers->authorization_basic(
	    $conf{username},
	    $conf{password}
	    );
    }

    do {
	$urls = &$source($conf{types}, $next);
	foreach (@$urls) {
	    if ( $conf{limit} > 0 and $gen_total >= $conf{limit} ) {
		undef $next;
		last;
	    }
	    if ($sleep_debt > 1.0) {
		$sleep = floor($sleep_debt);
		$sleep_debt -= $sleep;
		sleep($sleep);
	    }
	    print "Generating derivatives:\n" if ($conf{verbose} and $gen_total == 0);
	    $response = $cua->head($_);
	    if($response->is_error) {
		print "E" if $conf{verbose} == 1;
		print STDERR "\nERROR: ".$response->message.": $_\n"
		    if ($gen_total == 0 or $conf{verbose} > 1);
		# if we start with an error, bail
		exit if $gen_total == 0;
		$gen_failed++;
	    }
	    else {
		print "." if $conf{verbose} == 1;
		print "$_\n" if $conf{verbose} > 1;
	    }
	    $gen_total++;
	    $sleep_debt += $conf{sleep};
	}
    } while($next);
}

sub get_types {
    my $result = json_query 'pwg.session.getStatus';
    return $result->{available_sizes};
}

sub get_custom_types {
    my $result = json_query 'bcd.getCustomDerivativeTypes';
    return $result->{types};
}

sub get_missing_derivs($$) {
    return get_missing_derivs_urls 'pwg.getMissingDerivatives',
	$_[0], $_[1];
}

sub get_missing_custom_derivs($$) {
    return get_missing_derivs_urls 'bcd.getMissingCustomDerivatives',
	$_[0], $_[1];
}

sub get_missing_derivs_urls($$$) {
    my $api = shift;
    my $stypes = shift;
    my $next = $_[0];

    my %xargs = ();

    $xargs{'types[]'} = $stypes if defined $stypes;
    $xargs{prev_page} = $next if defined $next;
    my $result = json_query $api, %xargs;
    $_[0] = $result->{next_page};
    return $result->{urls};
}

sub error($) {
    print STDERR join(" ", @_)."\n";
    exit(1);
}

sub json_query($;%) {
    my ($method, %form) = @_;
    $form{method} = $method;
    print "API method $method\n" if $conf{verbose} > 2;
    my $response = $ua->post(
	"${ws_url}?format=json",
	\%form
	);
    error "Method $method failed at '$conf{base_url}': ".$response->message if $response->is_error;
    my %content;
    eval {
	%content = %{ JSON->new->utf8->decode($response->decoded_content) };
    };
    error "Method $method returned invalid response" if not %content;
    error "Method $method returned failure: $content{message}" if $content{stat} ne "ok";
    error "Method $method has no results" if not defined $content{result};
    return $content{result};
}

sub get_ua {
    return LWP::UserAgent->new(
	cookie_jar => {},
	agent => "Mozilla/$name $version",
	timeout => $conf{timeout},
	);
}
