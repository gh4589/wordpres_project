<?php

echo 'functions file';

// Variables

// Includes 
include(get_theme_file_path('/includes/front/enqueue.php')); //Retrieves the path of a file in the theme.

// Hooks

add_action('wp_enqueue_scripts', 'u_enqueue');