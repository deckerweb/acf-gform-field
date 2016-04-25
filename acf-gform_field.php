<?php

/*
Plugin Name: Advanced Custom Fields: Gravity Forms Field
Plugin URI: https://github.com/apmeyer/acf-gform-field
Description: Select from your Gravity Forms
Version: 1.0.0
Author: Adam Meyer
Author URI: http://apmeyer.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// exit if accessed directly
if( ! defined( 'ABSPATH' ) ) exit;


// check if class already exists
if( !class_exists('acf_plugin_gform_field') ) :

class acf_plugin_gform_field {
	
	/*
	*  __construct
	*
	*  This function will setup the class functionality
	*
	*  @type	function
	*  @date	17/02/2016
	*  @since	1.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function __construct() {
		
		// vars
		$this->settings = array(
			'version'	=> '1.0.0',
			'url'		=> plugin_dir_url( __FILE__ ),
			'path'		=> plugin_dir_path( __FILE__ )
		);
		
		
		// set text domain
		// https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
		load_plugin_textdomain( 'acf-gform_field', false, plugin_basename( dirname( __FILE__ ) ) . '/lang' ); 
		
		
		// include field
		add_action('acf/include_field_types', 	array($this, 'include_field_types_acf5')); // v5
		// add_action('acf/register_fields', 		array($this, 'include_field_types_acf4')); // v4
		
	}
	
	
	/*
	*  include_field_types_4
	*
	*  This function will include the field type class for ACF4
	*
	*  @type	function
	*  @date	15/04/2016
	*  @since	1.0.0
	*
	*  @param	none
	*  @return	n/a
	*/
	
	function include_field_types_acf4() {
		include_once('fields/acf-gform_field-v4.php');
	}
	
	/*
	*  include_field_types_5
	*
	*  This function will include the field type class for ACF5
	*
	*  @type	function
	*  @date	15/04/2016
	*  @since	1.0.0
	*
	*  @param	none
	*  @return	n/a
	*/
	
	function include_field_types_acf5() {
		include_once('fields/acf-gform_field-v5.php');
	}
	
}


// initialize
new acf_plugin_gform_field();


// class_exists check
endif;
	
?>