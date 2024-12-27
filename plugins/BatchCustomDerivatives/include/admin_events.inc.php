<?php

// This file is part of the BatchCustomDerivaties Piwigo plugin

/*
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
*/

defined( 'PHPWG_ROOT_PATH' ) or trigger_error( 'Hacking attempt!', E_USER_ERROR );

class BatchCustomDerivatives {
	/**
	 * BatchCustomDerivatives constructor
	 *   - add handlers
	 */
	public function __construct() {
		// load plugin language file
		load_language( 'plugin.lang', BATCHCUSTOMDERIVATIVES_PATH );

		// new action in Batch Manager
		add_event_handler( 'loc_end_element_set_global',
			array( $this, 'loc_end_element_set_global' ) );
		add_event_handler( 'element_set_global_action',
			array( $this, 'element_set_global_action' ) );
	}

	/**
	 * add an action to the Batch Manager
	 */
	public function loc_end_element_set_global() {
		global $template;

		$itypes = array_keys( ImageStdParams::$custom );
		$deriv_map = array();
		foreach ( $itypes as $itype ) {
			$deriv_map[ $itype ] = $itype;
		}
		$ferrors = [];
		$watermark_files = [];
		foreach (glob(PHPWG_ROOT_PATH.'themes/default/watermarks/*.png') as $file)
		{
			$watermark_files[] = substr($file, strlen(PHPWG_ROOT_PATH));
		}
		if ( ($glob=glob(PHPWG_ROOT_PATH.PWG_LOCAL_DIR.'watermarks/*.png')) !== false)
		{
			foreach ($glob as $file)
			{
				$watermark_files[] = substr($file, strlen(PHPWG_ROOT_PATH));
			}
		}
		$watermark_filemap = ['' => '---'];
		foreach( $watermark_files as $file)
		{
			$display = basename($file);
			$watermark_filemap[$file] = $display;
		}
		$watermark = [];
		$template->assign(
			array(
				'bcd_derivatives_types' => $deriv_map,
				'ferrors' => $ferrors,
				'watermark_files' => $watermark_filemap,
				'watermark' => $watermark,
			)
		);
		$template->set_filename( 'bcd_batchmanager_action',
			realpath( BATCHCUSTOMDERIVATIVES_PATH .
			          'template/batchmanager_action.tpl' ) );
		$content = $template->parse( 'bcd_batchmanager_action', true );
		$template->append( 'element_set_global_plugins_actions', array(
			'ID'      => 'batch_custom_derivatives',
			'NAME'    => l10n( 'Generate custom image sizes' ),
			'CONTENT' => $content,
		) );
	}

	/**
	 * perform Batch Manager action
	 *
	 * @param string $action
	 * @param string[] $collection
	 */
	public function element_set_global_action( $action, $collection ) {
		global $page;
		if ( $action == 'batch_custom_derivatives' ) {
			if ( $_POST['regenerateSuccess'] != '0' ) {
				$page['infos'][] = l10n( '%s photos have been regenerated', $_POST['regenerateSuccess'] );
			}
			if ( $_POST['regenerateError'] != '0' ) {
				$page['warnings'][] = l10n( '%s photos can not be regenerated', $_POST['regenerateError'] );
			}
		}
	}
}

function BatchCustomDerivatives_Load() {
	global $BatchCustomDerivatives;
	$BatchCustomDerivatives = new BatchCustomDerivatives();
}
