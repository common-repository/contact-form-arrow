<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


add_shortcode( 'cfa_contact_form', 'cfa_contact_shortcode');

function cfa_contact_shortcode( $atts, $content = null ) {
	
extract( shortcode_atts( array( 'id' => null ) , $atts ) );
$cfa_name = get_post_meta($id, '_cfa_name', true);
$cfa_email = get_post_meta($id, '_cfa_email', true);
$cfa_subject = get_post_meta($id, '_cfa_subject', true);
$cfa_phone = get_post_meta($id, '_cfa_phone', true);
$cfa_message = get_post_meta($id, '_cfa_message', true);
$cfa_container_bg0 = get_post_meta($id, '_cfa_container_bg0', true);
$cfa_container_bg1 = get_post_meta($id, '_cfa_container_bg1', true);
$cfa_form_div_style = get_post_meta($id, '_cfa_form_div_style', true);
$cfa_input_field_style = get_post_meta($id, '_cfa_input_field_style', true);
$cfa_heading_style = get_post_meta($id, '_cfa_heading_style', true);
$cfa_submit_style = get_post_meta($id, '_cfa_submit_style', true);
$cfa_message_style = get_post_meta($id, '_cfa_message_style', true);
$cfa_border_radius_style = get_post_meta($id, '_cfa_border_radius_style', true);
$cfa_send_mail = get_post_meta($id, '_cfa_send_mail', true);
$cfa_value = get_post_meta($id, '_cfa_value', true);

ob_start();

/*==================== Styling for Default Form Start ====================*/
if($cfa_value == 'cfa_default'){
?>

<style>
	
</style>
<!-- ===================== Styling for default form ends here ================== -->
<?php 
}

/* ============= Custom Form Style Start ==================*/
if($cfa_value == 'cfa_custom'){
	?>
<style type="text/css">

	#cfa_name_style_<?php echo $id;?>{
	color: <?php echo $cfa_container_bg0 ?>
}

#cfa_whole_form_<?php echo $id;?>{
	background-color: <?php echo $cfa_container_bg1 ?>;
	border: solid <?php echo $cfa_form_div_style ?>;
	border-radius: <?php echo $cfa_border_radius_style ?>px;

}
#cfa_name_<?php echo $id;?>{
	background-color: <?php echo $cfa_input_field_style ?>;
	color: <?php echo $cfa_heading_style ?>;
}

#cfa_messaage_<?php echo $id;?>{
	background-color: <?php echo $cfa_input_field_style ?>;
	color: <?php echo $cfa_heading_style ?>;
}
#cfa_submit{
	background-color: <?php echo $cfa_submit_style ?>;
	color: <?php echo $cfa_message_style ?>;
}



</style>

<!-- =============== Custom For Style Ends Here ================ -->
	<?php
}

/* ================ Box Form Style Starts here ====================*/
if($cfa_value == 'cfa_box'){
	?>
<style type="text/css">
	#cfa_whole_form_<?php echo $id;?>{
		background-color: #ededed !important;

	}
	#cfa_left_box_<?php echo $id; ?>{
		float: left !important;
		width: 50% !important;

		
	}
		#cfa_right_box_<?php echo $id; ?>{
		float: right !important;
		width: 49% !important;
	}
	    #cfa_name_<?php echo $id;?>{
  background: linear-gradient(#000, #000), linear-gradient(#000, #000), linear-gradient(#000, #000);
  background-size: 1px 40%, 100% 1px, 1px 40%;
  background-position: bottom left, bottom center, bottom right;
  background-repeat: no-repeat;
  border: none;
  
	    }
	    #cfa_messaage_<?php echo $id;?>{
	    	background-color: #ededed !important;
	    	border-color: black !important;
	    }

	    #cfa_submit{
	    	
	    	padding-top: 13px !important;
	    	padding-bottom: 13px !important;
	    	
	    }
</style>
<!-- ============== Box Form Style Ends Here ========================= -->
	<?php
}

