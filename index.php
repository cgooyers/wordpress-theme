<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
	
		<div class="main-blog">
		  	<div class="blog-header">
		  		<h2><?php bloginfo( 'name' ); ?></h2>
		  		<h3><?php bloginfo( 'description' ); ?></h3>
		  	</div>
		  <div class="container">


		    <div class="content">
		    		<?php get_template_part( 'loop', 'index' );	?>
		    </div> <!--/.content -->
		    
		    <?php get_sidebar(); ?>

		  </div> <!-- /.container -->
		</div> <!-- /.main -->
		<?php get_footer(); ?>
	
