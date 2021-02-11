<?php 


$zahid_theme_option = get_option('zahid_theme_option');
 
 


 ?>


 <!-- FOOTER -->
 <footer class="container">

 	<div class="row">


 		<div class="col-md-4">

 			<div class="footerleft">

 			<h4> Oblex</h4>
 			
 			<p><?php echo stripslashes($zahid_theme_option['footerinfo']);?> </p>
 		   </div>

 		</div>

 		<div class="col-md-4">
 			<div class="footermid">
 			<h4> Contact Us </h4>
 			<p class="contact"> 
 				<span> Phone <br> <?php echo stripslashes($zahid_theme_option['phone_number']);?></span> 
 				<span> Mail <br> <a href=""> <?php echo stripslashes($zahid_theme_option['email_address']);?> </a> </span>
 			</p>

 		</div>

 		</div>



 		<div class="col-md-4">
 			<div class="footerright">
 			<h4> Our Office</h4>
 			<p class="adress"> <?php echo stripslashes($zahid_theme_option['contact_address']);?> </p>
 		   </div>
 		</div>

 	</div>	



 	<div class="row">

 		<div class="col-md-12">
 		<p class="copyright"><?php echo stripslashes($zahid_theme_option['copyright']);?></p>
 		<p class="float-end"><a href="#">Back to top</a></p>
 	   </div>

 	</div>









 </footer>
 


<?php wp_footer(); ?>
  </body>
</html>