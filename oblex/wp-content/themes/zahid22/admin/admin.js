/*******************************************************************/
jQuery.fn.tabs = function() {
	var selector = this;
	
	this.each(function() {
		var obj = jQuery(this); 
		
		jQuery(obj.attr('href')).hide();
		
		jQuery(obj).click(function() {
			jQuery(selector).removeClass('selected');
			
			jQuery(selector).each(function(i, element) {
				jQuery(jQuery(element).attr('href')).hide();
			});
			
			jQuery(this).addClass('selected');
			
			jQuery(jQuery(this).attr('href')).show();
			
			return false;
		});
	});

	jQuery(this).show();
	
	jQuery(this).first().click();
};
/********************************************************/
/***************Some Utility functions******************/



/*****************End of Utility functions*****************/

/****Start Theme option from here***/

jQuery.noConflict();
jQuery(document).ready(function($){
	jQuery('#htabs a').tabs(); 
    jQuery('#vtabs a').tabs();
	
	jQuery('.remove-row').on('click',function(){
											  
	   jQuery(this).closest('tr').remove();										  
    });
	
	jQuery('.add-row').on('click',function(){
	   var rel=jQuery(this).attr('rel');
	   var tpl =eval(rel);
	   if(typeof tpl=='undefined' || tpl==''){
		  alert('There is no template defined for adding new row');   
	   }else{
		  jQuery(this).closest('table').find('tbody').append(tpl);		    
	   }
    });
	
	
	jQuery('.file-remove').on('click',function(){
	    jQuery(this).closest('div.file-wrapper').find('input.file').val('');	
		jQuery(this).closest('div.file-wrapper').find('img.preview').attr('src',template_url+'/admin/no_image.jpg');
    });
	
	jQuery('.file-browser').on('click',function(){
	      var fwb_send_to_editor = window.send_to_editor;
          tb_show('', 'media-upload.php?type=image&TB_iframe=true');
		  var $this=jQuery(this);
          window.send_to_editor = function(html) {
			fileurl = jQuery(html).get(0);
		    $this.closest('div.file-wrapper').find('input.file').val(fileurl);	
		    $this.closest('div.file-wrapper').find('img.preview').attr('src',fileurl);
			tb_remove();
			window.send_to_editor = fwb_send_to_editor;
		  }
        return false;
    });
	
	
});

/** Row template***/
var placholder ='<tr>'; 
    placholder += '    <td><select name="setting[placeholder][]">';
    placholder += '      <option value="1">Placeholder 1</option>';
	placholder += '      <option value="2">Placeholder 2</option>';
	placholder += '      <option value="3">Placeholder 3</option>';
	placholder += '      <option value="4">Placeholder 4</option>';
	placholder += '      <option value="5">Placeholder 5</option>';
    placholder += '      <option value="6">Placeholder 6</option>';
	placholder += '      <option value="7">Placeholder 7</option>';
	placholder += '      <option value="8">Placeholder 8</option>';
    placholder += '      <option value="9">Placeholder 9</option>';
	placholder += '      <option value="10">Placeholder 10</option>';
    placholder += '    </select></td>';		
    placholder += '    <td class="right"><input size="60" type="text" name="setting[option_text][]" value="" /></td>';
	placholder += '    <td class="left"><a class="button remove-row">Remove</a></td>';
	placholder += '  </tr>';


var slider ='<tr>'; 
    slider += '    <td class="left"><div class="file-wrapper"><img src="'+template_url+'/admin/no_image.jpg'+'" class="preview" /><input type="hidden" name="setting[slider_img][]" value="" class="file" /><br /><a class="file-browser">Browse</a>&nbsp;&nbsp;<a class="file-remove">Remove</a></div></td>';
    slider += '    <td class="right"><textarea cols="45" rows="4" name="setting[slider_desc][]"></textarea></td>';
	slider += '    <td class="right"><input size="25" type="text" name="setting[slider_button][]" value="" /></td>';
	slider += '    <td class="right"><input size="35" type="text" name="setting[slider_url][]" value="" /></td>';
	slider += '    <td class="left"><a class="button remove-row">Remove</a></td>';
	slider += '  </tr>';

var partner ='<tr>'; 
    partner += '    <td class="left"><div class="file-wrapper"><img src="'+template_url+'/admin/no_image.jpg'+'" class="preview" /><input type="hidden" name="setting[partner_logo][]" value="" class="file" /><br /><a class="file-browser">Browse</a>&nbsp;&nbsp;<a class="file-remove">Remove</a></div></td>';
    partner += '    <td class="left"><a class="button remove-row">Remove</a></td>';
	partner += '  </tr>';
	

var offer ='<tr>'; 
    offer += '    <td class="left"><div class="file-wrapper"><img src="'+template_url+'/admin/no_image.jpg'+'" class="preview" /><input type="hidden" name="setting[offer_img][]" value="" class="file" /><br /><a class="file-browser">Browse</a>&nbsp;&nbsp;<a class="file-remove">Remove</a></div></td>';
    offer += '    <td class="right"><input size="27" type="text" name="setting[offer_title][]" value="" /></td>';
	offer += '    <td class="right"><textarea cols="30" rows="4" name="setting[offer_desc][]"></textarea></td>';
	offer += '    <td class="right"><input size="27" type="text" name="setting[offer_url][]" value="" /></td>';
	offer += '    <td class="left"><a class="button remove-row">Remove</a></td>';
	offer += '  </tr>';


var skill ='<tr>'; 
    skill += '    <td class="right"><input size="60" type="text" name="setting[skill_title][]" value="" /></td>';
	skill += '    <td class="right"><input size="60" type="text" name="setting[skill_expertise][]" value="" /></td>';
	skill += '    <td class="left"><a class="button remove-row">Remove</a></td>';
	skill += '  </tr>';
	
/*End of row template*/