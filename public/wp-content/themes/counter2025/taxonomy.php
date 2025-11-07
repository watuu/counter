<?php
if ( is_tax( 'counter-media-category' ) ) {
    require_once( get_stylesheet_directory() . '/archive-counter-media.php' );
    exit;
}
if ( is_tax( 'download-category' ) ) {
    require_once( get_stylesheet_directory() . '/archive-download.php' );
    exit;
}

require_once ( get_stylesheet_directory() . '/archive.php');

