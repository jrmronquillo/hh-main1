<?php
	get_header();

 	//the_title(); 
	
	//echo wp_get_post_parent_id(get_the_ID());

	//if(wp_get_post_parent_id(get_the_ID())) {
		//echo 'child page';
	//}

	?>

	<?php
		//wp_list_pages();
	 ?>
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="<?php echo site_url('/') ?>">Home</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Portfolio <span class="sr-only">(current)</span></a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>

	 <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
	
	
	<?php
	while(have_posts()) {
		the_post(); ?>
			<h2> <?php the_title() ?></h2>
			<p><?php the_content() ?></p>
		
	<?php }
	get_footer();
	?>