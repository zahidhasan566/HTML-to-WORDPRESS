<?php if ( $_REQUEST['update_settings'] ) echo '<div id="message" class="updated fade"><p><strong>Settings saved.</strong></p></div>'; ?>
<div class="box">
   <div class="heading">
      <h1>ZAHID Theme Options</h1>
      <div class="buttons"> <a class="button" onclick="jQuery('#form').submit();">Save Setting</a></div>
    </div>
   <div class="content">
       <div id="htabs" class="htabs">
		   <a href="#tab-general">General</a>
		   <a href="#tab-footer">Footer</a>
		   <a href="#tab-home">Home</a>
		   <a href="#tab-slider">Slider</a>
		   <a href="#tab-contact">Contact</a>
		   <a href="#tab-partner">Partner Logo</a>
		   <a href="#tab-skill">Our Skill</a>
	   </div>
	   <form method="POST" id="form" action="">
	        <div id="tab-general">
		        <table class="form">
				   <tr>
					<td>Linked-In URL</td>
					<td><input type="text" name="setting[linked_in_url]" size="60" value="<?php echo $zahid_theme_option['linked_in_url'];?>" /></td>
				  </tr>
			    </table>
		    </div>
			<div id="tab-footer">
		        <table class="form">
				  <tr>
					<td>Footer Menu</td>
					<td><select name="setting[footer_menu]" id="footer_menu">
						  <option value="">-Select-</option>
						  <?php
						    foreach($menus as $menu){
							  $sel=($zahid_theme_option['footer_menu']==$menu->term_id)?'selected':'';
							  echo '<option '.$sel.' value="'.$menu->term_id.'">'.$menu->name.'</option>';
							}
						  ?>
						</select>
					</td>
				  </tr>
				  <tr>
					<td>Copyright Text</td>
					<td><textarea cols="60" rows="4" name="setting[copyright]"><?php echo $zahid_theme_option['copyright'];?></textarea></td>
				  </tr>
				  <tr>
					<td>Phone Number</td>
					<td><input type="text" name="setting[phone_number]" size="60" value="<?php echo $zahid_theme_option['phone_number'];?>" /></td>
				  </tr>
				  <tr>
					<td>Email Address</td>
					<td><input type="text" name="setting[email_address]" size="60" value="<?php echo $zahid_theme_option['email_address'];?>" /></td>
				  </tr>
				  <tr>
					<td>Contact Address</td>
					<td><textarea cols="60" rows="4" name="setting[contact_address]"><?php echo $zahid_theme_option['contact_address'];?></textarea></td>
				  </tr>
			    </table>
		    </div>
			<div id="tab-home">
		        <div id="vtabs" class="vtabs">
				      <a href="#tab-home-box">Content Box</a>
					  <a href="#tab-home-sentence">Making Sentence</a> 
					  <a href="#tab-home-why">Why Us Tabs</a> 
					  <a href="#tab-home-offer">What We Offer</a> 
					  
				</div>
				<div id="tab-home-box" class="vtabs-content">
				     <?php
					 
					  $box_titles=$zahid_theme_option['box_title'];
					  $box_descs=$zahid_theme_option['box_desc'];
					  $box_imgs=$zahid_theme_option['box_img'];
					  $box_urls=$zahid_theme_option['box_url'];

				      for($i=0;$i<=2;$i++)
				        {
                           $box_title=$box_titles[$i];
						   $box_desc=$box_descs[$i];
						   $box_img=$box_imgs[$i];
						   $box_url=$box_urls[$i];
				       ?>
					   
			             <table class="list">
						 <thead><td colspan="2"><?php _e('Content Box '.($i+1)); ?></td></thead>
						   <tbody> 
							   <tr>
								<td>Title</td>
								<td><input size="40" type="text" name="setting[box_title][]" value="<?php echo $box_title;?>" /></td>
							  </tr>
							  <tr>
								<td>Box Description </td>
								<td><textarea cols="60" rows="6" name="setting[box_desc][]"><?php echo $box_desc;?></textarea></td>
							  </tr>
							  <tr>
								<td align="left" valign="top">Image</td>
								<td  align="left" valign="top">
								 <div class="file-wrapper"><img src="<?php if($box_img) echo $box_img; else echo get_bloginfo('template_url').'/admin/no_image.jpg';?>" class="preview" /><input type="hidden" name="setting[box_img][]" value="<?php echo $box_img?>" class="file" /><br /><a class="file-browser">Browse</a>&nbsp;&nbsp;<a class="file-remove">Remove</a></div>
								</td>
							  </tr>
							  <tr>
								<td>Read More URL</td>
								<td><input size="40" type="text" name="setting[box_url][]" value="<?php echo $box_url;?>" /></td>
							  </tr>
		                    </tbody>
							</table>
					<?php } ?>
				</div>
				<div id="tab-home-sentence" class="vtabs-content">
				    <table class="form">
					  <tr>
						<td>Sentence<br /><span>(Use keyword __PLACEHOLDER__ for giveing user options. Up to 10 placeholders)</span></td>
						<td><textarea name="setting[sentence]" rows="10" cols="100" ><?php echo $zahid_theme_option['sentence'];?></textarea></td>
					  </tr>
					</table>
					<table class="list">
					   <thead><td><?php _e('Placholder '); ?></td><td><?php _e('Option Text '); ?></td><td></td></thead>
					    <tbody>
						<?php
						   $placeholders=$zahid_theme_option['placeholder'];
						   $option_texts=$zahid_theme_option['option_text'];
						  
						   if(!is_array($placeholders))$placeholders=array();
						   if(!is_array($option_texts))$option_texts=array();
						   foreach($placeholders as $index=>$placeholder){
						    $option_text=$option_texts[$index];
						?>
					    <tr>
						   <td><select name="setting[placeholder][]">
								<option <?php if($placeholder=='1') echo 'selected';?> value="1">Placeholder 1</option>';
								<option <?php if($placeholder=='2') echo 'selected';?>  value="2">Placeholder 2</option>';
								<option <?php if($placeholder=='3') echo 'selected';?>   value="3">Placeholder 3</option>';
								<option <?php if($placeholder=='4') echo 'selected';?>  value="4">Placeholder 4</option>';
								<option <?php if($placeholder=='5') echo 'selected';?>  value="5">Placeholder 5</option>';
								<option <?php if($placeholder=='6') echo 'selected';?>  value="6">Placeholder 6</option>';
								<option <?php if($placeholder=='7') echo 'selected';?>   value="7">Placeholder 7</option>';
								<option <?php if($placeholder=='8') echo 'selected';?>  value="8">Placeholder 8</option>';
								<option <?php if($placeholder=='9') echo 'selected';?>  value="9">Placeholder 9</option>';
								<option <?php if($placeholder=='10') echo 'selected';?>  value="10">Placeholder 10</option>';
								 </select>
							</td>
						   <td><input size="60" type="text" name="setting[option_text][]" value="<?php echo $option_text;?>" /></td>
						  <td><a class="button remove-row">Remove</a></td>
						 </tr>
						<?php } ?> 
						</tbody> 
						<tfoot>
						 <tr>
						   <td colspan="2">&nbsp;</td>
						  <td>&nbsp;<a class="button add-row" rel="placholder">Add New</a></td>
						 </tr>
					    </tfoot>
					</table> 
				</div>
				<div id="tab-home-why" class="vtabs-content">
				     <?php

				      $tab_names=$zahid_theme_option['tab_name'];
					  $tab_titles=$zahid_theme_option['tab_title'];
					  $tab_descs=$zahid_theme_option['tab_desc'];
					  $tab_imgs=$zahid_theme_option['tab_img'];
					  $tab_urls=$zahid_theme_option['tab_url'];
					  $tab_labels=$zahid_theme_option['tab_label'];

				      for($i=0;$i<=2;$i++)
				        {
						   $tab_name=$tab_names[$i];
                           $tab_title=$tab_titles[$i];
						   $tab_desc=$tab_descs[$i];
						   $tab_img=$tab_imgs[$i];
						   $tab_url=$tab_urls[$i];
						   $tab_label=$tab_labels[$i];

				 ?>
			         <table class="list">
					 <thead><td colspan="2"><?php _e('Tab '.($i+1)); ?></td></thead>
					 <tbody>
						<tr>
						<td>Tab Name</td>
						<td><input size="40" type="text" name="setting[tab_name][]" value="<?php echo $tab_name;?>" /></td>
					  </tr>
					   <tr>
						<td>Tab Title</td>
						<td><input size="40" type="text" name="setting[tab_title][]" value="<?php echo $tab_title;?>" /></td>
					  </tr>
					  <tr>
						<td>Tab Description</td>
						<td><textarea cols="60" rows="6" name="setting[tab_desc][]"><?php echo $tab_desc;?></textarea></td>
					  </tr>
					  <tr>
						<td align="left" valign="top">Tab Image</td>
						<td  align="left" valign="top">
						<div class="file-wrapper"><img src="<?php if($tab_img) echo $tab_img; else echo get_bloginfo('template_url').'/admin/no_image.jpg';?>" class="preview" /><input type="hidden" name="setting[tab_img][]" value="<?php echo $tab_img?>" class="file" /><br /><a class="file-browser">Browse</a>&nbsp;&nbsp;<a class="file-remove">Remove</a></div>
						</td>
					  </tr>
					   <tr>
						<td>Read More Button Label</td>

						<td><input size="40" type="text" name="setting[tab_label][]" value="<?php echo $tab_label;?>" /></td>

					  </tr>
					  <tr>
						<td>Read More Url</td>

						<td><input size="40" type="text" name="setting[tab_url][]" value="<?php echo $tab_url;?>" /></td>

					  </tr>
					</tbody>
					</table>
			      <?php

			        }
			      ?>	
				</div>
				<div id="tab-home-offer" class="vtabs-content">
			      <table class="list">
				    <thead><td><?php _e('Offer Image '); ?></td><td><?php _e('Title'); ?></td><td><?php _e('Description'); ?></td><td><?php _e('Read More URL'); ?></td><td>&nbsp;</td></thead>
				     <tbody>
					  <?php
				         
						 $offer_imgs=$zahid_theme_option['offer_img'];
						 $offer_titles=$zahid_theme_option['offer_title']; 
						 $offer_descs=$zahid_theme_option['offer_desc'];
						 $offer_urls=$zahid_theme_option['offer_url']; 
					     if(!is_array($offer_imgs))$offer_imgs=array();
					     if(!is_array($offer_titles))$offer_titles=array();
						 if(!is_array($offer_descs))$offer_descs=array();
						 if(!is_array($offer_urls))$offer_urls=array();
					     foreach($offer_imgs as $index=>$offer_img){
						 
						   $offer_title=$offer_titles[$index];
						   $offer_desc=$offer_descs[$index];
						   $offer_url=$offer_urls[$index];  
				      ?>
					   <tr>
						<td  align="left" valign="top">
						<div class="file-wrapper"><img src="<?php if($offer_img) echo $offer_img; else echo get_bloginfo('template_url').'/admin/no_image.jpg';?>" class="preview" /><input type="hidden" name="setting[offer_img][]" value="<?php echo $offer_img?>" class="file" /><br /><a class="file-browser">Browse</a>&nbsp;&nbsp;<a class="file-remove">Remove</a></div>
						</td>
					 	 <td><input size="27" type="text" name="setting[offer_title][]" value="<?php echo $offer_title;?>" /></td>
						 <td align="left" valign="top"><textarea cols="30" rows="4" name="setting[offer_desc][]"><?php echo $offer_desc;?></textarea></td>
						 <td><input size="27" type="text" name="setting[offer_url][]" value="<?php echo $offer_url;?>" /></td>                        <td><a class="button remove-row">Remove</a></td>
					   </tr>
					  <?php
					   }
                      ?>	 
					</tbody> 
					  <tfoot>
						 <tr>
						   <td colspan="4">&nbsp;</td>
						  <td>&nbsp;<a class="button add-row" rel="offer">Add New</a></td>
						 </tr> 
					</table>
 
		        </div>
		    </div>
			<div id="tab-slider">
		         
				

			      <table class="list">
				    <thead><td><?php _e('Slider Image '); ?></td><td><?php _e('Description'); ?></td><td><?php _e('Read More Button Label'); ?></td><td><?php _e('Read More URL'); ?></td><td>&nbsp;</td></thead>
				     <tbody>
					  <?php
				         
						 $slider_imgs=$zahid_theme_option['slider_img'];
						 $slider_descs=$zahid_theme_option['slider_desc'];
						 $slider_urls=$zahid_theme_option['slider_url']; 
						 $slider_buttons=$zahid_theme_option['slider_button'];
					     if(!is_array($slider_imgs))$slider_imgs=array();
					     if(!is_array($slider_descs))$slider_descs=array();
						 if(!is_array($slider_urls))$slider_urls=array();
						 if(!is_array($slider_buttons))$slider_buttons=array();
					     foreach($slider_imgs as $index=>$slider_img){
						 
						   $slider_desc=$slider_descs[$index];
						   $slider_url=$slider_urls[$index];  
						   $slider_button=$slider_buttons[$index]; 
				      ?>
					   <tr>
						<td  align="left" valign="top">
						<div class="file-wrapper"><img src="<?php if($slider_img) echo $slider_img; else echo get_bloginfo('template_url').'/admin/no_image.jpg';?>" class="preview" /><input type="hidden" name="setting[slider_img][]" value="<?php echo $slider_img?>" class="file" /><br /><a class="file-browser">Browse</a>&nbsp;&nbsp;<a class="file-remove">Remove</a></div>
						</td>
						 <td align="left" valign="top"><textarea cols="45" rows="4" name="setting[slider_desc][]"><?php echo $slider_desc;?></textarea></td>
						  <td><input size="25" type="text" name="setting[slider_button][]" value="<?php echo $slider_button;?>" /></td>
						 <td><input size="35" type="text" name="setting[slider_url][]" value="<?php echo $slider_url;?>" /></td>                        <td><a class="button remove-row">Remove</a></td>
					   </tr>
					  <?php
					   }
                      ?>	 
					</tbody> 
					  <tfoot>
						 <tr>
						   <td colspan="4">&nbsp;</td>
						  <td>&nbsp;<a class="button add-row" rel="slider">Add New</a></td>
						 </tr> 
					</table>
 
		    </div>
			<div id="tab-contact">
		         <table class="form"> 
					<tr>  
						     <td>  
								Contact Details
							</td>  
							<td>  
								<?php $settings = array( 'media_buttons' => false,'textarea_name'=>'setting[contact_details]','editor_class'=>'setting-editor' ); 
		
								wp_editor(stripslashes($zahid_theme_option['contact_details']),'editor_contact',$settings); ?>
							</td>  
						</tr> 
					  <tr>  
							<td>  
								Map URL
							</td>  
							<td>  
								<input name="setting[map_url]" type="text" size="60" value="<?php echo stripslashes($zahid_theme_option['map_url']);?>" />
							</td>  

						</tr>
						<tr>  
		
							<td>  
								Contact Address
							</td>  
							<td>  
								<input name="setting[address]" type="text" size="60" value="<?php echo stripslashes($zahid_theme_option['address']);?>" />
							</td>  
						</tr>
						<tr>  
							<td>  
								Contact Email
		
							</td>  
							<td>  
								<input name="setting[mail]" type="text" size="60" value="<?php echo stripslashes($zahid_theme_option['mail']);?>" />
							</td>  
						</tr>
					</table> 
		    </div>
			<div id="tab-partner">
			     <table class="list">
				    <thead><td><?php _e('Partner Logo'); ?></td><td>&nbsp;</td></thead>
				     <tbody>
					  <?php
				         
						 $partner_logos=$zahid_theme_option['partner_logo']; 
					     if(!is_array($partner_logos))$partner_logos=array();
					     foreach($partner_logos as $index=>$partner_logo){
				      ?>
					   <tr>
						<td  align="left" valign="top">
						<div class="file-wrapper"><img src="<?php if($partner_logo) echo $partner_logo; else echo get_bloginfo('template_url').'/admin/no_image.jpg';?>" class="preview" /><input type="hidden" name="setting[partner_logo][]" value="<?php echo $partner_logo?>" class="file" /><br /><a class="file-browser">Browse</a>&nbsp;&nbsp;<a class="file-remove">Remove</a></div>
						</td>
                        <td><a class="button remove-row">Remove</a></td>
					   </tr>
					  <?php
					   }
                      ?>	 
					</tbody> 
					  <tfoot>
						 <tr>
						   <td>&nbsp;</td>
						  <td>&nbsp;<a class="button add-row" rel="partner">Add New</a></td>
						 </tr> 
					</table>
		    </div>
			<div id="tab-skill">
			     <table class="form">
					  <tr>
						<td>Skill Description</td>
						<td><textarea name="setting[skill]" rows="10" cols="100" ><?php echo $zahid_theme_option['skill'];?></textarea></td>
					  </tr>
					</table>
					<table class="list">
					   <thead><td><?php _e('Skill Title '); ?></td><td><?php _e('Expertise Level'); ?></td><td></td></thead>
					    <tbody>
						<?php
						   $skill_titles=$zahid_theme_option['skill_title'];
						   $skill_expertises=$zahid_theme_option['skill_expertise'];
						  
						   if(!is_array($skill_titles))$skill_titles=array();
						   if(!is_array($skill_expertises))$skill_expertises=array();
						   foreach($skill_titles as $index=>$skill_title){
						    $skill_expertise=$skill_expertises[$index];
						?>
					    <tr>
						   <td><input size="60" type="text" name="setting[skill_title][]" value="<?php echo $skill_title;?>" />
							</td>
						   <td><input size="60" type="text" name="setting[skill_expertise][]" value="<?php echo $skill_expertise;?>" /></td>
						  <td><a class="button remove-row">Remove</a></td>
						 </tr>
						<?php } ?> 
						</tbody> 
						<tfoot>
						 <tr>
						   <td colspan="2">&nbsp;</td>
						  <td>&nbsp;<a class="button add-row" rel="skill">Add New</a></td>
						 </tr>
					    </tfoot>
					</table> 
		    </div>
			<input type="hidden" name="update_settings" value="Y" />
	   </form>
	</div>   
</div>
<script type="text/javascript">var template_url='<?php echo get_bloginfo( 'template_url');?>';</script>
<script type="text/javascript" src="<?php echo get_bloginfo( 'template_url').'/admin/admin.js';?>"></script>
<link type="text/css" rel="stylesheet" href="<?php echo get_bloginfo( 'template_url').'/admin/admin.css';?>"></link>