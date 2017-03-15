
<?php get_header(); ?>
    
    <?php if (is_active_sidebar('header')) : ?>
    <div class="header">
		<?php dynamic_sidebar('header'); ?>
	</div>
	<?php endif; ?>
	
	<?php if (is_active_sidebar('section1')) : ?>
	<div class="section1">
	    <div class="container">
    	    <div class="col-lg-12">
				<?php dynamic_sidebar('section1'); ?>
    	    </div>
	    </div>
	</div>
	<?php endif; ?>
	
	<?php if (is_active_sidebar('section2')) : ?>
	<div class="section2">
	    <div class="container">
		    <div class="col-lg-12">
				<?php dynamic_sidebar('section2'); ?>
		    </div>
	    </div>
	</div>
	<?php endif; ?>
	
	<?php if (is_active_sidebar('section3')) : ?>
	<div class="section3">
	    <div class="container">
		    <div class="row parallax_row">
			    <div class="col-lg-2">
				    <img class="comillas" src="/wp-content/themes/kiorutheme/images/elements/comillas.png"/>
			    </div>
			    <div class="col-lg-10">
					<?php dynamic_sidebar('section3'); ?>
			    </div>
		    </div>
	    </div>
	</div>
	<?php endif; ?>
	
	<?php if (is_active_sidebar('section4')) : ?>
	<div class="section4">
		<div class="img_s4 col-lg-6 col-md-6"></div>
		<div class="text_services col-lg-6 col-md-6">			
			<?php dynamic_sidebar('section4'); ?>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if (is_active_sidebar('section5')) : ?>
	<div class="section5">
	    <div class="container">
		    <div class="row parallax_row">
				<?php dynamic_sidebar('section5'); ?>
		    </div>
	    </div>
	</div>
	<?php endif; ?>
	
	<div class="main">
	    <div class="container">
		    <div class="col-lg-12">
			    <h2 class="widgettitle">Le blogue</h2>
			    <h3 class="widgettext">Tout au sujet de votre santé buccale</h3>
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
    </div><!-- /.main -->

	<?php if (is_active_sidebar('section6')) : ?>
	<div class="section6">
	    <div class="container">
		    <div class="col-lg-12">
				<?php dynamic_sidebar('section6'); ?>
		    </div>
	    </div>
	</div>
	<?php endif; ?>
	
	<?php if (is_active_sidebar('section7')) : ?>
	<div class="section7">
	    <div class="container">
		    <div class="col-lg-12">
				<?php dynamic_sidebar('section7'); ?>
		    </div>
	    </div>
	</div>
	<?php endif; ?>
	
	<?php if (is_active_sidebar('section8')) : ?>
	<div class="section8">
	    <div class="container">
		    <div class="col-lg-12">
				<?php dynamic_sidebar('section8'); ?>
		    </div>
	    </div>
	</div>
	<?php endif; ?>
	
	<?php if (is_active_sidebar('section9')) : ?>
	<div class="section9">
	    <div class="container">
		    <div class="col-lg-12">
				<?php dynamic_sidebar('section9'); ?>
		    </div>
	    </div>
	</div>
	<?php endif; ?>
	
	<?php if (is_active_sidebar('section10')) : ?>
	<div class="section10">
	    <div class="container">
		    <div class="col-lg-12">
				<?php dynamic_sidebar('section10'); ?>
		    </div>
	    </div>
	</div>
	<?php endif; ?>   


<?php get_footer(); ?>
