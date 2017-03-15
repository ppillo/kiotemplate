<?php
/**
 * The template for posts list on the feed
 *
 * @package WordPress
 * @subpackage Kioru
 */
?>		
	<div class="col-lg-6 col-md-6 category-blog">
		<?php if ( has_post_thumbnail() ) {?>
	
			<?php the_post_thumbnail( 'medium' ); ?>	
			
	
		<?php } else { ?>		
	
		<img src="/wp-content/themes/kiorutheme/images/slider/1.jpg" width="300" class="wp-post-image"/>
	
		<?php } ?>
		<p class="post-meta"><?php the_author(); ?> | <?php the_date(); ?></p>
			
		<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<?php the_excerpt(); ?>
	</div>


