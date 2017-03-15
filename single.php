<?php
/**
 * The template for a single page
 *
 * @package WordPress
 * @subpackage Kioru
 */

get_header(); ?>

	<?php if (is_active_sidebar('header_blog')) : ?>
    <div class="header_blog">
		<?php dynamic_sidebar('header_blog'); ?>
	</div>
	<?php endif; ?>
	
	<?php if (is_active_sidebar('top1')) : ?>
	<div class="top1">
    	<?php dynamic_sidebar('top1'); ?>
	</div>
	<?php endif; ?>
	
	<?php if (is_active_sidebar('top2')) : ?>
	<div class="top2">
	    <div class="container">
			<?php dynamic_sidebar('top2'); ?>
	    </div>
	</div>
	<?php endif; ?>	

	<div class="container">
		<div class="col-sm-12 blog-post">

		<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				
				get_template_part( 'content-single', get_post_format() );
			endwhile; endif; 						
		?>		

		</div> <!-- /.col -->
	</div>
	
	<?php if (is_active_sidebar('top6')) : ?>
	<div class="top6">
	    <div class="container">
		    <div class="col-lg-12">
				<?php dynamic_sidebar('top6'); ?>
		    </div>
	    </div>
	</div>
	<?php endif; ?>	
	
	
	<?php if (is_active_sidebar('top8')) : ?>
	<div class="top8">
	    <div class="container">
		    <div class="col-lg-12">
				<h2>Article recommandés:</h2>
				<ul>
				<?php
					$args = array( 'numberposts' => '5' );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"] .'</a> </li> ';
					}
					wp_reset_query();
				?>
				</ul>
		    </div>
	    </div>
	</div>
	<?php endif; ?>
	
		

<?php get_footer(); ?>