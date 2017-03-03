<?php
/*
Plugin Name: Media Uploader Load Type Sample Plugin
Plugin URI: https://github.com/miiitaka/media-uploader-load
Description: Media uploader load type sample plugin.
Version: 1.0.0
Author: Kazuya Takami
Author https://www.terakoya.work/
License: GPLv2 or later
*/

new Media_Uploader_Load();

class Media_Uploader_Load {
	public function __construct () {
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	public function admin_menu () {
		$page = add_menu_page(
			'Uploader Load Sample',
			'Uploader Load Sample',
			'manage_options',
			plugin_basename( __FILE__ ),
			array( $this, 'page_render' )
		);

		add_action( 'admin_print_styles-'  . $page, array( $this, 'add_style' ) );
		add_action( 'admin_print_scripts-' . $page, array( $this, 'admin_scripts') );
	}

	public function add_style () {
		wp_enqueue_style( 'thickbox' );
	}

	public function admin_scripts () {
		wp_enqueue_script( 'media-uploader-main-js', plugins_url( 'js/media-uploader-main.js', __FILE__ ), array( 'jquery' ) );
		wp_enqueue_script( 'media-upload' );
		wp_enqueue_script( 'thickbox' );
	}

	public function page_render () {
		echo '<div class="wrap">';
		echo '<h1>Media Uploader ( Load Type )</h1>';
		echo '<p><img id="image-view" src="' . plugins_url( 'images/no-image.gif', __FILE__ ) . '" width="260"></p>';
		echo '<p><input id="image-url" type="text" class="large-text"></p>';
		echo '<button id="media-upload">Choose Image</button>';
		echo '</div>';
	}
}