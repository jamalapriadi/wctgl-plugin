<?php
/*
 * Plugin Name: WCTGL Plugin
 * Plugin URI: https://plugin-url.com
 * Description: Sample Plugin for WP Meetup Tegal
 * Version: 0.1
 * Author: Jamal Apriadi
 * Author URI: https://jamalapriadi.com
 */

 require_once plugin_dir_path(__FILE__) . 'includes/wctgl-functions.php';
 require_once plugin_dir_path(__FILE__) . 'includes/wctgl-shortcode.php';

 add_action('wp_head','kode_adsense_wctgl', 20);
 function kode_adsense_wctgl() { ?>
    <script data-ad-client="ca-pub-xxxxxxxxxxxxxxxx-wctgl" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <?php
 }

 add_filter('the_title', 'wctgl_new_title');
 function wctgl_new_title($title) {
    $title = strtoupper($title);
    return $title;
 }