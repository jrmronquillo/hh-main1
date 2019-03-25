<?php 

function site_files() {
	wp_enqueue_script('main-javascript', get_theme_file_uri('/js/app.js'), null, '1.0', true);

	wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_script('jquery');
	wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
	wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto');
	wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css');
	wp_enqueue_style('site_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'site_files');


function site_features() {
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'site_features');


?>
