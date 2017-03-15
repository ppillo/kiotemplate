
	</div><!-- /.container -->
	
	<div class="blocks-footer">
	    <div class="container">
	    	
	    	<?php if (is_active_sidebar('f1')) : ?>
			<div class="col-lg-4 col-md-4">				
				<?php dynamic_sidebar('f1'); ?>
			</div><!-- /.col-lg-4 -->
			<?php endif; ?>
				
			<?php if (is_active_sidebar('f2')) : ?>
			<div class="col-lg-4 col-md-4">				
				<?php dynamic_sidebar('f2'); ?>
			</div><!-- /.col-lg-4 -->
			<?php endif; ?>
			
			<?php if (is_active_sidebar('f3')) : ?>
			<div class="col-lg-4 col-md-4">				
				<?php dynamic_sidebar('f3'); ?>
			</div><!-- /.col-lg-4 -->
			<?php endif; ?>
			
	    </div>
	</div>

      
	<footer class="page-footer"> 
		<div class="container">  
			<nav class="menu-footer">				
				<?php wp_list_pages( '&title_li=' ); ?>   		
				<p class="pull-right"><a class="btn btn-default glyphicon glyphicon-chevron-up btn_top" href="#"></a></p>
			</nav>
			<p>Destisterie Intégrale, tous droits réservés, 2016 · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
		</div><!-- /.container -->
	</footer>
    
    <?php wp_footer(); ?>
    
  </body>
</html>