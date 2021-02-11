<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zahid3
 * Template Name:menu
 */

get_header();
?>

<div class="header-bg header-bg-page">
    <div class="header-padding position-relative">
        <div class="header-page-shape">
            <div class="header-page-shape-item">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-1.png" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-2.png" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-3.png" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-1.png" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-4.png" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-1.png" alt="shape">
            </div>
            <div class="header-page-shape-item">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-3.png" alt="shape">
            </div>
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>Our Menu</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Our Menu</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- .end header-bg-page -->
<!-- menu-section -->
<section class="menu-section bg-black p-tb-100">
    <div class="container position-relative">
        <div class="section-title">
            <small>Menu</small>
            <h2 class="color-white">Just Choose From The Best</h2>
        </div>
        <div class="menu-main-carousel-area">
            <div class="menu-main-thumb-nav">
                <div class="menu-main-thumb-item menu-main-thumb-black">
                    <div class="menu-main-thumb-inner">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/menu-2.png" alt="menu">
                        <p>PIZZA</p>
                    </div>
                </div>
                <div class="menu-main-thumb-item menu-main-thumb-black">
                    <div class="menu-main-thumb-inner">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/menu-1.png" alt="menu">
                        <p>BURGER</p>
                    </div>
                </div>
                <div class="menu-main-thumb-item menu-main-thumb-black">
                    <div class="menu-main-thumb-inner">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/menu-3.png" alt="menu">
                        <p>SANDWITCH</p>
                    </div>
                </div>
                <div class="menu-main-thumb-item menu-main-thumb-black">
                    <div class="menu-main-thumb-inner">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/menu-4.png" alt="menu">
                        <p>SHAKE</p>
                    </div>
                </div>
                <div class="menu-main-thumb-item menu-main-thumb-black">
                    <div class="menu-main-thumb-inner">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/menu-5.png" alt="menu">
                        <p>ICE-CREAME</p>
                    </div>
                </div>
                <div class="menu-main-thumb-item menu-main-thumb-black">
                    <div class="menu-main-thumb-inner">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/menu-6.png" alt="menu">
                        <p>DESSERT</p>
                    </div>
                </div>
            </div>
            <div class="menu-main-details-for">
                <div class="menu-main-details-item">
                    <div class="receipe-grid receipe-grid-three">
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-receipe-1.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Pepperoni Pizza</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-receipe-2.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Beefka Pizza</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-receipe-3.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Chicken Pizza</a></h3>
                                        <h4>$6.57<del>$7.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-receipe-4.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Avocado Pizza</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-receipe-5.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Vegan Pizza</a></h3>
                                        <h4>$7.45<del>$8.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-receipe-6.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Meat Pizza</a></h3>
                                        <h4>$8.45<del>$9.24</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-receipe-2.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Ball Pizza</a></h3>
                                        <h4>$9.45<del>$10.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-receipe-1.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Green Pizza</a></h3>
                                        <h4>$8.45<del>$12.01</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-receipe-4.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Pepperoni Pizza</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-receipe-1.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Pepperoni Pizza</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-receipe-2.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Beefka Pizza</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-receipe-3.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Chicken Pizza</a></h3>
                                        <h4>$6.57<del>$7.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="pro.html" class="btn load-more-btn">
                            <span class="load-more-text">Load More</span>
                            <span class="load-more-icon"><i class="icofont-refresh"></i></span>
                        </a>
                    </div>
                </div>
                <div class="menu-main-details-item">
                    <div class="receipe-grid receipe-grid-three">
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-receipe-1.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Pepperoni Burger</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-receipe-2.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Beefka Burger</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-receipe-3.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Chicken Burger</a></h3>
                                        <h4>$6.57<del>$7.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-receipe-4.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Avocado Burger</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-receipe-5.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Vegan Burger</a></h3>
                                        <h4>$7.45<del>$8.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-receipe-6.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Meat Burger</a></h3>
                                        <h4>$8.45<del>$9.24</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-receipe-7.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Ball Burger</a></h3>
                                        <h4>$9.45<del>$10.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-receipe-8.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Green Burger</a></h3>
                                        <h4>$8.45<del>$12.01</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-receipe-9.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Pepperoni Burger</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-receipe-5.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Pepperoni Burger</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-receipe-2.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Beefka Burger</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-receipe-8.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Chicken Burger</a></h3>
                                        <h4>$6.57<del>$7.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="pro.html" class="btn load-more-btn">
                            <span class="load-more-text">Load More</span>
                            <span class="load-more-icon"><i class="icofont-refresh"></i></span>
                        </a>
                    </div>
                </div>
                <div class="menu-main-details-item">
                    <div class="receipe-grid receipe-grid-three">
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-receipe-1.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Pepperoni Sandwitch</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-receipe-2.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Beefka Sandwitch</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-receipe-3.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Chicken Sandwitch</a></h3>
                                        <h4>$6.57<del>$7.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-receipe-4.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Avocado Sandwitch</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-receipe-5.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Vegan Sandwitch</a></h3>
                                        <h4>$7.45<del>$8.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-receipe-6.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Meat Sandwitch</a></h3>
                                        <h4>$8.45<del>$9.24</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-receipe-7.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Ball Sandwitch</a></h3>
                                        <h4>$9.45<del>$10.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-receipe-8.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Green Sandwitch</a></h3>
                                        <h4>$8.45<del>$12.01</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-receipe-9.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Pepperoni Sandwitch</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-receipe-3.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Pepperoni Sandwitch</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-receipe-6.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Beefka Sandwitch</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-receipe-1.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Chicken Sandwitch</a></h3>
                                        <h4>$6.57<del>$7.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="pro.html" class="btn load-more-btn">
                            <span class="load-more-text">Load More</span>
                            <span class="load-more-icon"><i class="icofont-refresh"></i></span>
                        </a>
                    </div>
                </div>
                <div class="menu-main-details-item">
                    <div class="receipe-grid receipe-grid-three">
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-receipe-1.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Strawberry Shake</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-receipe-2.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Cream Shake</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-receipe-3.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Cherry Venilla</a></h3>
                                        <h4>$6.57<del>$7.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-receipe-4.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Fruty Pebble</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-receipe-5.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Oreo Shake</a></h3>
                                        <h4>$7.45<del>$8.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-receipe-6.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Banana Shake</a></h3>
                                        <h4>$8.45<del>$9.24</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-receipe-7.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Italiano Shake</a></h3>
                                        <h4>$9.45<del>$10.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-receipe-8.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Green Cream</a></h3>
                                        <h4>$8.45<del>$12.01</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-receipe-9.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Cappuccino Shake</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-receipe-4.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Cherry Shake</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-receipe-1.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Strawberry Shake</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-receipe-7.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Cherry Venilla</a></h3>
                                        <h4>$6.57<del>$7.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="pro.html" class="btn load-more-btn">
                            <span class="load-more-text">Load More</span>
                            <span class="load-more-icon"><i class="icofont-refresh"></i></span>
                        </a>
                    </div>
                </div>
                <div class="menu-main-details-item">
                    <div class="receipe-grid receipe-grid-three">
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-receipe-1.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Italiano Icecream</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-receipe-2.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Creamy Icecream</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-receipe-3.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Chocolate Layer</a></h3>
                                        <h4>$6.57<del>$7.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-receipe-4.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Regular Cream</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-receipe-5.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Light Flavour</a></h3>
                                        <h4>$7.45<del>$8.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-receipe-6.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">French Icecream</a></h3>
                                        <h4>$8.45<del>$9.24</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-receipe-7.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Creamy Icecream</a></h3>
                                        <h4>$9.45<del>$10.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-receipe-8.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Milk Flavour</a></h3>
                                        <h4>$8.45<del>$12.01</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-receipe-9.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Perfect Pear</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-receipe-5.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Italiano Icecream</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-receipe-2.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">French Icecream</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-receipe-6.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Light Icecream</a></h3>
                                        <h4>$6.57<del>$7.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="pro.html" class="btn load-more-btn">
                            <span class="load-more-text">Load More</span>
                            <span class="load-more-icon"><i class="icofont-refresh"></i></span>
                        </a>
                    </div>
                </div>
                <div class="menu-main-details-item">
                    <div class="receipe-grid receipe-grid-three">
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-receipe-1.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Frozen</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-receipe-2.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Decadent</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-receipe-3.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Zesty</a></h3>
                                        <h4>$6.57<del>$7.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-receipe-4.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Luscious</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-receipe-5.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Creamy</a></h3>
                                        <h4>$7.45<del>$8.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-receipe-6.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Oreo Mixed</a></h3>
                                        <h4>$8.45<del>$9.24</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-receipe-7.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Zesty</a></h3>
                                        <h4>$9.45<del>$10.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-receipe-8.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Luscious</a></h3>
                                        <h4>$8.45<del>$12.01</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-receipe-9.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Creamy</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-receipe-3.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Oreo Mixed</a></h3>
                                        <h4>$4.59<del>$7.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-receipe-6.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Frozen</a></h3>
                                        <h4>$5.12<del>$6.59</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
                            <div class="receipe-item-inner">
                                <div class="receipe-image">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-receipe-8.png" alt="receipe">
                                </div>
                                <div class="receipe-content">
                                    <div class="receipe-info">
                                        <h3><a href="shop-details.html">Creamy</a></h3>
                                        <h4>$6.57<del>$7.12</del></h4>
                                    </div>
                                    <div class="receipe-cart">
                                        <a href="#">
                                            <i class="flaticon-supermarket-basket"></i>
                                            <i class="flaticon-supermarket-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="pro.html" class="btn load-more-btn">
                            <span class="load-more-text">Load More</span>
                            <span class="load-more-icon"><i class="icofont-refresh"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .end menu-section -->
<!-- step-section -->
<section class="step-section p-tb-100 bg-black">
    <div class="container">
        <div class="section-title">
            <h2 class="color-white">3 Easy Steps To Enjoy</h2>
        </div>
        <div class="steps-box">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="steps-item">
                        <h3>1. Choose</h3>
                        <p>Choose Your Best Combos From The Thousands Of Exciting Items.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="steps-item">
                        <h3>2. Pay</h3>
                        <p>Pay Through Online Easily. We Use The Most Safe way In Payment.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 offset-md-3 offset-lg-0">
                    <div class="steps-item">
                        <h3>3. Enjoy</h3>
                        <p>Enjoy Your Meal From The Core Of Heart & Feel The Taste Inside.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
get_footer();