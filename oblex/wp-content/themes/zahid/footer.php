<?php 


$zahid_theme_option = get_option('zahid_theme_option');
 


 ?>

 <footer class="main-footer">
    <div class="pattern-layer-one" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-7.png)"></div>
    <div class="pattern-layer-two" style="background-image: url(<?php bloginfo('template_url'); ?>/images/background/pattern-8.png)"></div>
    <!--Waves end-->
      <div class="auto-container">
          <!--Widgets Section-->
            <div class="widgets-section">
              <div class="row clearfix">
                  
                    <!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
            <div class="row clearfix">
            
                          <!-- Footer Column -->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                  <div class="logo">
                    <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/logo-2.png" alt="" /></a>
                  </div>
                  <div class="text"> <?php echo stripslashes($zahid_theme_option['footerinfo']);?></div>
                  <!-- Social Box -->
                  <ul class="social-box">
                    <li><a href="<?php echo stripslashes($zahid_theme_option['facebook']);?>" class="fa fa-facebook-f"></a></li>
                    <li><a href="<?php echo stripslashes($zahid_theme_option['linked-in']);?>" class="fa fa-linkedin"></a></li>
                    <li><a href="<?php echo stripslashes($zahid_theme_option['twitter']);?>" class="fa fa-twitter"></a></li>
                    <li><a href="<?php echo stripslashes($zahid_theme_option['google-plus']);?>" class="fa fa-google"></a></li>
                  </ul>
                </div>
              </div>
              
              <!-- Footer Column -->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                  <h5>Quick Links</h5>
                  <ul class="list-link">

                      <?php
                         $link_titles=$zahid_theme_option['link_title'];
                         $link_details=$zahid_theme_option['link_detail'];
                        
                         if(!is_array($link_titles))$link_titles=array();
                         if(!is_array($link_details))$link_details=array();
                         foreach($link_titles as $index=>$link_title){
                          $link_detail=$link_details[$index];
                      ?>
                      <li><a href="'<?php echo $link_detail ?>"> <?php echo  $link_title; ?> </a></li>
                        
                      <?php } ?> 

                     

                      

                     
                  <!--   <li><a href="#"></a></li>
                    <li><a href="#">Cloud Services</a></li>
                    <li><a href="#">IT support & helpdesk</a></li>
                    <li><a href="#">Cyber security</a></li>
                    <li><a href="#">Custom Software</a></li>
                    <li><a href="#">Free Consultation</a></li>
                    <li><a href="#">Our Business Growth</a></li> -->
                  </ul>
                </div>
              </div>
              
            </div>
          </div>
          
          <!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
            <div class="row clearfix">
              
              <!-- Footer Column -->
              <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                <div class="footer-widget news-widget">
                  <h5>Recent Post</h5>
                  <!-- Footer Column -->
                  <div class="widget-content">
                    
                    <?php 
                            $the_query = new WP_Query( array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                               
                                'order' => 'DESC',
                            ) );

                            while ( $the_query->have_posts() ) :
                                $the_query->the_post();
                            ?>


                      <div class="post">
                   
                      <div class="thumb"><a href="news-detail.html"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) ); ?></a></div>
                      <h6><a href="news-detail.html"> <?php the_title( sprintf( '<h6 class="mb-0"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h6>' ); ?> </a></h6>
                      <span class="date"><?php echo get_the_date("M j"); ?></span>

                      <?php $cont= get_the_excerpt(); ?>

                      <p class="recentpost"> <?php echo substr($cont, 0,40) ?></p>
                    </div>

                    <?php
                        endwhile;
                        wp_reset_postdata();
                    

                    ?>


                    
                  </div>
                </div>
              </div>
              
              <!-- Footer Column -->
              <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                <div class="footer-widget contact-widget">
                  <h5>Contact Us</h5>
                  <ul>
                    <li>
                      <span class="icon flaticon-placeholder-2"></span>
                      <strong><?php echo stripslashes($zahid_theme_option['contact_address']);?></strong>
                     
                    </li>
                    <li>
                      <span class="icon flaticon-phone-call"></span>
                      <strong>Phone</strong>
                      <a href="tel:+786-875-864-75"><?php echo stripslashes($zahid_theme_option['phone_number']);?></a>
                    </li>
                    <li>
                      <span class="icon flaticon-email-1"></span>
                      <strong>E-Mail</strong>
                      <a href="mailto:support@globex.com"><?php echo stripslashes($zahid_theme_option['email_address']);?></a>
                    </li>
                  </ul>
                </div>
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div class="auto-container">
          <div class="row clearfix">
            <!-- Column -->
            <div class="column col-lg-6 col-md-12 col-sm-12">
              <div class="copyright"> <?php echo stripslashes($zahid_theme_option['copyright']);?> </div>
            </div>
            <!-- Column -->
            <div class="column col-lg-6 col-md-12 col-sm-12">
              <ul class="footer-nav">
                <li><a href="#"> <?php 
                foreach ($zahid_theme_option['skill_title'] as $value) {
               echo stripslashes($value).'&nbsp; &nbsp;';
                }
                //print_r($zahid_theme_option['skill_title'])
                ?> </a></li>
                <li><a href="#">Services23</a></li>
                <li><a href="#">Privacy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </footer>
  
 </div> 
 </div> 
 </div> 
 </div> 

 


<?php wp_footer(); ?>
  </body>
</html>