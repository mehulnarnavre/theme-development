<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    header("Location: /theme-development");
}

global $wpdb, $table_prefix; // using $wpdb we can coonect database
$wp_emp =  $table_prefix.'emp';
$query = "DROP TABLE `$wp_emp` ;";
$wpdb->query($query);