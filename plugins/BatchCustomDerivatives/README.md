# BatchCustomDerivatives Piwigo Plugin

## Introduction

The **Batch Custom Derivatives** plugin adds a new action to the
photo batch manager labeled ``Generate custom image size`` which creates
any missing registered custom derivative images.  The plugin also
adds two WebService APIs to support the new batch action.

The install also includes a Perl script called ``piwigo_deriv.pl``
that allows the creation of either regular or custom derivative
images directly from the command line (or as a background cron job).

## New WebService APIs

* **Method**: ``bcd.getCustomDerivativeTypes``
* **Params**: \<none\>
* **Returns**: A list of all currently registered custom derivative types.

---

* **Method**: ``bcd.getMissingCustomDerivatives``
* **Restriction**: Admin Only
* **Params**: \<same as pwg.getMissingDerivatives\> with the exception that
        *types* takes a list of custom derivative types
        (defaults to all custom types)
* **Returns**: A list of urls for all missing custom derivatives

## Tools

* **Tool Name**: ``piwigo_deriv.pl``
* **Description**: Queries list of or generates missing image derivatives and types
* **Requires**: perl modules Getopt::Long, JSON and LWP::UserAgent

This tool can be used directly or as a background task (from cron)
to pre-generate missing image derivatives in a Piwigo gallery.
Authentication will be performed through the Piwigo WebService API, as
admin priviledges are required for most operations.

Username/password may be supplied as parameters, but the more secure
option is to supply these options in a config file (identified by -c option).

By default, all missing derivatives will be generated as quickly as possible.
However, generation may be restricted to specified types, and there are
options to control the speed and number of derivatives generated.

```
Piwigo Derivative Generator
Usage: piwigo_deriv.pl -a <action>[,<action>] [ <options> ]
<options> may be:
  -a or --action=<from-list> (repeatable)
    gen_missing - generate missing derivatives
    gen_missing_custom - generate missing custom derivatives
    list_custom_types - list valid custom derivative types
    list_missing - list urls of missing derivatives
    list_missing_custom - list urls of missing custom derivatives
    list_types - list valid derivative types
    test_login - test login
  -u or --username=<login> - login name (default: admin)
  -p or --password=<pass> - login password (default: <empty>)
  -x or --basic_auth - use HTTP Basic Auth in photo query
  -s or --sleep=<secs> - seconds to sleep between requests (fractions ok)
  -l or --limit=<#> - max number of urls to process (default: <no-limit>)
  -b or --base_url=<url> - base url or site (default: http://localhost/piwigo)
  -t or --types=<type>[,<type>] - derivative types to consider (default: <all>)
  -o or --timeout=<secs> - HTTP timeout (default: 20)
  -v or --verbose - increase level of feedback (repeatable)
  -c or --config=<config-file> - file containing option=value lines
Config file requires long option names (no dashes, # start comments)
```
