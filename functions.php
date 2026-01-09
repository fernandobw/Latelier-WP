<?php


/*
* Let WordPress manage the document title.
* By adding theme support, we declare that this theme does not use a
* hard-coded <title> tag in the document head, and expect WordPress to
* provide it for us.
*/
add_theme_support( 'title-tag' );

// Soporte de imágenes
add_theme_support( 'post-thumbnails' );

// Post
add_image_size( '413x353', 413, 353, true);

// Is dev?
define('IS_DEV', false );