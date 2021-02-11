<?php 
/**
*Template Name:Service
*/
get_header();
 ?>
   <section class="page-title">
      <div class="pattern-layer-one" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-16.png)"></div>
        <div class="auto-container">
        <h2>Services</h2>
        <ul class="page-breadcrumb">
          <li><a href="index.html">home</a></li>
          <li>Services</li>
        </ul>
           </div>
       </section>

       <section class="services-page-section">
          <div class="auto-container">
            <div class="row clearfix">
              

              <?php 
                      $the_query = new WP_Query( array(
                          'post_type' => 'service',
                          'posts_per_page' => 5,
                          'orderby' => 'menu_order', 
                          'order' => 'DESC',
                      ) );
                      $count='';
                    


                      while ( $the_query->have_posts() ) :
                          $the_query->the_post();
                          $count++;
                      

                      ?>
     




              <!-- News Block Three -->
              <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); ?></a>
                  </div>
                  <div class="lower-content">
                    <div class="content">
                      <div class="icon-box">
                        <span class="icon flaticon-coding-1"></span>
                      </div>
                      <h4><a href="services-detail.html"><?php the_title( sprintf( '<h4 class="mb-0"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?></a></h4>
                      <div class="text"> </div>
                        <?php the_excerpt(); ?>
                      <a class="read-more" href="<?php the_permalink(); ?>">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                    </div>
                  </div>
                </div>
              </div>
         

                <?php  if($count==1):  ?>


              <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
               
                  <div class="lower-content">
                    <div class="content">
                      <div class="icon-box">
                        <span class="icon flaticon-coding-1"></span>
                      </div>
                      <h4><a href="services-detail.html"><?php the_title( sprintf( '<h4 class="mb-0"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?></a></h4>
                      <div class="text"> </div>
                        <?php the_excerpt(); ?>
                      <a class="read-more" href="<?php the_permalink(); ?>">Read More<span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                    </div>
                  </div>
                  <div class="image">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); ?></a>
                  </div>
                </div>
              </div>
            <?php endif; ?>








                <?php
                    endwhile;
                    wp_reset_postdata();
                

                ?>

                <div class="container">
                <div class="row" id="page">
                 <div class="col-md-12"> 
                       <?php the_posts_pagination( array(
                           'mid_size'  => 2,
                           'prev_text' => 'prev',
                           'next_text' => 'next',
                       ) ); ?>
                
                </div>
                </div>
              </div>
          
            
              
            </div>
          </div>
        </section>


          <section class="appointment-section style-two">
              <div class="image-layer" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/4.jpg)"></div>
              <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title light centered">
                  <div class="title">CONTACT US</div>
                  <h2>Join Us To Get IT Free <br> Consultations</h2>
                </div>
                <div class="inner-container">
                  <div class="row clearfix">
                    
                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-column wow slideInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInLeft;">
                        <div class="image">
                          <img src="<?php bloginfo('template_url'); ?>/images/resource/appointment.jpg" alt="">
                        </div>
                      </div>
                    </div>
                    
                    <!-- Form Column -->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-column">
                        <h4>You Don't Hesitate To Contact <br> With Us, Now Say Hello......</h4>

                       
                        <!-- Appointment Form -->
                         <div class="appointment-form">
                      
                            
                              <?php echo do_shortcode( '[contact-form-7 id="164" title="service"]' ); ?>

                           <!--    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="username" placeholder="Name" required="">
                                <span class="icon fa fa-user"></span>
                              </div>
                              
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Email" required="">
                                <span class="icon fa fa-envelope"></span>
                              </div>

                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="tel" name="phone" placeholder="Phone No" required="">
                                <span class="icon fa fa-phone"></span>
                              </div>

                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="department" placeholder="Department" required="">
                                <span class="icon fa fa-home"></span>
                              </div>

                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="Message"></textarea>
                              </div>

                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Send Massage</span></button>
                              </div> -->




                            
                      
                        </div> 
                        
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </section>



  <div class="container">
  <div class="row">
  <div class="col-md-12">
  <?php the_content(); ?>
  </div>
  </div>
  </div>

     <?php
     get_footer();

