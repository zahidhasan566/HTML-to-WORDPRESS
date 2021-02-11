<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zahid3
 */

?>
<footer class="bg-overlay-1 bg-black">
    <div class="footer-upper pt-100 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 order-2 order-lg-1">
                    <div class="footer-content-list footer-content-item">
                        <div class="footer-content-title">

                            <h3>Our Offer</h3>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap flex-lg-nowrap desk-pad-right-30">
                           <!--  <?php $defaults = array(
                                'theme_location' => 'menu-2',
                                'menu' => 'footer-menu Navigation',
                                'container'       => 'div',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'footer-details footer-list',
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
                            
                            <ul class="footer-details footer-list">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="blogs-grid-without-sidebar.html">Blogs</a></li>
                                <li><a href="faqs.html">FAQ's</a></li>
                                <li><a href="reservation.html">Reservation</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="cart.html">Cart</a></li>
                            </ul>
                            <ul class="footer-details footer-list">
                                <li><a href="our-team.html">Teams</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 order-1 order-lg-2">
                    <div class="footer-content-item text-left text-lg-center">
                        <div class="footer-logo">
                            <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="logo"></a>
                        </div>
                        <ul class="footer-details footer-address">
                            <li>12 Poor Street, New York, USA</li>
                            <li><span>Hotline:</span><a href="tel:001-964-565-87652">+1 964 565 87652</a></li>
                            <li><span>Email:</span><a href="mailto:hello@fafo.com">hello@fafo.com</a></li>
                        </ul>
                        <div class="footer-follow">
                            <p>Follow Us:</p>
                            <ul class="social-list social-list-white">
                                <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                <li><a href="#"><i class="flaticon-youtube"></i></a></li>
                                <li><a href="#"><i class="flaticon-instagram-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 order-3">
                    <div class="footer-content-list footer-content-item desk-pad-left-30">
                        <div class="footer-content-title">
                            <h3>Open Hours</h3>
                        </div>
                        <ul class="footer-details footer-time">
                            <li>Saturday: <span>08:00 - 23.00</span></li>
                            <li>Sunday: <span>08:00 - 23.00</span></li>
                            <li>Monday: <span>08:00 - 21.00</span></li>
                            <li>Tuesday: <span>09:00 - 23.00</span></li>
                            <li>Wednesday: <span>08:00 - 23.00</span></li>
                            <li>Thursday: <span>08:00 - 23.00</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-lower">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="footer-lower-item">
                    <div class="footer-copyright-text footer-copyright-text-red">
                        <p>Copyright ©2020 Design &amp; Developed By <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
