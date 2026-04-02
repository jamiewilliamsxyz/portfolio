<?php

$template_dir = get_template_directory();

// Hide Admin Bar
add_filter( 'show_admin_bar', '__return_false' );
