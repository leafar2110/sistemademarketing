<?php

get_header(); ?>
<?php get_template_part('partials/header-general'); ?>
<div class="container generalPage">
	
	<div class="main-breadcrumb__general">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
      </ol>
    </nav>
  </div>


	<?php
		// Start the loop.
	while ( have_posts() ) : the_post();

			// Include the page content template.
		/*	get_template_part( 'content', 'page' );*/
		the_content();

			// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
	endif;

		// End the loop.
endwhile;
?>
</div>
<?php get_footer(); ?>
