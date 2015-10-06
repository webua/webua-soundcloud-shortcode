<?php
/*
Plugin Name: WebUA SoundCloud Shortcode
Plugin URI:
Description: Converts SoundCloud WordPress shortcodes to a SoundCloud widget. Example: [soundcloud]http://soundcloud.com/forss/flickermood[/soundcloud]
Version: 0.0.1
Author: WebUA
Author URI: https://github.com/webua
License: GPLv2
*/

class Webua_Soundcloud_Shortcode {
    public function __construct() {
        add_shortcode( 'soundcloud', array( $this, 'soundcloud' ) );
    }

    public function soundcloud($atts, $content = "") {

        var_dump($atts);

        var_dump($content);

        echo "<hr>";
    }
}

$soundcloud_shortcode = new Webua_Soundcloud_Shortcode();