if($cfa_value == 'cfa_grid'){
?>
<!-- =================Grid layout starts here ======================= -->

<style type="text/css">
	
	#cfa_grid_left_<?php echo $id; ?>{
		float: left !important;
		width: 50% !important;
	}

	#cfa_grid_right_<?php echo $id; ?>{
		float: right !important;
		width: 49% !important;
	}
	#cfa_submit{
		width: 100%;
		background-color: #dd8500 !important;
		margin-top: 4px !important;
	}
	#cfa_whole_form_<?php echo $id;?>{
		border: solid black !important;
		height: 260px !important;

	}


</style>

<!-- =================Grid layout ends here ======================= -->
<?php

}

if($cfa_value == 'cfa_clasical'){
?>
<!-- =================Clasical layout starts here ======================= -->

<style type="text/css">

#cfa_name_<?php echo $id;?>{
	background-color: #68dbff !important;
	border-radius: 12px !important; 
	box-shadow: 10px 10px 5px #888888 !important;
	  box-shadow:inset 10px 5px 5px #a0e5e8 !important;

}

#cfa_messaage_<?php echo $id;?>{
	background-color: #68dbff !important;
	border-radius: 12px !important; 
		box-shadow: 10px 10px 5px #888888 !important;
	  box-shadow:inset 10px 5px 5px #a0e5e8 !important;
}

#cfa_submit{
	background-color: #40b4bc !important;
	border-radius: 10px !important;
	padding-top: 17px !important;
	padding-bottom: 17px !important;

}

#cfa_whole_form_<?php echo $id;?>{
	background-color: #1193f7 !important;
	border-radius: 12px !important; 
	padding: 10px !important;

}

</style>

<!-- =================Clasical layout ends here ======================= -->
<?php

}
?>




<form id="cfa_form_<?php echo $id;?>" action="<?php $_SERVER['PHP_SELF'];?>">
 <div id="cfa_whole_form_<?php echo $id;?>" style=" padding-left: 10px; padding-top: 8px; <?php echo $cfa_border_radius_style ?>; padding-right: 10px;">



<div id="cfa_grid_left_<?php echo $id; ?>">

<div id="cfa_left_box_<?php echo $id;?>">
<?php if($cfa_name == '1'){ ?>

<div id="cfa_name_style_<?php echo $id;?>">Name:</div> <input id="cfa_name_<?php echo $id;?>" type="text"  name = "name" placeholder="Your Name"/>

<?php } ?>


<?php if($cfa_email == '1'){ ?>

<div id="cfa_name_style_<?php echo $id;?>"> Email:</div> <input id="cfa_name_<?php echo $id;?>" type="text" name = "email" placeholder="Your Email"/>

<?php } ?>
</div>


<div id="cfa_right_box_<?php echo $id;?>">

<?php if($cfa_subject == '1'){ ?>

<div id="cfa_name_style_<?php echo $id;?>" >Subject:</div> <input type="text" name = "subject" id="cfa_name_<?php echo $id;?>" placeholder="Your subject"/>

<?php } ?>



<?php if($cfa_phone == '1'){ 
if($cfa_value != 'cfa_grid'){
?>
<div id="cfa_name_style_<?php echo $id;?>" >Phone:</div> <input type="text" name = "subject" id="cfa_name_<?php echo $id;?>" placeholder="Your Phone Number"/>

<?php } } ?>
</div>
</div>


<div id="cfa_grid_right_<?php echo $id; ?>">


<?php if($cfa_message == '1'){ ?>
<div id="cfa_name_style_<?php echo $id;?>" >Your Message:</div> <textarea rows="4" cols="50" id="cfa_messaage_<?php echo $id;?>" name="message" placeholder="Your message here..."></textarea>

<?php } ?>


<input type="hidden" name="hidden" id="cfa_send_mail" value="<?php echo $cfa_send_mail ?>">


<br>

<input type="button" id="cfa_submit" class="cfa_submit" name="submit" style="<?php echo $cfa_submit_style ?>" value="submit">
</div>
<br><br>
	</div>
	</form>
<?php 
return ob_get_clean();
}
?>