<!--
	Menu
	<li><a class="menu-item active" href="<?php bloginfo( 'wpurl' );?>">Accueil</a></li> 
	<?php dynamic_sidebar('main-menu'); ?> 

	
	Pages		
<div class="container">
	<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			get_template_part( 'content', get_post_format() );
		endwhile; endif; 
	?>
</div> <!-- /.row -->

-->