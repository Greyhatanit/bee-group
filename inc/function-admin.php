<?php


/*
@package beegroup

=================================
ADMIN PAGE
 ==================================
 *
 */
function bee_add_admin_page(){

    //Generate BeeGroup Admin Page
    add_menu_page('BeeGroup Theme Options','BeeGroup','manage_options','asyan_bee','bee_theme_create_theme_page',get_template_directory_uri().'./assets/img/bee-logo.png', 4);

    //Generate  BeeGroup Admin Sub Pages

    add_submenu_page('asyan_bee', ' BeeGroup Settings', 'Settings', 'manage_options', 'asyan_bee', 'bee_group_settings_page');
    add_submenu_page('asyan_bee', ' BeeGroup Slider', 'Slider', 'manage_options', 'asyan_bee_slider', 'bee_group_slider_page');
    add_submenu_page('asyan_bee', ' Custom CSS', 'Custom CSS', 'manage_options', 'asyan_bee_custom_css', 'bee_group_custom_css_page');
    add_submenu_page('asyan_bee', 'About', 'About', 'manage_options', 'asyan_bee_about', 'bee_group_custom_About_page');


    //Activate Custom Settings
    add_action('admin_init','bee_group_custom_settings');
}//end of bee_add_admin_page function
add_action('admin_menu','bee_add_admin_page');



function bee_group_custom_settings() {
    register_setting('bee-settings-group', 'org_name');


}//end of bee_group_custom_settings

function bee_theme_create_theme_page(){
    //Generation of our Admin Page
    echo '<h1>Bee Group Theme Options for Settings </h1>';
}//end of bee_theme_create_theme_page function


function bee_group_settings_page(){
//Generation of BeeGroup Settings Page
 require_once( get_template_directory().'/inc/templates/bee-admin.php' );
}//end of bee_group_settings_page



function bee_group_slider_page(){
//Generation of BeeGroup Slider Page
echo'<h1> Slider Page for Bee Group</h1>';
}//end of bee_group_slider_page
function bee_group_custom_css_page(){
echo '<h1>Bee Group For Custom Theme</h1>';
}//end of bee_group_custom_css_page
function bee_group_custom_About_page(){
echo '<h1>Bee Group For About Theme </h1>';
}//end of bee_group_custom_About_page

