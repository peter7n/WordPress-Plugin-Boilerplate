<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Nguyen_Test
 * @subpackage Nguyen_Test/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Nguyen_Test
 * @subpackage Nguyen_Test/admin
 * @author     Your Name <email@example.com>
 */
class Nguyen_Test_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $nguyen_test    The ID of this plugin.
	 */
	private $nguyen_test;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $nguyen_test       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $nguyen_test, $version ) {

		$this->nguyen_test = $nguyen_test;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Nguyen_Test_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Nguyen_Test_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->nguyen_test, plugin_dir_url( __FILE__ ) . 'css/nguyen-test-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Nguyen_Test_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Nguyen_Test_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->nguyen_test, plugin_dir_url( __FILE__ ) . 'js/nguyen-test-admin.js', array( 'jquery' ), $this->version, false );

	}

}
