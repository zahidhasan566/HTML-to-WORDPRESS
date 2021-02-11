<?php 

/**
*Template Name:contact us
*/
get_header();
 ?>





  










         <div class="container">
         <hr class="featurette-divider">
         <div class="row">
            <div class="contacttitle">  <h1> Contact Us </h1>
                                        <h5> Feel free to message us</h5>
            </div>
         <div class="col-md-12">
       
         <?php echo do_shortcode( '[contact-form-7 id="112" title="Contact form 1"]' ); ?>
         
         </div>
         </div>

<!-- officecontact intro -->
         <div class="contactintro">

         <div class="row">

            <div class="col-md-4">
                <h5 class="olocation"> Office location </h5>
                <p class="opera"> Nikunjo 21 </p>

            </div>

            <div class="col-md-4">
                <h5 class="oemail"> Email Us </h5>
                <p class="oemailadress"><a href="">custom@gmail.com</a> </p>
            </div>

            <div class="col-md-4">
                <h5 class="oopeninghour"> Opening Our </h5>
                <p class="oopeningday"> Mon to Friday </p>
            </div>

         </div>

         </div>

         <!-- end of contact intro -->

        <div class="map">
       <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29204.324472394797!2d90.3663341482528!3d23.79936962858659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5eb773272c4e60!2sOrka%20Digitals(%20BD%20Office%20)!5e0!3m2!1sbn!2sbd!4v1608468960619!5m2!1sbn!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       </div>
       </div>



         <hr class="featurette-divider">
         </div>



  <?php
 get_footer();