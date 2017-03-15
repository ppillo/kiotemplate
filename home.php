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
	
	<div class="main blog">
	    <div class="container">
		    <div class="col-lg-12">
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
			
					get_template_part( 'content', get_post_format() );
			
				endwhile; ?>
				
				<nav>
					<ul class="pager">
						<li><?php next_posts_link( 'Previous' ); ?></li>
						<li><?php previous_posts_link( 'Next' ); ?></li>
					</ul>
				</nav>
				
				<?php
				endif; 
			?>
		    </div>
	    </div>
	</div>
<?php get_footer(); ?>