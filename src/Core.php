<?php
/**
 *	@package PDFRenderer\Core
 *	@version 1.0.0
 *	2018-09-22
 */

namespace McGuffin\Core;

if ( ! defined('ABSPATH') ) {
	die('FU!');
}

class Core {

	private static $_instance = null;

	public static function get() : CoreInterface {
		return self::$_instance;
	}

	public static function set( CoreInterface $instance ) {
		if ( ! is_null( self::$_instance ) ) {
			throw new \Exception('Core already set');
		}
		self::$_instance = $instance;
	}

}
