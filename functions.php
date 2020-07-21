<?php
function osamadev_theme_support(){

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

function osamadev_menus(){

$locations = array(

'primary'=>"Desktop Primary Left Sidebar",
'footer'=>"Footer Menu Items" 

);
register_nav_menus($locations);
}
add_action('init','osamadev_menus');

add_action('after_setup_theme','osamadev_theme_support');

function osamadev_style(){
    $version=wp_get_theme()->get('Version');
wp_enqueue_style('osamadev-fontcolor',get_template_directory_uri(). "/style.css",array('osamadev-bootstrap'),$version,'all');
wp_enqueue_style('osamadev-style',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(),'5.13.0','all');
wp_enqueue_style('osamadev-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",array(),'4.4.1','all');

}

add_action('wp_enqueue_scripts','osamadev_style');

function osamadev_widget_areas(){
    
}



?>