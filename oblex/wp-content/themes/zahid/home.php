<?php

$zahid_theme_option = get_option('zahid_theme_option');
 
get_header();
?>
  
  <!-- Sidebar Cart Item -->
  <div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
      <div class="sidebar-widget-container">
        <div class="widget-heading">
          <a href="#" class="close-side-widget">
            X
          </a>
        </div>
        <div class="sidebar-textwidget">
          
          <!-- Sidebar Info Content -->
          <div class="sidebar-info-contents">
            <div class="content-inner">
              <div class="logo">
                <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/logo-2.png" alt="" /></a>
              </div>
              <div class="content-box">
                <h2>About Us</h2>
                <p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
                <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
              </div>
              <div class="contact-info">
                <h2>Contact Info</h2>
                <ul class="list-style-one">
                  <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
                  <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                  <li><span class="icon fa fa-envelope"></span>globex@gmail.com</li>
                  <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                </ul>
              </div>
              <!-- Social Box -->
              <ul class="social-box">
                <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- END sidebar widget item -->
  





  <!-- Banner Section -->
    <section class="banner-section">
    <div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide" style="background-image: url(<?php bloginfo('template_url'); ?>/images/main-slider/image-1.jpg)">
        <div class="patern-layer-one" style="background-image: url(<?php bloginfo('template_url'); ?>/images/main-slider/pattern-1.png)"></div>
        <div class="patern-layer-two" style="background-image: url(<?php bloginfo('template_url'); ?>/images/main-slider/pattern-2.png)"></div>
        <div class="auto-container">
          
          <!-- Content Column -->
          <div class="content-column">
            <div class="inner-column">
              <div class="patern-layer-three" style="background-image: url(<?php bloginfo('template_url'); ?>/images/main-slider/pattern-3.png)"></div>
              <div class="title">IT Business Consulting</div>
              <h1>Our Agency Provide <br> Best IT Solutions</h1>
              <div class="text">We are 100+ professional software engineers with more than <br> 10 years of experience in delivering superior products.</div>
              <div class="btns-box">
                <a href="about.html" class="theme-btn btn-style-one"><span class="txt">Learn More</span></a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <div class="slide" style="background-image: url(<?php bloginfo('template_url'); ?>/images/main-slider/image-1.jpg)">
        <div class="patern-layer-one" style="background-image: url(<?php bloginfo('template_url'); ?>/images/main-slider/pattern-1.png)"></div>
        <div class="patern-layer-two" style="background-image: url(<?php bloginfo('template_url'); ?>/images/main-slider/pattern-2.png)"></div>
        <div class="auto-container">
          
          <!-- Content Column -->
          <div class="content-column">
            <div class="inner-column">
              <div class="patern-layer-three" style="background-image: url(<?php bloginfo('template_url'); ?>/images/main-slider/pattern-3.png)"></div>
              <div class="title">IT Business Consulting</div>
              <h1>Our Agency Provide <br> Best IT Solutions</h1>
              <div class="text">We are 100+ professional software engineers with more than <br> 10 years of experience in delivering superior products.</div>
              <div class="btns-box">
                <a href="about.html" class="theme-btn btn-style-one"><span class="txt">Learn More</span></a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <div class="slide" style="background-image: url(<?php bloginfo('template_url'); ?>/images/main-slider/image-1.jpg)">
        <div class="patern-layer-one" style="background-image: url(<?php bloginfo('template_url'); ?>/images/main-slider/pattern-1.png)"></div>
        <div class="patern-layer-two" style="background-image: url(<?php bloginfo('template_url'); ?>/images/main-slider/pattern-2.png)"></div>
        <div class="auto-container">
          
          <!-- Content Column -->
          <div class="content-column">
            <div class="inner-column">
              <div class="patern-layer-three" style="background-image: url(<?php bloginfo('template_url'); ?>/images/main-slider/pattern-3.png)"></div>
              <div class="title">IT Business Consulting</div>
              <h1>Our Agency Provide <br> Best IT Solutions</h1>
              <div class="text">We are 100+ professional software engineers with more than <br> 10 years of experience in delivering superior products.</div>
              <div class="btns-box">
                <a href="about.html" class="theme-btn btn-style-one"><span class="txt">Learn More</span></a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
    </div>
    
  </section>
  <!-- End Banner Section -->









  <!-- About Section -->
  <section class="about-section">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title">
        <div class="title"><?php echo stripslashes($zahid_theme_option['subtitle']);?></div>
        <h2><?php echo stripslashes($zahid_theme_option['heading']);?></h2>
      </div>
      <div class="row clearfix">
        
        <!-- Content Column -->
        <div class="content-column col-lg-6 col-md-12 col-sm-12">
          <div class="inner-column">
            <div class="text"><?php echo stripslashes($zahid_theme_option['company-description']);?> </div>
            <div class="blocks-outer">
            
              <!-- Feature Block -->
              <div class="feature-block">
                <div class="inner-box">
                  <div class="icon flaticon-award-1"></div>
                  <h6><?php echo stripslashes($zahid_theme_option['short-info1']);?></h6>
                  <div class="feature-text"><?php echo stripslashes($zahid_theme_option['short-info1-text']);?></div>
                </div>
              </div>
              
              <!-- Feature Block -->
              <div class="feature-block">
                <div class="inner-box">
                  <div class="icon flaticon-technical-support"></div>
                  <h6><?php echo stripslashes($zahid_theme_option['short-info2']);?></h6>
                  <div class="feature-text"><?php echo stripslashes($zahid_theme_option['short-info2-text']);?></div>
                </div>
              </div>
              
            </div>
            
            <a href="<?php echo stripslashes($zahid_theme_option['video-link']);?>" target="_blank" class="lightbox-image theme-btn btn-style-one"><span class="txt"><i class="play-icon"><img src="<?php bloginfo('template_url'); ?>/images/icons/play-icon.png" alt="" /></i>&ensp; intro Video</span></a>
            
          </div>
        </div>
        
        <!-- Images Column -->
        <div class="images-column col-lg-6 col-md-12 col-sm-12">
          <div class="inner-column" style="background-image: url(<?php bloginfo('template_url'); ?>/images/icons/globe.png)">
            <div class="pattern-layer" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-1.png)"></div>
            <div class="images-outer parallax-scene-1">
              <div class="image" data-depth="0.10">
                <img src="<?php bloginfo('template_url'); ?>/images/resource/about-1.jpg" alt="" />
              </div>
              <div class="image-two" data-depth="0.30">
                <img src="<?php bloginfo('template_url'); ?>/images/resource/about-2.jpg" alt="" />
              </div>
              <div class="image-three" data-depth="0.20">
                <img src="<?php bloginfo('template_url'); ?>/images/resource/about-3.jpg" alt="" />
              </div>
              <div class="image-four" data-depth="0.30">
                <img src="<?php bloginfo('template_url'); ?>/images/resource/about-4.jpg" alt="" />
              </div>
            </div>
          </div>
          <a href="about.html" class="learn"><span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Learn More About Company</a>
        </div>
        
      </div>
    </div>
  </section>
  <!-- End About Section -->
  
  <!-- Featured Section -->
  <section class="featured-section">
    <div class="auto-container">
      <div class="row clearfix">
        
        <!-- Featured Block Two -->
        <div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
          <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image: url<?php bloginfo('template_url'); ?>/images/resource/feature-1.jpg)">
            <div class="number">35 +</div>
            <h4>Worldwide Work Pair</h4>
            <div class="text">To succeed, every software solution must be deeply integrated into the existing tech environment..</div>
          </div>
        </div>
        
        <!-- Featured Block Two -->
        <div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
          <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image: url(<?php bloginfo('template_url'); ?>/images/resource/feature-2.jpg)">
            <div class="number">40 k</div>
            <h4>Happy Clients</h4>
            <div class="text">To succeed, every software solution must be deeply integrated into the existing tech environment..</div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- End Featured Section -->
  
  <!-- Services Section -->
  <section class="services-section margin-top">
    <div class="pattern-layer" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-2.png)"></div>
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title light centered">
        <div class="title">WHO WE ARE</div>
        <h2>We deal with the aspects of <br> professional IT Services</h2>
      </div>
      <div class="row clearfix">
        
        <!-- Service Block -->
        <div class="service-block col-lg-3 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="icon-box">
              <span class="icon flaticon-responsive"></span>
            </div>
            <h5><a href="services-detail.html">IT Soluations</a></h5>
            <div class="text">Sed ut perspiciatis unde omnis iste natus error volup validate your ideas.</div>
            <a href="services-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
          </div>
        </div>
        
        <!-- Service Block -->
        <div class="service-block col-lg-3 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="icon-box">
              <span class="icon flaticon-monitor"></span>
            </div>
            <h5><a href="services-detail.html">Security System</a></h5>
            <div class="text">Sed ut perspiciatis unde omnis iste natus error volup validate your ideas.</div>
            <a href="services-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
          </div>
        </div>
        
        <!-- Service Block -->
        <div class="service-block col-lg-3 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="icon-box">
              <span class="icon flaticon-coding"></span>
            </div>
            <h5><a href="services-detail.html">Web Development</a></h5>
            <div class="text">Sed ut perspiciatis unde omnis iste natus error volup validate your ideas.</div>
            <a href="services-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
          </div>
        </div>
        
        <!-- Service Block -->
        <div class="service-block col-lg-3 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="icon-box">
              <span class="icon flaticon-laptop"></span>
            </div>
            <h5><a href="services-detail.html">Database Security</a></h5>
            <div class="text">Sed ut perspiciatis unde omnis iste natus error volup validate your ideas.</div>
            <a href="services-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- End Services Section -->
  
  <!-- Services Section Two -->
  <section class="services-section-two margin-top">
    <div class="auto-container">
      <div class="upper-box">



        <div class="icon-one" style="background-image: url(<?php bloginfo('template_url'); ?>/images/icons/icon-1.png)"></div>
        <div class="icon-two" style="background-image: url(<?php bloginfo('template_url'); ?>/images/icons/icon-2.png)"></div>
        <div class="icon-three" style="background-image: url(<?php bloginfo('template_url'); ?>/images/icons/icon-3.png)"></div>
        <!-- Sec Title -->
        <div class="sec-title light centered">
          <div class="title">WHO WE ARE</div>
          <h2> <a href="http://localhost/oblex/service2/" style="color: white;"> Our Services </a></h2>
        </div>
      </div>
      <div class="inner-container">
        <div class="row clearfix">
          
          


          <?php 
                  $the_query = new WP_Query( array(
                      'post_type' => 'service',
                      'posts_per_page' => 3,
                      'orderby' => 'menu_order', 
                      'order' => 'DESC',
                  ) );

                  while ( $the_query->have_posts() ) :
                      $the_query->the_post();
                  ?>
          <!-- Service Block Two -->

          <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="shape-one"></div>
              <div class="shape-two"></div>
              <div class="icon-box">
                <span class="icon flaticon-coding-1"></span>
              </div>
              <h5><a href="services-detail.html"><?php the_title( sprintf( '<h5 class="mb-0"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' ); ?></a></h5>

              
              <div class="text">
                <?php the_excerpt(); ?>
               </div>
            </div>
          </div>
          <?php
              endwhile;
              wp_reset_postdata();
          

          ?>
        
       
          
        </div>
      </div>
    </div>
  </section>
  <!-- End Services Section Two -->
  
  <!-- Call To Action Section -->
 
  <!-- End Call To Action Section -->
  
  <!-- Cases Section -->
  <section class="cases-section">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title centered">
        <div class="title">LATEST CASE STUDIES</div>
        <h2>Reads Now Our Recent <br> Projects Studies</h2>
      </div>
      <div class="row clearfix">
        
        <!-- Case Block -->
        <div class="case-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <img src="<?php bloginfo('template_url'); ?>/images/gallery/1.jpg" alt="" />
              <div class="overlay-box">
                <a href="images/gallery/1.jpg" data-fancybox="case" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
                <div class="content">
                  <h4><a href="projects-detail.html">Social Media App</a></h4>
                  <div class="category">Ideas / Technology</div>
                </div>
                <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Case Block -->
        <div class="case-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <img src="<?php bloginfo('template_url'); ?>/images/gallery/2.jpg" alt="" />
              <div class="overlay-box">
                <a href="images/gallery/2.jpg" data-fancybox="case" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
                <div class="content">
                  <h4><a href="projects-detail.html">Social Media App</a></h4>
                  <div class="category">Ideas / Technology</div>
                </div>
                <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Case Block -->
        <div class="case-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <img src="<?php bloginfo('template_url'); ?>/images/gallery/3.jpg" alt="" />
              <div class="overlay-box">
                <a href="images/gallery/3.jpg" data-fancybox="case" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
                <div class="content">
                  <h4><a href="projects-detail.html">Social Media App</a></h4>
                  <div class="category">Ideas / Technology</div>
                </div>
                <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Case Block -->
        <div class="case-block col-lg-6 col-md-12 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <img src="<?php bloginfo('template_url'); ?>/images/gallery/4.jpg" alt="" />
              <div class="overlay-box">
                <a href="images/gallery/4.jpg" data-fancybox="case" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
                <div class="content">
                  <h4><a href="projects-detail.html">Social Media App</a></h4>
                  <div class="category">Ideas / Technology</div>
                </div>
                <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Case Block -->
        <div class="case-block col-lg-6 col-md-12 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <img src="<?php bloginfo('template_url'); ?>/images/gallery/5.jpg" alt="" />
              <div class="overlay-box">
                <a href="images/gallery/5.jpg" data-fancybox="case" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
                <div class="content">
                  <h4><a href="projects-detail.html">Social Media App</a></h4>
                  <div class="category">Ideas / Technology</div>
                </div>
                <a href="projects-detail.html" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      
      <div class="section-text">We Have Done More Than 1K Projects in Last 3 Years, With 100% Satisfaction.</div>
      
      <div class="btn-box text-center">
        <a href="#" class="theme-btn btn-style-three"><span class="txt">View All</span></a>
      </div>
      
    </div>
  </section>
  <!-- End Cases Section -->
  
  <!--Sponsors Section-->
 
  <section class="sponsors-section">
    <div class="auto-container">
      
      <div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li><div class="image-box"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/4.png" alt=""></a></div></li>
          <li><div class="image-box"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/4.png" alt=""></a></div></li>
                </ul>
            </div>
      
    </div>
  </section>
  <!--End Sponsors Section-->
  
  <!-- Testimonial Section -->
  <section class="testimonial-section">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title">
        <div class="clearfix">
          <div class="pull-left">
            <div class="title">LATEST CASE STUDIES</div>
            <h2>Reads Now Our Recent <br> Projects Studies</h2>
          </div>
          <div class="pull-right">
            <div class="text">Our goal is to help our companies maintain or achieve best- in-class <br> positions in their respective industries and our team works.</div>
          </div>
        </div>
      </div>
      <div class="testimonial-carousel owl-carousel owl-theme">
        
        <!-- Testimonial Block -->
        <div class="testimonial-block">
          <div class="inner-box" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-4.png)">
            <div class="upper-box">
              <div class="icon">
                <img src="<?php bloginfo('template_url'); ?>/images/resource/testimonial-icon-1.png" alt="" />
              </div>
              <h4>Steelart</h4>
              <div class="designation">Client of Company</div>
            </div>
            <div class="text">"Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best part...always solving problems with great original ideas!."</div>
          </div>
        </div>
        
        <!-- Testimonial Block -->
        <div class="testimonial-block">
          <div class="inner-box" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-4.png)">
            <div class="upper-box">
              <div class="icon">
                <img src="<?php bloginfo('template_url'); ?>/images/resource/testimonial-icon-2.png" alt="" />
              </div>
              <h4>Figma Skills</h4>
              <div class="designation">Client of Company</div>
            </div>
            <div class="text">"Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best part...always solving problems with great original ideas!."</div>
          </div>
        </div>
        
        <!-- Testimonial Block -->
        <div class="testimonial-block">
          <div class="inner-box" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-4.png)">
            <div class="upper-box">
              <div class="icon">
                <img src="<?php bloginfo('template_url'); ?>/images/resource/testimonial-icon-1.png" alt="" />
              </div>
              <h4>Steelart</h4>
              <div class="designation">Client of Company</div>
            </div>
            <div class="text">"Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best part...always solving problems with great original ideas!."</div>
          </div>
        </div>
        
        <!-- Testimonial Block -->
        <div class="testimonial-block">
          <div class="inner-box" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-4.png)">
            <div class="upper-box">
              <div class="icon">
                <img src="<?php bloginfo('template_url'); ?>/images/resource/testimonial-icon-2.png" alt="" />
              </div>
              <h4>Figma Skills</h4>
              <div class="designation">Client of Company</div>
            </div>
            <div class="text">"Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best part...always solving problems with great original ideas!."</div>
          </div>
        </div>
        
        <!-- Testimonial Block -->
        <div class="testimonial-block">
          <div class="inner-box" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-4.png)">
            <div class="upper-box">
              <div class="icon">
                <img src="<?php bloginfo('template_url'); ?>/images/resource/testimonial-icon-1.png" alt="" />
              </div>
              <h4>Steelart</h4>
              <div class="designation">Client of Company</div>
            </div>
            <div class="text">"Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best part...always solving problems with great original ideas!."</div>
          </div>
        </div>
        
        <!-- Testimonial Block -->
        <div class="testimonial-block">
          <div class="inner-box" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-4.png)">
            <div class="upper-box">
              <div class="icon">
                <img src="<?php bloginfo('template_url'); ?>/images/resource/testimonial-icon-2.png" alt="" />
              </div>
              <h4>Figma Skills</h4>
              <div class="designation">Client of Company</div>
            </div>
            <div class="text">"Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best part...always solving problems with great original ideas!."</div>
          </div>
        </div>
        
      </div>
      
      <div class="lower-text">More than 5k customers share their thoughts to us. . . <a href="testimonial.html">Read All Reviews</a></div>
      
    </div>
  </section>
  <!-- End Testimonial Section -->
  
  <!-- Technology Section -->
  <section class="technology-section" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/1.jpg)">
    <div class="pattern-layer-one" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-5.png)"></div>
    <div class="pattern-layer-two" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-6.png)"></div>
    <div class="auto-container">
      <div class="row clearfix">
        <!-- Title Column -->
        <div class="title-column col-lg-5 col-md-12 col-sm-12">
          <div class="inner-column">
            <!-- Sec Title -->
            <div class="sec-title light">
              <div class="title">TECHNOLOGY INDEX</div>
              <h2>We Deliver Solutions with the Goal of Trusting Workships</h2>
            </div>
          </div>
        </div>
        <!-- Blocks Column -->
        <div class="blocks-column col-lg-7 col-md-12 col-sm-12">
          <div class="inner-column">
            <div class="row clearfix">
              
              <!-- Technology Block -->
              <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <a href="services-detail.html" class="overlay-link"></a>
                  <div class="icon-box">
                    <span class="flaticon-coding-2"></span>
                  </div>
                  <h6>WEB</h6>
                </div>
              </div>
              
              <!-- Technology Block -->
              <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <a href="services-detail.html" class="overlay-link"></a>
                  <div class="icon-box">
                    <span class="flaticon-android"></span>
                  </div>
                  <h6>ANDROID</h6>
                </div>
              </div>
              
              <!-- Technology Block -->
              <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <a href="services-detail.html" class="overlay-link"></a>
                  <div class="icon-box">
                    <span class="flaticon-apple"></span>
                  </div>
                  <h6>IOS</h6>
                </div>
              </div>
              
              <!-- Technology Block -->
              <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <a href="services-detail.html" class="overlay-link"></a>
                  <div class="icon-box">
                    <span class="flaticon-iot"></span>
                  </div>
                  <h6>IOT</h6>
                </div>
              </div>
              
              <!-- Technology Block -->
              <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <a href="services-detail.html" class="overlay-link"></a>
                  <div class="icon-box">
                    <span class="flaticon-smartband"></span>
                  </div>
                  <h6>WEARALABLES</h6>
                </div>
              </div>
              
              <!-- Technology Block -->
              <div class="technology-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <a href="services-detail.html" class="overlay-link"></a>
                  <div class="icon-box">
                    <span class="flaticon-tv"></span>
                  </div>
                  <h6>TV</h6>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Technology Section -->
  
  <!-- Team Section -->
  <section class="team-section" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/2.jpg)">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title">
        <div class="clearfix">
          <div class="pull-left">
            <div class="title">OUR DEDICATED TEAM</div>
            <h2>We have Large No <br> of Expert Team Member</h2>
          </div>
          <div class="pull-right">
            <div class="text">Our goal is to help our companies maintain or achieve best- in-class <br> positions in their respective industries and our team works.</div>
          </div>
        </div>
      </div>
      <div class="clearfix">



        <?php 
                $the_query = new WP_Query( array(
                    'post_type' => 'team',
                    'posts_per_page' => 4,
                    'orderby' => 'menu_order', 
                    'order' => 'DESC',
                ) );
                $count='';
              


                while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                    $count++;
                

                ?>







        
        <!-- Team Block -->
        <div class="team-block col-lg-3 col-md-6 col-sm-12">
          <div class="inner-box">
            <div class="image">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); ?></a>
            </div>
            <div class="lower-box">
              <!-- Social Box -->
              <ul class="social-box">
                <li><a href="www.facebook.com" class="fa fa-facebook-f"></a></li>
                <li><a href="www.twitter.com" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-dribbble"></a></li>
              </ul>
              <div class="content">
                <h5><a href="<?php the_permalink(); ?>"><?php echo get_post_meta( $post->ID, 'person_name', true ); ?></a></h5>
                <div class="<?php the_permalink(); ?>"><?php echo get_post_meta( $post->ID, 'designat_code', true ); ?></div>
              </div>
            </div>
          </div>
        </div>
        
                <?php
            endwhile;
            
            wp_reset_postdata();
        

        ?>
        <!-- Team Block -->
     
        
        <!-- Team Block -->
       
        
        <!-- Team Block -->
       
        
      </div>
    </div>
  </section>
  <!-- End Team Section -->
  
  <!-- News Section -->
  <section class="news-section">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title centered">
        <div class="title"> <a href="http://localhost/oblex/blog/">Our Blog </a></div>
        <h2>Click Out Our <br> Latest News & Artical</h2>
      </div>
      <div class="row clearfix">
        
        <?php 
                $the_query = new WP_Query( array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                   
                    'order' => 'DESC',
                ) );

                while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                ?>
        <!-- News Block -->
      <div class="news-block col-lg-4 col-md-6 col-sm-12">
        <div class="inner-box">
          <div class="image">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); ?> </a>
          </div>
          <div class="lower-content">
            <div class="post-date"><?php echo get_the_date("M j"); ?></span></div>
            <ul class="post-meta">
              <li><span class="icon flaticon-comment"></span><?php comments_number("0"); ?></li>
              <li><span class="icon flaticon-user"></span><?php the_author(); ?></li>
            </ul>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title( sprintf( '<h4 class="mb-0"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?></a></h4>
            <?php the_excerpt(); ?>
            
            <a class="read-more" href="<?php the_permalink(); ?>">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
          </div>
        </div>
      </div>
      

        <?php
            endwhile;
            wp_reset_postdata();
        

        ?>
        <!-- News Block -->
      
        <!-- News Block -->
      
        
      </div>
    </div>
  </section>
  <!-- End News Section -->
  
  <!-- Main Footer -->
   <?php



   get_footer();
   ?>