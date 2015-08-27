<?php 
/*
	Template Name: Full Page, about

 */
get_header(); ?>

<section class="about">
	<div class="content-wrapper">
		
		<?php // Start the loop ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>	

		<h2><?php the_title(); ?></h2>
		<?php echo get_avatar( $comment, 150 ); ?>
		<?php the_content(); ?>

		<?php endwhile; // end the loop ?>
	</div>

</section>

<?php get_footer(); ?>