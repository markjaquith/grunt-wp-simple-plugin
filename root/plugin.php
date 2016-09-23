<?php
/**
 * Plugin Name: {%= title %}
 * Plugin URI:  {%= homepage %}
 * Description: {%= description %}
 * Version:     0.1.0
 * Author:      {%= author_name %}
 * Author URI:  {%= author_url %}
 */

/**
 * Copyright (c) {%= grunt.template.today('yyyy') %} {%= author_name %} (email : {%= author_email %})
 */

defined( 'WPINC' ) or die;

class {%= classPrefix %}_Plugin {
	public static $instance;

	private function __construct() {}

	public static function get_instance() {
		if ( ! self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public static function init() {
		add_action( 'plugins_loaded', array( self::get_instance(), 'add_hooks' )  );
	}

	public function add_hooks() {
		// Add hooks here
	}

}

{%= classPrefix %}_Plugin::init();
