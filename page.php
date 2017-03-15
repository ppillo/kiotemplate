<?php
/**
 * The template for a single page
 *
 * @package WordPress
 * @subpackage Kioru
 */

get_header(); ?>

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
	
	<?php if (is_active_sidebar('top3')) : ?>
	<div class="top3">
	    <div class="container">
		    <div class="col-lg-12">
				<?php dynamic_sidebar('top3'); ?>
		    </div>
	    </div>
	</div>
	<?php endif; ?>
	
	<?php if (is_active_sidebar('top4')) : ?>
	<div class="top4">
		<?php dynamic_sidebar('top4'); ?>
	</div>
	<?php endif; ?>	

	<?php if (is_active_sidebar('top6')) : ?>
	<div class="top6">
	    <div class="container">
		    <div class="col-lg-12">
				<?php dynamic_sidebar('top6'); ?>
		    </div>
	    </div>
	</div>
	<?php endif; ?>
	
	<?php if (is_active_sidebar('top7')) : ?>
	<div class="top7">
	    <div class="container">
   		    <div class="row parallax_row">
			    <div class="col-lg-2">
				    <img class="comillas" src="/wp-content/themes/kiorutheme/images/elements/comillas.png"/>
			    </div>
			    <div class="col-lg-10">
					<?php dynamic_sidebar('top7'); ?>
			    </div>	
   		    </div>	    
	    </div>
	</div>
	<?php endif; ?>
	
	<?php if (is_active_sidebar('top8')) : ?>
	<div class="top8">
	    <div class="container">
		    <div class="col-lg-12">
				<?php dynamic_sidebar('top8'); ?>
		    </div>
	    </div>
	</div>
	<?php endif; ?>
	
	<?php get_footer(); ?>