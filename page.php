<?php
	get_header();

 	the_title(); 
	
	echo wp_get_post_parent_id(get_the_ID());

	if(wp_get_post_parent_id(get_the_ID())) {
		echo 'child page';
	}

	?>

	<?php
		wp_list_pages();
	 ?>
	
	<?php
	while(have_posts()) {
		the_post(); ?>
		<h1>Page</h1>
			<h2> <?php the_title() ?></h2>
			<p><?php the_content() ?></p>
		<?php }

	get_footer();
?>