<?php

$template_dir = get_template_directory();

require_once $template_dir . '/includes/theme-setup.php';
require_once $template_dir . '/includes/enqueue.php';

// Hide Admin Bar
add_filter( 'show_admin_bar', '__return_false' );
