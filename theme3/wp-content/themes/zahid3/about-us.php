
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
 * Template Name:about-us
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
                        <h1>About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- .end header-bg-page -->
        <!-- welcome-section -->
        <section class="welcome-section bg-overlay-1 pt-100 pb-70 bg-black">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-5 col-lg-5 pb-30">
                        <div class="section-title section-title-left text-center text-md-left m-0">
                            <small>Welcome To Fafo</small>
                            <h2 class="color-white">We Serve The Best Food Of The Country</h2>
                            <p>We are the country's no.1 Fast food retailer with 15+ years of reputation. Country's best burger and pizza are delivered by us. We gain the satisfaction of our customers with our delicate service and extreme high food quality.</p>
                            <a href="about-us.html" class="btn btn-icon">
                                More About Us
                                <i class="flaticon-right-arrow-sketch-1"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        <div class="about-image-grid">
                            <div class="about-image-grid-item">
                                <div class="about-image-grid-inner mb-30">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/welcome-image-1.jpg" alt="welcome">
                                </div>
                                <div class="about-image-grid-inner mb-30">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/welcome-image-2.jpg" alt="welcome">
                                </div>
                            </div>
                            <div class="about-image-grid-item">
                                <div class="about-image-grid-inner fluid-height">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/welcome-image-3.jpg" alt="welcome">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .end welcome-section -->
        <!-- video-section -->
        <div class="video-section p-tb-100">
            <div class="container">
                <div class="video-button">
                    <a href="https://www.youtube.com/watch?v=h_YmYLYi65k" id="video-popup"><i class="flaticon-play-button"></i></a>
                </div>
            </div>
        </div>
        <!-- .end video-section -->
        <!-- service-section -->
        <section class="service-section p-tb-100 bg-black">
            <div class="container-fluid">
                <div class="bg-main bg-overlay-transparent contain-box">
                    <div class="container">
                        <div class="section-title">
                            <h2 class="color-white">We Offer 3 Kinds Of Services</h2>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                                <div class="service-item">
                                    <div class="service-image">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/images/service-1.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h3>1. Dine In</h3>
                                        <p>Choose Your Best Combos From The Thousands Of Exciting Items.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 pb-30">
                                <div class="service-item">
                                    <div class="service-image">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/images/service-2.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h3>2. Take Away</h3>
                                        <p>Choose Your Best Combos From The Thousands Of Exciting Items.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 pb-30 offset-md-3 offset-lg-0">
                                <div class="service-item">
                                    <div class="service-image">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/images/service-3.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h3>3. Home Delivery</h3>
                                        <p>Choose Your Best Combos From The Thousands Of Exciting Items.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .end service-section -->
        <!-- team-section -->
        <section class="team-section p-tb-100 bg-black">
            <div class="container">
                <div class="section-title">
                    <small>Chef</small>
                    <h2 class="color-white">Who Made This Delicious Food</h2>
                </div>
                <div class="team-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="team-item team-item-light">
                            <div class="team-thumb">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/team-1.png" alt="client">
                                <div class="team-overlay">
                                    <ul class="social-list social-list-white">
                                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="carousel-name"><a href="#">Anthony Rasel</a></h3>
                                <h4 class="carousel-designation">Dessert Artist</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item team-item-light">
                            <div class="team-thumb">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/team-2.png" alt="client">
                                <div class="team-overlay">
                                    <ul class="social-list social-list-white">
                                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="carousel-name"><a href="#">Julia Margareta</a></h3>
                                <h4 class="carousel-designation">Snacks Artist</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item team-item-light">
                            <div class="team-thumb">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/team-3.png" alt="client">
                                <div class="team-overlay">
                                    <ul class="social-list social-list-white">
                                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="carousel-name"><a href="#">Victor James</a></h3>
                                <h4 class="carousel-designation">Senior Chef</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item team-item-light">
                            <div class="team-thumb">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/team-4.png" alt="client">
                                <div class="team-overlay">
                                    <ul class="social-list social-list-white">
                                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="carousel-name"><a href="#">Angela Carter</a></h3>
                                <h4 class="carousel-designation">Junior Chef</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item team-item-light">
                            <div class="team-thumb">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/team-1.png" alt="client">
                                <div class="team-overlay">
                                    <ul class="social-list social-list-white">
                                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="carousel-name"><a href="#">Anthony Rasel</a></h3>
                                <h4 class="carousel-designation">Dessert Artist</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item team-item-light">
                            <div class="team-thumb">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/team-2.png" alt="client">
                                <div class="team-overlay">
                                    <ul class="social-list social-list-white">
                                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="carousel-name"><a href="#">Julia Margareta</a></h3>
                                <h4 class="carousel-designation">Snacks Artist</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item team-item-light">
                            <div class="team-thumb">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/team-3.png" alt="client">
                                <div class="team-overlay">
                                    <ul class="social-list social-list-white">
                                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="carousel-name"><a href="#">Victor James</a></h3>
                                <h4 class="carousel-designation">Senior Chef</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item team-item-light">
                            <div class="team-thumb">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/team-4.png" alt="client">
                                <div class="team-overlay">
                                    <ul class="social-list social-list-white">
                                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="carousel-name"><a href="#">Angela Carter</a></h3>
                                <h4 class="carousel-designation">Junior Chef</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item team-item-light">
                            <div class="team-thumb">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/team-1.png" alt="client">
                                <div class="team-overlay">
                                    <ul class="social-list social-list-white">
                                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="carousel-name"><a href="#">Anthony Rasel</a></h3>
                                <h4 class="carousel-designation">Dessert Artist</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item team-item-light">
                            <div class="team-thumb">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/team-2.png" alt="client">
                                <div class="team-overlay">
                                    <ul class="social-list social-list-white">
                                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="carousel-name"><a href="#">Julia Margareta</a></h3>
                                <h4 class="carousel-designation">Snacks Artist</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item team-item-light">
                            <div class="team-thumb">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/team-3.png" alt="client">
                                <div class="team-overlay">
                                    <ul class="social-list social-list-white">
                                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="carousel-name"><a href="#">Victor James</a></h3>
                                <h4 class="carousel-designation">Senior Chef</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item team-item-light">
                            <div class="team-thumb">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/team-4.png" alt="client">
                                <div class="team-overlay">
                                    <ul class="social-list social-list-white">
                                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                        <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="carousel-name"><a href="#">Angela Carter</a></h3>
                                <h4 class="carousel-designation">Junior Chef</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .end team-section -->
        <!-- download-section -->
        <section class="download-section building-shape pt-100 pb-70 bg-overlay-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-lg-7 pb-30">
                        <div class="download-image-grid">
                            <div class="download-image-mobile">
                                <div class="download-image-mobile-item">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/mobile-shape-1.png" alt="mobile">
                                </div>
                                <div class="download-image-mobile-item">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/mobile-shape-2.png" alt="mobile">
                                </div>
                            </div>
                            <div class="download-image-rider">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/rider.png" alt="rider">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-5 pb-30">
                        <div class="about-content section-title text-center text-lg-right m-0">
                            <h2 class="color-white">Download Our App & Order Online To Get Free Delivery</h2>
                            <p>We are the country's no.1 Fast food retailer with 15+ years of reputation. Country's best burger and pizza are delivered by us. We gain the satisfaction of our customers with our delicate service and extreme high food quality.</p>
                            <ul class="button-list justify-content-center justify-content-lg-end">
                                <li>
                                    <a href="#" class="btn">
                                        Download From
                                        <i class="flaticon-playstore"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn">
                                        Download From
                                        <i class="icofont-brand-appstore"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .end download-section -->
        <!-- testimonial-section -->
        <section class="testimonial-section p-tb-100 bg-black bg-overlay-1">
            <div class="container">
                <div class="section-title">
                    <small>Review</small>
                    <h2 class="color-white">Clients Review About Our Food</h2>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial-carousel-item bg-main">
                            <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                            <div class="carousel-info-grid">
                                <div class="carousel-thumb">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/client-1.jpg" alt="client">
                                </div>
                                <div class="carousel-info text-right">
                                    <div class="review-star">
                                        <ul class="justify-content-end">
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        </ul>
                                    </div>
                                    <h3 class="carousel-name">Angela Carter</h3>
                                    <h4 class="carousel-designation">CEO of Rockings</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-carousel-item bg-main">
                            <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                            <div class="carousel-info-grid">
                                <div class="carousel-thumb">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/client-2.jpg" alt="client">
                                </div>
                                <div class="carousel-info text-right">
                                    <div class="review-star">
                                        <ul class="justify-content-end">
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        </ul>
                                    </div>
                                    <h3 class="carousel-name">John Karahan</h3>
                                    <h4 class="carousel-designation">Food Bloger</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-carousel-item bg-main">
                            <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                            <div class="carousel-info-grid">
                                <div class="carousel-thumb">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/client-3.jpg" alt="client">
                                </div>
                                <div class="carousel-info text-right">
                                    <div class="review-star">
                                        <ul class="justify-content-end">
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        </ul>
                                    </div>
                                    <h3 class="carousel-name">Anthony Artan</h3>
                                    <h4 class="carousel-designation">Restaurant Owner</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-carousel-item bg-main">
                            <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                            <div class="carousel-info-grid">
                                <div class="carousel-thumb">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/client-1.jpg" alt="client">
                                </div>
                                <div class="carousel-info text-right">
                                    <div class="review-star">
                                        <ul class="justify-content-end">
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        </ul>
                                    </div>
                                    <h3 class="carousel-name">Angela Carter</h3>
                                    <h4 class="carousel-designation">CEO of Rockings</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-carousel-item bg-main">
                            <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                            <div class="carousel-info-grid">
                                <div class="carousel-thumb">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/client-2.jpg" alt="client">
                                </div>
                                <div class="carousel-info text-right">
                                    <div class="review-star">
                                        <ul class="justify-content-end">
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        </ul>
                                    </div>
                                    <h3 class="carousel-name">John Karahan</h3>
                                    <h4 class="carousel-designation">Food Bloger</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-carousel-item bg-main">
                            <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                            <div class="carousel-info-grid">
                                <div class="carousel-thumb">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/client-3.jpg" alt="client">
                                </div>
                                <div class="carousel-info text-right">
                                    <div class="review-star">
                                        <ul class="justify-content-end">
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        </ul>
                                    </div>
                                    <h3 class="carousel-name">Anthony Artan</h3>
                                    <h4 class="carousel-designation">Restaurant Owner</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-carousel-item bg-main">
                            <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                            <div class="carousel-info-grid">
                                <div class="carousel-thumb">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/client-1.jpg" alt="client">
                                </div>
                                <div class="carousel-info text-right">
                                    <div class="review-star">
                                        <ul class="justify-content-end">
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        </ul>
                                    </div>
                                    <h3 class="carousel-name">Angela Carter</h3>
                                    <h4 class="carousel-designation">CEO of Rockings</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-carousel-item bg-main">
                            <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                            <div class="carousel-info-grid">
                                <div class="carousel-thumb">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/client-2.jpg" alt="client">
                                </div>
                                <div class="carousel-info text-right">
                                    <div class="review-star">
                                        <ul class="justify-content-end">
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        </ul>
                                    </div>
                                    <h3 class="carousel-name">John Karahan</h3>
                                    <h4 class="carousel-designation">Food Bloger</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-carousel-item bg-main">
                            <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                            <div class="carousel-info-grid">
                                <div class="carousel-thumb">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/client-3.jpg" alt="client">
                                </div>
                                <div class="carousel-info text-right">
                                    <div class="review-star">
                                        <ul class="justify-content-end">
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                            <li class="full-star"><i class="flaticon-star-1"></i></li>
                                        </ul>
                                    </div>
                                    <h3 class="carousel-name">Anthony Artan</h3>
                                    <h4 class="carousel-designation">Restaurant Owner</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .end testimonial-section -->
        <!-- gallery-section -->
        <section class="gallery-section p-tb-100 bg-black">
            <div class="container position-relative">
                <div class="section-title">
                    <small>Gallery</small>
                    <h2 class="color-white">See Our Happy Moments</h2>
                </div>
                <div class="gallery-grid">
                    <div class="gallery-grid-item">
                        <a href="assets/images/gallery-lg-1.jpg" title="Gallery 1"><img src="<?php bloginfo('template_url'); ?>/assets/images/gallery-1.jpg" alt="gallery"></a>
                    </div>
                    <div class="gallery-grid-item">
                        <a href="assets/images/gallery-lg-2.jpg" title="Gallery 2"><img src="<?php bloginfo('template_url'); ?>/assets/images/gallery-2.jpg" alt="gallery"></a>
                    </div>
                    <div class="gallery-grid-item">
                        <a href="assets/images/gallery-lg-3.jpg" title="Gallery 3"><img src="<?php bloginfo('template_url'); ?>/assets/images/gallery-3.jpg" alt="gallery"></a>
                    </div>
                    <div class="gallery-grid-item">
                        <a href="assets/images/gallery-lg-4.jpg" title="Gallery 4"><img src="<?php bloginfo('template_url'); ?>/assets/images/gallery-4.jpg" alt="gallery"></a>
                    </div>
                    <div class="gallery-grid-item">
                        <a href="assets/images/gallery-lg-5.jpg" title="Gallery 5"><img src="<?php bloginfo('template_url'); ?>/assets/images/gallery-5.jpg" alt="gallery"></a>
                    </div>
                </div>
                <div class="bg-shape">
                    <div class="bg-shape-item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/shape-1.png" alt="shape">
                    </div>
                    <div class="bg-shape-item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/shape-3.png" alt="shape">
                    </div>
                    <div class="bg-shape-item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/shape-2.png" alt="shape">
                    </div>
                </div>
            </div>
        </section>
        <!-- .end gallery-section -->
        <!-- subscribe-section -->
        <section class="subscribe-section mural-bg pt-100 pb-70 bg-main">
            <div class="container">
                <div class="subscribe-grid">
                    <div class="subscribe-item">
                        <div class="section-title text-center text-lg-left m-0">
                            <h2 class="color-white">Subscribe Our Newsletter</h2>
                            <p>Don't miss any upcoming event & Get your coupon via email.</p>
                        </div>
                    </div>
                    <div class="subscribe-item">
                        <div class="subscribe-form">
                            <form class="newsletter-form newsletter-form-white" data-toggle="validator">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="email" id="emails" class="form-control" placeholder="Enter Email Address*" name="EMAIL" required autocomplete="off">
                                    </div>
                                    <button class="btn btn-yellow" type="submit">Subscribe <i class="flaticon-right-arrow-sketch-1"></i></button>
                                </div>
                                <div id="validator-newsletter" class="form-result color-white"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        get_footer();