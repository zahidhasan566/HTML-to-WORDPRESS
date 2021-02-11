<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zahid3
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="Fafo">
	<meta name="keywords" content="HTML,CSS,JavaScript">
	<meta name="author" content="HiBootstrap">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<link rel="icon" href="assets/images/tab.png" type="image/png" sizes="16x16">

	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">

	<!-- Google fonts - witch you want to use - (rest you can just remove) -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300,200,100' rel='stylesheet' type='text/css'>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- preloader -->
<div class="preloader bg-main">
    <div class="preloader-wrapper">
        <div class="preloader-grid">
            <div class="preloader-grid-item preloader-grid-item-1"></div>
            <div class="preloader-grid-item preloader-grid-item-2"></div>
            <div class="preloader-grid-item preloader-grid-item-3"></div>
            <div class="preloader-grid-item preloader-grid-item-4"></div>
            <div class="preloader-grid-item preloader-grid-item-5"></div>
            <div class="preloader-grid-item preloader-grid-item-6"></div>
            <div class="preloader-grid-item preloader-grid-item-7"></div>
            <div class="preloader-grid-item preloader-grid-item-8"></div>
            <div class="preloader-grid-item preloader-grid-item-9"></div>
        </div>
    </div>
</div>
<!-- .end preloader -->
<!-- topbar -->
<div class="topbar bg-main">
    <div class="container">
        <div class="topbar-inner">
            <div class="topbar-item topbar-padding">
                <ul class="social-list social-list-white">
                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                    <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                    <li><a href="#"><i class="flaticon-youtube"></i></a></li>
                    <li><a href="#"><i class="flaticon-instagram-1"></i></a></li>
                </ul>
            </div>
            <div class="topbar-item">
                <div class="topbar-right d-flex flex-wrap topbar-right justify-content-center justify-content-md-start full-height">
                    <div class="topbar-right-item topbar-padding color-white">
                        <i class="flaticon-clock"></i>
                        Friday Closed
                    </div>
                    <div class="topbar-right-item topbar-padding color-white">
                        <i class="flaticon-placeholder-1"></i>
                        12 Poor Street, New York.
                    </div>
                    <div class="topbar-right-item topbar-padding color-white">
                        <i class="flaticon-smartphone-call"></i>
                        <a href="tel:001-964-565-87652" class="color-white">+1 964 565 87652</a>
                    </div>
                    <div class="topbar-right-item topbar-padding language-button">
                        <button class="dropdown-toggle color-white" type="button" id="language1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/usa.png" alt="flag">
                            Eng
                        </button>
                        <div class="dropdown-menu" aria-labelledby="language1">
                            <a class="dropdown-item" href="#">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/uk.png" alt="flag">
                                English
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/germany.png" alt="flag">
                                Deutsch
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/china.png" alt="flag">
                                简体中文
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/arab.png" alt="flag">
                                العربيّة
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header>
    <!-- navbar -->
    <div class="fixed-top">
        <div class="navbar-area navbar-dark">
            <!-- mobile menu -->
            <div class="mobile-nav">
                <a href="<?php echo esc_url( home_url( '/home/' ) ); ?>" class="mobile-brand">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="logo" class="blue-logo">
                </a>
                <!-- mobile navbar-option -->
                <div class="navbar-option d-flex align-items-center">
                    <div class="navbar-option-item navbar-option-dots mobile-hide">
                        <button class="dropdown-toggle" type="button" id="mobileOptionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-menu-1"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="mobileOptionDropdown">
                            <div class="navbar-option-item navbar-option-cart">
                                <a href="#" class="productCart"><i class="flaticon-supermarket-basket"></i></a>
                                <span class="option-badge">2</span>
                            </div>
                            <div class="navbar-option-item navbar-option-order">
                                <a href="#" class="btn">
                                    <i class="flaticon-shopping-cart-black-shape"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-option-item navbar-option-authentication">
                        <button class="navbar-authentication-button" type="button" id="auth2" data-toggle="dropdown" aria-haspopup="true" ><i class="flaticon-add-user"></i></button>
                        <div class="authentication-box dropdown-menu" aria-labelledby="auth2">
                            <div class="authentication-close"><i class="flaticon-cancel"></i></div>
                            <div class="authentication-body">
                                <ul class="authentication-tab">
                                    <li class="authentication-tab-item active" data-authentication-tab="1">Log In</li>
                                    <li class="authentication-tab-item" data-authentication-tab="2">Sign Up</li>
                                </ul>
                                <div class="authentication-details">
                                    <div class="authentication-details-item active" data-authentication-details="1">
                                        <form>
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="User Name" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="password" class="form-control" placeholder="Password" />
                                                </div>
                                            </div>
                                            <div class="authentication-action mb-20">
                                                <div class="authentication-action-item">
                                                    <a href="forget-password.html">Forget Password?</a>
                                                </div>
                                                <div class="authentication-action-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="check3">
                                                        <label class="custom-control-label" for="check3">Remember Me</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="authentication-btn">
                                                <button class="btn full-width btn-border mb-20">Log In</button>
                                                <button class="btn full-width"><i class="icofont-google-plus"></i>Log In With Google</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="authentication-details-item" data-authentication-details="2">
                                        <form>
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="User Name" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Email" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="password" class="form-control" placeholder="Password" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <input type="password" class="form-control" placeholder="Confirm Password" />
                                                </div>
                                            </div>
                                            <div class="authentication-action mb-20">
                                                <div class="authentication-action-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="check4">
                                                        <label class="custom-control-label" for="check4">I agree that my submitted data is being collected and stored. For further details on handling user data, see our <a href="privacy-policy.html">Privacy Policy</a>.</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="authentication-btn">
                                                <button class="btn full-width btn-border mb-20">Log In</button>
                                                <button class="btn full-width"><i class="icofont-google-plus"></i>Log In With Google</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-option-item navbar-option-search">
                        <button class="dropdown-toggle" type="button" id="search2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-loupe"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="search2">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button><i class="flaticon-loupe"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="navbar-option-item navbar-option-cart mobile-block">
                        <a href="#" class="productCart"><i class="flaticon-supermarket-basket"></i></a>
                        <span class="option-badge">2</span>
                    </div>
                    <div class="navbar-option-item navbar-option-order mobile-block">
                        <a href="shops-grid.html" class="btn">
                            <i class="flaticon-shopping-cart-black-shape"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- desktop menu -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="logo" class="logo">
                        </a>
                        <!-- nav-list -->
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            
                           <!--  <?php $defaults = array(
                                'theme_location' => 'menu-1',
                                'menu' => 'Primary Navigation',
                                'container'       => 'div',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'navbar-nav ml-auto',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          =>''
                            );
                            ?>
                             
                            <?php wp_nav_menu( $defaults ); ?> -->

                             
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="<?php echo esc_url( home_url( '/home/' ) ); ?>" class="nav-link dropdown-toggle active">HOME</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link active">Home 1 (With Revolution)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link">Home 2 (With Revolution)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.html" class="nav-link">Home 3 (With Revolution)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-1-without-revolution.html" class="nav-link">Home 4 (Without Revolution)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2-without-revolution.html" class="nav-link">Home 5 (Without Revolution)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3-without-revolution.html" class="nav-link">Home 6 (Without Revolution)</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo esc_url( home_url( '/menu/' ) ); ?>" class="nav-link">MENU</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">PAGES</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="nav-link">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faqs.html" class="nav-link">FAQ's</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="our-history.html" class="nav-link">Our History</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services.html" class="nav-link">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle">Team</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="our-team.html" class="nav-link">Our Team</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="team-details.html" class="nav-link">Team Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle">Restaurent</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="careers.html" class="nav-link">Careers</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="deals.html" class="nav-link">Deals</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="reservation.html" class="nav-link">Reservation</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="catering.html" class="nav-link">Catering</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle">Shop</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="shops-grid.html" class="nav-link">Shop Grid</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="shop-details.html" class="nav-link">Shop Details</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="cart.html" class="nav-link">Cart</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="wishlist.html" class="nav-link">Wishlist</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="checkout.html" class="nav-link">Checkout</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="tracking-order.html" class="nav-link">Tracking Order</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="my-account.html" class="nav-link">My Account</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="testimonial.html" class="nav-link">Testimonial</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle">Others</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="search-page.html" class="nav-link">Search Page</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="forget-password.html" class="nav-link">Forget Password</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="404.html" class="nav-link">404 Error Page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">BLOG</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blogs-grid-without-sidebar.html" class="nav-link">Blog Grid </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blogs-list-with-sidebar.html" class="nav-link">Blog List </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blogs-3.html" class="nav-link">Blog 3 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact-us.html" class="nav-link">CONTACT US</a>
                                </li>
                            </ul> 
                        </div>
                        <!-- navbar-option -->
                        <div class="navbar-option d-flex align-items-center">
                            <div class="navbar-option-item navbar-option-authentication">
                                <button class="navbar-authentication-button" type="button" id="auth1" data-toggle="dropdown" aria-haspopup="true" ><i class="flaticon-add-user"></i></button>
                                <div class="authentication-box dropdown-menu" aria-labelledby="auth1">
                                    <div class="authentication-close"><i class="flaticon-cancel"></i></div>
                                    <div class="authentication-body">
                                        <ul class="authentication-tab">
                                            <li class="authentication-tab-item active" data-authentication-tab="1">Log In</li>
                                            <li class="authentication-tab-item" data-authentication-tab="2">Sign Up</li>
                                        </ul>
                                        <div class="authentication-details">
                                            <div class="authentication-details-item active" data-authentication-details="1">
                                                <form>
                                                    <div class="form-group mb-20">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="User Name" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-20">
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" placeholder="Password" />
                                                        </div>
                                                    </div>
                                                    <div class="authentication-action mb-20">
                                                        <div class="authentication-action-item">
                                                            <a href="forget-password.html">Forget Password?</a>
                                                        </div>
                                                        <div class="authentication-action-item">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="check1">
                                                                <label class="custom-control-label" for="check1">Remember Me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="authentication-btn">
                                                        <button class="btn full-width btn-border mb-20">Log In</button>
                                                        <button class="btn full-width"><i class="icofont-google-plus"></i>Log In With Google</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="authentication-details-item" data-authentication-details="2">
                                                <form>
                                                    <div class="form-group mb-20">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="User Name" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-20">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Email" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-20">
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" placeholder="Password" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-20">
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" placeholder="Confirm Password" />
                                                        </div>
                                                    </div>
                                                    <div class="authentication-action mb-20">
                                                        <div class="authentication-action-item">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="check2">
                                                                <label class="custom-control-label" for="check2">I agree that my submitted data is being collected and stored. For further details on handling user data, see our <a href="privacy-policy.html">Privacy Policy</a>.</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="authentication-btn">
                                                        <button class="btn full-width btn-border mb-20">Log In</button>
                                                        <button class="btn full-width"><i class="icofont-google-plus"></i>Log In With Google</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-option-item navbar-option-search">
                                <button class="dropdown-toggle" type="button" id="search1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-loupe"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="search1">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <button><i class="flaticon-loupe"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="navbar-option-item navbar-option-cart">
                                <a href="#" class="productCart"><i class="flaticon-supermarket-basket"></i></a>
                                <span class="option-badge">2</span>
                            </div>
                            <div class="navbar-option-item navbar-option-order">
                                <a href="<?php echo esc_url( home_url( '/order-online/' ) ); ?>" class="btn">
                                    Order Online <i class="flaticon-shopping-cart-black-shape"></i>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- .end navbar -->
</header>

