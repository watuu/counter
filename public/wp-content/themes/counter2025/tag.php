<?php
if ( is_tag() ) {
    require_once get_stylesheet_directory() . '/archive-counter-media.php';
    exit;
}
require_once ( get_stylesheet_directory() . '/archive.php');

