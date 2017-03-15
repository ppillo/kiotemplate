<?php
/**
 * The template for a post
 *
 * @package WordPress
 * @subpackage Kioru
 */
 
?>

	<div class="avatar-single col-sm-12 col-md-12 col-lg-12">
		<?php echo get_avatar( $default, 64 ); ?>
		<p class="">
			<b><?php the_author(); ?></b><br/>
			<?php get_the_author_meta('description'); ?> <br/>
			<?php the_date(); ?>
			 
		</p>
	</div>	
	
	<h2 class="post-title-single"><?php the_title(); ?></h2>	
	
	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'large' );
	} ?>
	<div class="post-single">
		<?php the_content(); ?>
	</div>