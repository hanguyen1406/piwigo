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

// To be compat with PHP5, this should be a class static
global $BatchCustomDerivatives_WS_Params;
$BatchCustomDerivatives_WS_Params = array(
	'f_min_rate'           => array(
		'default' => null,
		'type'    => WS_TYPE_FLOAT
	),
	'f_max_rate'           => array(
		'default' => null,
		'type'    => WS_TYPE_FLOAT
	),
	'f_min_hit'            => array(
		'default' => null,
		'type'    => WS_TYPE_INT | WS_TYPE_POSITIVE
	),
	'f_max_hit'            => array(
		'default' => null,
		'type'    => WS_TYPE_INT | WS_TYPE_POSITIVE
	),
	'f_min_ratio'          => array(
		'default' => null,
		'type'    => WS_TYPE_FLOAT | WS_TYPE_POSITIVE
	),
	'f_max_ratio'          => array(
		'default' => null,
		'type'    => WS_TYPE_FLOAT | WS_TYPE_POSITIVE
	),
	'f_max_level'          => array(
		'default' => null,
		'type'    => WS_TYPE_INT | WS_TYPE_POSITIVE
	),
	'f_min_date_available' => array( 'default' => null ),
	'f_max_date_available' => array( 'default' => null ),
	'f_min_date_created'   => array( 'default' => null ),
	'f_max_date_created'   => array( 'default' => null ),
);

class BatchCustomDerivatives_WS {
	/**
	 * BatchCustomDerivatives_WS constructor
	 *   - add service methods
	 *
	 * @param PwgServer &$service
	 */
	public function __construct( &$service ) {
		$service->addMethod(
			'bcd.getCustomDerivativeTypes',
			array( $this, 'get_types' ),
			array(),
			'Returns a list of custom derivatives types.',
			null,
			array()
		);

		global $BatchCustomDerivatives_WS_Params;
		$service->addMethod(
			'bcd.getMissingCustomDerivatives',
			array( $this, 'get_missing' ),
			array_merge( array(
				'types'           => array(
					'default' => null,
					'flags'   => WS_PARAM_FORCE_ARRAY
				),
				'ids'             => array(
					'default' => null,
					'flags'   => WS_PARAM_FORCE_ARRAY,
				),
				'max_urls'        => array(
					'default' => 200,
					'type'    => WS_TYPE_INT | WS_TYPE_POSITIVE
				),
				'prev_page'       => array(
					'default' => null,
					'type'    => WS_TYPE_INT | WS_TYPE_POSITIVE
				),
				'watermark'       => array(
					'default' => null,
					'type'    => WS_PARAM_OPTIONAL
				),
				'opacity'         => array(
					'default' => null,
					'type'    => WS_TYPE_INT | WS_TYPE_POSITIVE
				),
				'watermarkImages' => array(
					'default' => null,
					'type'    => WS_PARAM_OPTIONAL
				),
			), $BatchCustomDerivatives_WS_Params ),
			'Returns a list of custom derivatives to build.',
			null,
			array( 'admin_only' => true )
		);
	}

	/*
	 * Parse image size from url token
	 *
	 * @param string $s
	 * @return string[] horiz, vert pixels
	 */
	function url_to_size( $s ) {
		$pos = strpos( $s, 'x' );
		if ( $pos === false ) {
			return array( (int) $s, (int) $s );
		}

		return array( (int) substr( $s, 0, $pos ), (int) substr( $s, $pos + 1 ) );
	}

	/*
	 * Convert custom image size to DerivativeParams
	 * Returns null if tokens unrecognized
	 *
	 * @param string[] $tokens
	 * @return DerivativeParams|null
	 */
	function parse_custom_params( $tokens, $useWatermark = false ) {
		if ( count( $tokens ) < 1 ) {
			return null;
		}

		$crop     = 0;
		$min_size = null;

		$token = array_shift( $tokens );
		if ( $token[0] == 's' ) {
			$size = $this->url_to_size( substr( $token, 1 ) );
		} elseif ( $token[0] == 'e' ) {
			$crop = 1;
			$size = $min_size = $this->url_to_size( substr( $token, 1 ) );
		} else {
			$size = $this->url_to_size( $token );
			if ( count( $tokens ) < 2 ) {
				return null;
			}

			$token = array_shift( $tokens );
			$crop  = char_to_fraction( $token );

			$token    = array_shift( $tokens );
			$min_size = $this->url_to_size( $token );
		}
		$result = new DerivativeParams( new SizingParams( $size, $crop, $min_size ) );
		if ($useWatermark) {
			$result->use_watermark = $useWatermark;
		}
		return $result;
	}

