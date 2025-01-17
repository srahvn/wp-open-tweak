<?php
/**
 * Plugin Name: WP Open Tweak
 * Description: A simple plugin for tweaking
 * Version: 1.0
 * Author: srahvn
 */

// Function to disable PHP version check
function disable_php_version_check() {
    return null;
}

// Hook into the 'pre_site_transient_update_core' filter
add_filter('pre_site_transient_update_core', 'disable_php_version_check');