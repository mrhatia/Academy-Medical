<?php
/**
 * Ajax related functions
 *
 * @link https://codex.wordpress.org/AJAX#Ajax_in_WordPress
 *
 * @package Academy Medical
 * @since 1.0.0
 */

namespace AcademyMedical \Ajax;

/**
 * Template Class For Ajax
 *
 * Template Class
 *
 * @category Setting_Class
 * @package  Academy Medical
 */
class Academy_Medical _Ajax {
	/**
	 * Define class Constructor
	 **/
	public function __construct() {

		add_action( 'wp_ajax_nopriv_ajax_filter', array( $this, 'ajax_filter' ) );
		add_action( 'wp_ajax_ajax_filter', array( $this, 'ajax_filter' ) );
	}


	/**
	 * Define ajax filter
	 **/
	public function ajax_filter() {

	}

}
new Academy_Medical _Ajax();