	/**
	 * API method
	 * Returns a list of missing custom derivatives (not generated yet)
	 *
	 * @param mixed[] $params
	 */
	public function get_types( $params, &$service ) {
		$itypes = array_keys( ImageStdParams::$custom );

		$types = array();
		foreach ( $itypes as $itype ) {
			$type = $this->parse_custom_params( explode( '_', $itype ) );
			if ( $type != null ) {
				$types[] = $itype;
			}
		}

		return array( 'types' => $types );
	}

	/**
	 * API method
	 * Returns a list of missing custom derivatives (not generated yet)
	 *
	 * @param mixed[] $params
	 *
	 * @option string types (optional)
	 * @option int[] ids
	 * @option int max_urls
	 * @option int prev_page (optional)
	 */
	public function get_missing( $params, &$service ) {
		global $conf;
		if ( empty( $params['types'] ) ) {
			$itypes = array_keys( ImageStdParams::$custom );
		} else {
			$itypes = array_intersect( array_keys( ImageStdParams::$custom ),
				$params['types'] );
			if ( count( $itypes ) == 0 ) {
				return new PwgError( WS_ERR_INVALID_PARAM, "Invalid types" );
			}
		}

		$types = array();
		$useWatterMark = !empty($params['watermark']);
		foreach ( $itypes as $itype ) {
			$type = $this->parse_custom_params( explode( '_', $itype  ),$useWatterMark );
			if ( $type != null ) {
				$types[] = $type;
			}
		}
		if ( count( $types ) == 0 ) {
			// all unrecognized custom types?
			return array( 'urls' => array() );
		}
		
		$max_urls = $params['max_urls'];
		$query    = 'SELECT MAX(id)+1, COUNT(*) FROM ' . IMAGES_TABLE . ';';
		list( $max_id, $image_count ) = pwg_db_fetch_row( pwg_query( $query ) );

		if ( 0 == $image_count ) {
			return array();
		}

		$start_id = $params['prev_page'];
		if ( $start_id <= 0 ) {
			$start_id = $max_id;
		}

		$uid = '&b=' . time();

		$conf['question_mark_in_urls'] = $conf['php_extension_in_urls'] = true;
		$conf['derivative_url_style']  = 2; //script

		$qlimit          = min( 5000, ceil( max( $image_count / 500, $max_urls / count( $types ) ) ) );
		$where_clauses   = ws_std_image_sql_filter( $params, '' );
		$where_clauses[] = 'id<start_id';

		if ( ! empty( $params['ids'] ) ) {
			$where_clauses[] = 'id IN (' . implode( ',', $params['ids'] ) . ')';
		}

		$query_model = '
SELECT id, path, representative_ext, width, height, rotation
  FROM ' . IMAGES_TABLE . '
  WHERE ' . implode( ' AND ', $where_clauses ) . '
  ORDER BY id DESC
  LIMIT ' . $qlimit . '
;';
		//echo $where_clauses;
		$urls = array();
		$file_path = $params['watermark'];
		$watermark = new WatermarkParams();
		$watermark->file =  $file_path;
		$watermark->xpos = 50;
		$watermark->ypos = 50;
		$watermark->xrepeat = 0;
		$watermark->yrepeat = 0;
		$watermark->opacity = $params['opacity'];
		$watermark->min_size = array(1,1);
		ImageStdParams::set_watermark($watermark);

		do {
			$result  = pwg_query( str_replace( 'start_id', $start_id, $query_model ) );
			$is_last = pwg_db_num_rows( $result ) < $qlimit;

			while ( $row = pwg_db_fetch_assoc( $result ) ) {
				$start_id  = $row['id'];
				$src_image = new SrcImage( $row );
				if ( $src_image->is_mimetype() ) {
					continue;
				}

				foreach ( $types as $type ) {
					ImageStdParams::apply_global($type);
					ImageStdParams::save();
					$derivative = new DerivativeImage( $type, $src_image );
					if ( IMG_CUSTOM != $derivative->get_type() ) {
						continue;
					}
                    if ( @filemtime( $derivative->get_path() ) !== false ) {
                        @unlink($derivative->get_path());
                    }
						$urls[] = $derivative->get_url() . $uid;
				}

				if ( count( $urls ) >= $max_urls and ! $is_last ) {
					break;
				}
			}
			if ( $is_last ) {
				$start_id = 0;
			}
		} while ( count( $urls ) < $max_urls and $start_id );

		$ret = array();
		if ( $start_id ) {
			$ret['next_page'] = $start_id;
		}
		$ret['urls'] = $urls;

		return $ret;
	}
}

function BatchCustomDerivatives_Load_WS( $arr ) {
	$service = &$arr[0];

	global $BatchCustomDerivatives_WS;
	$BatchCustomDerivatives_WS = new BatchCustomDerivatives_WS( $service );
}
