<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
  </head>

  <body>

    <div class="main-menu">
      <div class="container">
	    <img class="logo" src="/wp-content/themes/kiorutheme/images/logo.png" alt="logo" />
	    <ul class="menu">
			<?php wp_list_pages( '&title_li=', 'menu_order' ); ?>   		
	    </ul>
      </div>
    </div>
    
    <div class="space_menu"></div>      
