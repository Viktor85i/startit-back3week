<?php

add_action( 'after_setup_theme', 'start_it_register_nav_menu' );
function start_it_register_nav_menu() {
    register_nav_menu( 'primary', 'Главное меню' );
}

add_theme_support('post-thumbnails');
add_image_size ('standart-blog-1',370 ,280 , true);
add_image_size ('img2',275 ,280 , true);
add_theme_support('custom-logo');

if(function_exists('acf_add_options_page')){

    $parent=acf_add_options_page([
        'page_title'=>'Theme Settings',
        'menu_title'=>'Theme Settings',
        'redirect'  =>false
    ]);

}