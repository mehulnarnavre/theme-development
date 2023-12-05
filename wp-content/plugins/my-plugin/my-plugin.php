<?php
/*
 * Plugin Name:       My Basics Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

 if(!defined('ABSPATH')){
header("Location: /theme-development");
    //die('can not access');
 }
 
 echo "hii from my pkuin";


 function my_plugin_activation(){
    global $wpdb, $table_prefix; // using $wpdb we can coonect database
    $wp_emp =  $table_prefix.'emp'; // create table in db using this line

    $query = "CREATE TABLE IF NOT EXISTS `$wp_emp` (`ID` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(100) NOT NULL , `status` BOOLEAN NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;" ; // CREATE TABLE QUERY USING PHPMYADMIN
    $wpdb->query($query);

    // $query = "INSERT INTO `$wp_emp` (`name`, `email`, `status`) VALUES ('Mehul', 'mehul@test.com', 1); ";
    //$wpdb->query($query);
$data = array(
    'name'=> "Mehul",
    'email'=>"mehul@gmail.com",
    'status'=> 2
);
    $wpdb->insert($wp_emp, $data);
   
 }
 register_activation_hook(__FILE__,'my_plugin_activation');

 
 function my_plugin_deactivation(){
    global $wpdb, $table_prefix; // using $wpdb we can coonect database
    $wp_emp =  $table_prefix.'emp'; // create table in db using this line

    $query = "TRUNCATE `$wp_emp` ";
    $wpdb->query($query);
 }
 register_deactivation_hook(__FILE__,'my_plugin_deactivation');


// add_shortcode('my-sc','my_sc_function');
// function my_sc_function(){
//     return "shortcode is working";
// }