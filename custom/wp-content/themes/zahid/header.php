<?php 



 ?>




 <!DOCTYPE html>

 <html <?php language_attributes(); ?>>

 <head>
 <meta charset="<?php bloginfo( 'charset' ); ?>" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="">
 <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
 <meta name="generator" content="Hugo 0.79.0">
 <title>Carousel Template · Bootstrap v5.0</title>

 <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">



     




 <!-- Responsive -->
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

 <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
 <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
 <?php wp_head(); ?>
 </head>

 <body <?php body_class(); ?> >
 <?php wp_body_open(); ?>



   
  <!-- header section -->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
       <div class="logo"><a href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="" title=""></a></div>

        <div class="collapse navbar-collapse" id="navbarCollapse">
         
         <ul class="navbar-nav me-auto mb-2 mb-md-0">


            <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbar-collapse-1',
            'container_class'=>'collapse navbar-collapse',
            'menu_class'=>'navbar-nav me-auto mb-2 mb-md-0',
            'fallback_cb'=>false,
            'items_wrap' => '%3$s',
            'container'=>false,
            'depth'=>'3',
            'walker'=> new Bootstrap_walker()
            ) ); ?>
            

            <!-- <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li> -->
           
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>


      </div>
    </nav>
  </header>