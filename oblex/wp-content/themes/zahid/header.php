<?php 



 ?>




 <!DOCTYPE html>

 <html <?php language_attributes(); ?>>

 <head>
 <meta charset="<?php bloginfo( 'charset' ); ?>" />
 <title>Globex HTML-5 Template | Homepage</title>
 <!-- Stylesheets -->


 <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@300;600;700;800;900&amp;display=swap" rel="stylesheet">

 <!-- Color Switcher Mockup -->


 <!-- Color Themes -->


 <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon">
 <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon">

 <!-- Responsive -->
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

 <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
 <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
 <?php wp_head(); ?>
 </head>

 <body <?php body_class('hidden-bar-wrapper'); ?> >
 <?php wp_body_open(); ?>


 <div class="page-wrapper"> 
   
     <!-- Preloader -->
     <div class="preloader"></div>
   
   <!-- Main Header-->
     <header class="main-header header-style-one">
       
     <!-- Header Top -->
         <div class="header-top">
             <div class="auto-container">
                 <div class="clearfix">
           <!-- Top Left -->
           <div class="top-left">
             <!-- Info List -->
             <ul class="info-list">
               <li><a href="mailto:info@webmail.com"><span class="icon flaticon-email"></span> info@webmail.com</a></li>
               <li><a href="tel:786-875-864-75"><span class="icon flaticon-telephone"></span> 786 875 864 75</a></li>
             </ul>
           </div>
           
           <!-- Top Right -->
                     <div class="top-right pull-right">
             <!-- Social Box -->
             <ul class="social-box">
               <li><a href="#" class="fa fa-facebook-f"></a></li>
               <li><a href="#" class="fa fa-twitter"></a></li>
               <li><a href="#" class="fa fa-dribbble"></a></li>
               <li><a href="#" class="fa fa-google"></a></li>
             </ul>
                     </div>
           
                 </div>
             </div>
         </div>
     
     <!--Header-Upper-->
         <div class="header-upper">
           <div class="auto-container clearfix">
               
         <div class="pull-left logo-box">
           <div class="logo"><a href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" title=""></a></div>
         </div>
         
         <div class="nav-outer clearfix">
           <!--Mobile Navigation Toggler-->
           <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
           <!-- Main Menu -->
           <nav class="main-menu navbar-expand-md">
             <div class="navbar-header">
               <!-- Toggle Button -->      
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
             </div>
             
             <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
            
              <ul class="navigation clearfix">

             <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbar-collapse-1',
             'container_class'=>'navbar-collapse collapse navbar-right',
             'menu_class'=>'nav navbar-nav',
             'fallback_cb'=>false,
             'items_wrap' => '%3$s',
             'container'=>false,
             'depth'=>'3',
             'walker'=> new Bootstrap_walker()
             ) ); ?>
           </ul>


              <!--  <ul class="navigation clearfix">
                 <li class="current dropdown"><a href="#">Home</a>
                
                 </li>
                 <li class="dropdown"><a href="#">About</a>
                   <ul>
                     <li><a href="about.html">About Us</a></li>
                     <li><a href="faq.html">Faq</a></li>
                     <li><a href="price.html">Price</a></li>
                     <li><a href="team.html">Team</a></li>
                     <li><a href="testimonial.html">Testimonial</a></li>
                     <li><a href="comming-soon.html">Comming Soon 1</a></li>
                   </ul>
                 </li>
                 <li class="dropdown"><a href="#">Services</a>
                   <ul>
                     <li><a href="services.html">Services</a></li>
                     <li><a href="services-detail.html">Services Detail</a></li>
                   </ul>
                 </li>
                 <li class="dropdown"><a href="#">Projects</a>
                   <ul>
                     <li><a href="projects.html">Projects</a></li>
                     <li><a href="projects-detail.html">Projects Detail</a></li>
                   </ul>
                 </li>
              
             
                
               </ul> -->
             </div>
           </nav>
           
           <!-- Main Menu End-->
           <div class="outer-box clearfix">
           
             <!-- Cart Box -->
             <div class="cart-box">
               <div class="dropdown">
                 <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-shopping-bag-1"></span><span class="total-cart">2</span></button>
                 <div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu1">

                   <div class="cart-product">
                     <div class="inner">
                       <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                       <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/resource/post-thumb-1.jpg" alt="" /></div>
                       <h3><a href="shop-single.html">Flying Ninja</a></h3>
                       <div class="quantity-text">Quantity 1</div>
                       <div class="price">$99.00</div>
                     </div>
                   </div>
                   <div class="cart-product">
                     <div class="inner">
                       <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                       <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/resource/post-thumb-2.jpg" alt="" /></div>
                       <h3><a href="shop-single.html">Patient Ninja</a></h3>
                       <div class="quantity-text">Quantity 1</div>
                       <div class="price">$99.00</div>
                     </div>
                   </div>
                   <div class="cart-total">Sub Total: <span>$198</span></div>
                   <ul class="btns-boxed">
                     <li><a href="shoping-cart.html">View Cart</a></li>
                     <li><a href="checkout.html">CheckOut</a></li>
                   </ul>

                 </div>
               </div>
             </div>
             
             <!-- Search Btn -->
             <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>
             
             <!-- Nav Btn -->
             <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>
             
             <!-- Quote Btn -->
             <div class="btn-box">
               <a href="contact.html" class="theme-btn btn-style-one"><span class="txt">Free Consulting</span></a>
             </div>
               
           </div>
         </div>
         
             </div>
         </div>
         <!--End Header Upper-->
         
     <!-- Sticky Header  -->
         <div class="sticky-header">
             <div class="auto-container clearfix">
                 <!--Logo-->
                 <div class="logo pull-left">
                     <a href="index.html" title=""><img src="<?php bloginfo('template_url'); ?>/images/logo-small.png" alt="" title=""></a>
                 </div>
                 <!--Right Col-->
                 <div class="pull-right">
                     <!-- Main Menu -->
                     <nav class="main-menu">
                         <!--Keep This Empty / Menu will come through Javascript-->
                     </nav><!-- Main Menu End-->
           
           <!-- Main Menu End-->
           <div class="outer-box clearfix">
           
             <!-- Cart Box -->
             <div class="cart-box">
               <div class="dropdown">
                 <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-shopping-bag-1"></span><span class="total-cart">2</span></button>
                 <div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu">

                   <div class="cart-product">
                     <div class="inner">
                       <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                       <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/resource/post-thumb-1.jpg" alt="" /></div>
                       <h3><a href="shop-single.html">Flying Ninja</a></h3>
                       <div class="quantity-text">Quantity 1</div>
                       <div class="price">$99.00</div>
                     </div>
                   </div>
                   <div class="cart-product">
                     <div class="inner">
                       <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                       <div class="image"><img src="<?php bloginfo('template_url'); ?>/images/resource/post-thumb-2.jpg" alt="" /></div>
                       <h3><a href="shop-single.html">Patient Ninja</a></h3>
                       <div class="quantity-text">Quantity 1</div>
                       <div class="price">$99.00</div>
                     </div>
                   </div>
                   <div class="cart-total">Sub Total: <span>$198</span></div>
                   <ul class="btns-boxed">
                     <li><a href="shoping-cart.html">View Cart</a></li>
                     <li><a href="checkout.html">CheckOut</a></li>
                   </ul>

                 </div>
               </div>
             </div>
             
             <!-- Search Btn -->
             <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>
             
             <!-- Nav Btn -->
             <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>
             
           </div>
           
                 </div>
             </div>
         </div><!-- End Sticky Menu -->
     
     <!-- Mobile Menu  -->
         <div class="mobile-menu">
             <div class="menu-backdrop"></div>
             <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
             
             <nav class="menu-box">
                 <div class="nav-logo"><a href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" title=""></a></div>
                 <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
             </nav>
         </div><!-- End Mobile Menu -->
   
     </header>
     <!-- End Main Header -->