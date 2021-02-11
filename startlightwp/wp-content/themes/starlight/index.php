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
 * @package starlight
 */

get_header();
?>

	<section id="slider" class="hero p-0">
	    <div class="swiper-container no-slider animation slider-h-100">
	        <div class="swiper-wrapper">

	            <!-- Item 1 -->
	            <div class="swiper-slide slide-center">

	                <video type="video/mp4" class="full-image" data-mask="70" src="<?php bloginfo('template_url'); ?>/assets/videos/project.mp4" autoplay muted loop></video> 

	                <!-- 
	                    Suggestion: Add a video to your <?php bloginfo('template_url'); ?>/assets folder and configure it here.

	                    <video type="video/mp4" class="full-image" data-mask="70" src="<?php bloginfo('template_url'); ?>/assets/videos/yourvideo.mp4" autoplay muted loop></video> 
	                -->

	                <div class="slide-content row">
	                    <div class="col-12 d-flex inner">
	                        <div class="center align-self-center text-center">
	                            <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">WE DEVELOPED <br>WEB & MOBILE APPS</h1>
	                            <a href="#contact" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto mt-5 btn primary-button"><i class="icon-cup"></i>GET STARTED</a>
	                        </div>
	                    </div>
	                </div>
	            </div>

	        </div>
	        <div class="swiper-pagination"></div>
	    </div>
	</section>

	<!-- Features -->
	<section id="features" class="section-1 offers featured">
	    <div class="container">
	        <div class="row justify-content-center text-center items">
	            <div class="col-12 col-md-6 col-lg-4 item">
	                <div class="card no-hover">
	                    <i class="icon icon-globe"></i>
	                    <h4>Website Pro</h4>
	                    <p>We build professional responsive websites optimized for the most popular search engines.</p>
	                </div>
	            </div>
	            <div class="col-12 col-md-6 col-lg-4 item">
	                <div class="card no-hover">
	                    <i class="icon icon-basket"></i>
	                    <h4>E-Commerce</h4>
	                    <p>Increase your sales with an incredible online store, full of features and functionality.</p>
	                </div>
	            </div>
	            <div class="col-12 col-md-6 col-lg-4 item">
	                <div class="card no-hover">
	                    <i class="icon icon-screen-smartphone"></i>
	                    <h4>Mobile Apps</h4>
	                    <p>Follow the global trend and create your revolutionary mobile app built with the best technologies.</p>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	<!-- About [video] -->
	<section id="video" class="section-2 highlights image-center">
	    <div class="container smaller">
	        <div class="row text-center intro">
	            <div class="col-12">
	                <h2>Institutional</h2>
	                <p class="text-max-800">Get to know a little of our history and the road we traveled that took us to the level we are today.</p>
	            </div>
	        </div>
	        <div class="row text-center">
	            <div class="col-12 gallery">
	                <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="square-image d-flex justify-content-center align-items-center">
	                    <i class="icon bigger icon-control-play"></i>
	                    <img src="<?php bloginfo('template_url'); ?>/assets/images/news-4.jpg" class="fit-image" alt="Fit Image">
	                </a>
	            </div>
	        </div>
	    </div>
	</section>

	<!-- Pricing -->
	<section id="pricing" class="section-3 odd plans featured">
	    <div class="container">
	        <div class="row text-center intro">
	            <div class="col-12">
	                <h2>Plans and Pricing</h2>
	                <p class="text-max-800">Choose the ideal plan for what you need. We work with affordable prices for all types of pocket.</p>
	            </div>
	        </div>
	        <div class="row justify-content-center text-center items">
	            <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
	                <div class="card">
	                    <i class="icon icon-handbag"></i>
	                    <h4>Essential</h4>
	                    <span class="price"><i>$</i>129</span>
	                    <ul class="list-group list-group-flush">
	                        <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                            <span>1 GB Photos</span>
	                            <i class="icon-min m-0 icon-check text-right"></i>
	                        </li>
	                        <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                            <span>Secure Online Transfer</span>
	                            <i class="icon-min m-0 icon-check text-right"></i>
	                        </li>
	                        <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                            <span>Unlimited Styles</span>
	                            <i class="icon-min m-0 icon-check text-right"></i>
	                        </li>
	                        <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                            <span>Customer Service</span>
	                            <i class="icon-min m-0 icon-close text-right"></i>
	                        </li>
	                        <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                            <span>Manual Backup</span>
	                            <i class="icon-min m-0 icon-close text-right"></i>
	                        </li>
	                    </ul>
	                    <a href="#contact" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>CHOSE PLAN</a>
	                </div>
	            </div>
	            <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
	                <div class="card">
	                    <i class="icon icon-fire"></i>
	                    <h4>Standard</h4>
	                    <span class="price"><i>$</i>199</span>
	                    <ul class="list-group list-group-flush">
	                        <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                            <span>3 GB Photos</span>
	                            <i class="icon-min m-0 icon-check text-right"></i>
	                        </li>
	                        <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                            <span>Secure Online Transfer</span>
	                            <i class="icon-min m-0 icon-check text-right"></i>
	                        </li>
	                        <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                            <span>Unlimited Styles</span>
	                            <i class="icon-min m-0 icon-check text-right"></i>
	                        </li>
	                        <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                            <span>Customer Service</span>
	                            <i class="icon-min m-0 icon-check text-right"></i>
	                        </li>
	                        <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                            <span>Manual Backup</span>
	                            <i class="icon-min m-0 icon-close text-right"></i>
	                        </li>
	                    </ul>
	                    <a href="#contact" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>CHOSE PLAN</a>
	                </div>
	            </div>
	            <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
	                <div class="card">
	                    <i class="icon icon-diamond"></i>
	                    <h4>Premium</h4>
	                    <span class="price"><i>$</i>299</span>
	                    <ul class="list-group list-group-flush">
	                        <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                            <span>Unlimited Photos</span>
	                            <i class="icon-min m-0 icon-check text-right"></i>
	                        </li>
	                        <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                            <span>Secure Online Transfer</span>
	                            <i class="icon-min m-0 icon-check text-right"></i>
	                        </li>
	                        <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                            <span>Unlimited Styles</span>
	                            <i class="icon-min m-0 icon-check text-right"></i>
	                        </li>
	                        <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                            <span>Customer Service</span>
	                            <i class="icon-min m-0 icon-check text-right"></i>
	                        </li>
	                        <li class="list-group-item d-flex justify-content-between align-items-center text-left">
	                            <span>Manual Backup</span>
	                            <i class="icon-min m-0 icon-check text-right"></i>
	                        </li>
	                    </ul>
	                    <a href="#contact" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>CHOSE PLAN</a>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	<!-- Portfolio -->
	<section id="portfolio" class="section-4 offers secondary">
	    <div class="container">
	        <div class="row intro">
	            <div class="col-12 col-md-9 align-self-center text-center text-md-left">
	                <h2 class="featured">Our Portfolio</h2>
	                <p>We have already built amazing things for our customers.</p>
	            </div>
	            <div class="col-12 col-md-3 align-self-end">
	                <a href="#" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-grid"></i>VIEW ALL</a>
	            </div>
	        </div>
	        <div class="row justify-content-center text-center items">
	            <div class="col-12 col-md-6 col-lg-4 item">
	                <div class="card featured">
	                    <h4>Visual Art</h4>
	                    <p>An impressive creation for a cosmetics company.</p>
	                    <div class="gallery">
	                        <a href="<?php bloginfo('template_url'); ?>/assets/images/work-1.jpg">
	                            <img src="<?php bloginfo('template_url'); ?>/assets/images/work-1.jpg" alt="Visual Art">
	                        </a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-12 col-md-6 col-lg-4 item">
	                <div class="card">
	                    <h4>Abstract Design</h4>
	                    <p>We seek to obtain something innovative from art.</p>
	                    <div class="gallery">
	                        <a href="<?php bloginfo('template_url'); ?>/assets/images/work-2.jpg">
	                            <img src="<?php bloginfo('template_url'); ?>/assets/images/work-2.jpg" alt="Abstract Design">
	                        </a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-12 col-md-6 col-lg-4 item">
	                <div class="card featured">
	                    <h4>Creative Painting</h4>
	                    <p>We combine the use of balanced colors with painting.</p>
	                    <div class="gallery">
	                        <a href="<?php bloginfo('template_url'); ?>/assets/images/work-3.jpg">
	                            <img src="<?php bloginfo('template_url'); ?>/assets/images/work-3.jpg" alt="Creative Painting">
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	<!-- Partners -->
	<section id="partner" class="section-5 odd logos featured">
	    <div class="overflow-holder">
	        <div class="container">
	            <div class="swiper-container min-slider">
	                <div class="swiper-wrapper">
	                    <div class="swiper-slide slide-center item">
	                        <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-1.png" class="fit-image w-85" alt="Fit Image">
	                    </div>
	                    <div class="swiper-slide slide-center item">
	                        <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-2.png" class="fit-image w-85" alt="Fit Image">
	                    </div>
	                    <div class="swiper-slide slide-center item">
	                        <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-3.png" class="fit-image w-85" alt="Fit Image">
	                    </div>
	                    <div class="swiper-slide slide-center item">
	                        <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-4.png" class="fit-image w-85" alt="Fit Image">
	                    </div>
	                    <div class="swiper-slide slide-center item">
	                        <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-5.png" class="fit-image w-85" alt="Fit Image">
	                    </div>
	                    <div class="swiper-slide slide-center item">
	                        <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-6.png" class="fit-image w-85" alt="Fit Image">
	                    </div>
	                    <div class="swiper-slide slide-center item">
	                        <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-7.png" class="fit-image w-85" alt="Fit Image">
	                    </div>
	                    <div class="swiper-slide slide-center item">
	                        <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-8.png" class="fit-image w-85" alt="Fit Image">
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	<!-- Contact -->
	<section id="contact" class="section-6 form">
	    <div class="container smaller">
	        <div class="row text-center intro">
	            <div class="col-12">
	                <h2>Let's Talk?</h2>
	                <p class="text-max-800">Talk to one of our consultants today and learn how to start leveraging your business.</p>
	            </div>
	        </div>
	        <form action="https://leverage.codings.dev/php/form.php" id="leverage-simple-form" class="leverage-simple-form">
	            <input type="hidden" name="section" value="leverage_form">

	            <input type="hidden" name="reCAPTCHA">
	            <!-- Remove this field if you want to disable recaptcha -->

	            <div class="row form-group-margin">
	                <div class="col-12 col-md-6 m-0 p-2 input-group">
	                    <input type="text" name="name" class="form-control field-name" placeholder="Name">
	                </div>
	                <div class="col-12 col-md-6 m-0 p-2 input-group">
	                    <input type="email" name="email" class="form-control field-email" placeholder="Email">
	                </div>
	                <div class="col-12 col-md-6 m-0 p-2 input-group">
	                    <input type="text" name="phone" class="form-control field-phone" placeholder="Phone">
	                </div>
	                <div class="col-12 col-md-6 m-0 p-2 input-group">
	                    <i class="icon-arrow-down mr-3"></i>
	                    <select name="budget" class="form-control field-budget">
	                        <option value="" selected disabled>What's your budget range?</option>
	                        <option>Less than $2.000</option>
	                        <option>$2.000 — $5.000</option>
	                        <option>$5.000 — $10.000</option>
	                        <option>$10,000+</option>
	                    </select>
	                </div>
	                <div class="col-12 m-0 p-2 input-group">
	                    <textarea name="message" class="form-control field-message" placeholder="Message"></textarea>
	                </div>
	                <div class="col-12 col-12 m-0 pl-md-2">
	                    <span class="form-alert"></span>
	                </div>
	                <div class="col-12 input-group m-0 p-2">
	                    <a class="btn primary-button">SEND</a>
	                </div>
	            </div>
	        </form>
	    </div>
	</section>

<?php
//get_sidebar();
get_footer();
