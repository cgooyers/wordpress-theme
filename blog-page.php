<?php 
/*
	Template Name: Full Page, contact

 */
get_header(); ?>

<section class="contact">
	<div class="content-wrapper">

		
		<?php // Start the loop ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	

		<h2><?php the_title(); ?></h2>
		<div class="author-box">
			<?php the_author(); ?>
		</div>

		<?php the_content(); ?>

		<?php endwhile; // end the loop ?>

		<?php get_sidebar(); ?>
	</div>

</section>

<?php get_footer(); ?>