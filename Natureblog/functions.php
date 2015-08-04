<?php

if( function_exists( 'register_sidebar' )) {
	register_sidebar( array( 'name' => 'Sidebar' ) );
}; 

add_theme_support('post-thumbnails'); // підтримка мініатюр
set_post_thumbnail_size(225, 300, false);