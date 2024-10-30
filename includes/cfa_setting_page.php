<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


global $post;
$cfa_name = get_post_meta($post->ID, '_cfa_name', true);
$cfa_email = get_post_meta($post->ID, '_cfa_email', true);
$cfa_subject = get_post_meta($post->ID, '_cfa_subject', true);
$cfa_phone = get_post_meta($post->ID, '_cfa_phone', true);
$cfa_message = get_post_meta($post->ID, '_cfa_message', true);
$cfa_container_bg0 = get_post_meta($post->ID, '_cfa_container_bg0', true);
$cfa_container_bg1 = get_post_meta($post->ID, '_cfa_container_bg1', true);
$cfa_form_div_style = get_post_meta($post->ID, '_cfa_form_div_style', true);
$cfa_input_field_style = get_post_meta($post->ID, '_cfa_input_field_style', true);
$cfa_heading_style = get_post_meta($post->ID, '_cfa_heading_style', true);
$cfa_submit_style = get_post_meta($post->ID, '_cfa_submit_style', true);
$cfa_message_style = get_post_meta($post->ID, '_cfa_message_style', true);
$cfa_border_radius_style = get_post_meta($post->ID, '_cfa_border_radius_style', true);
$cfa_send_mail = get_post_meta($post->ID, '_cfa_send_mail', true);
$cfa_default = get_post_meta($post->ID, '_cfa_value', true);
?>
<html>
	<head>
		<style type="text/css">
			.cfa_body {
				background-color: white;
				padding-left: 35px;
				padding-bottom: 30px;
			}
			.cfa_submit_button {
				margin-left: 50px;
				color: white;
				background-color: black;
				border: solid;
				border-color: darkgrey;
				padding: 8px;
			}
			.cfa_checkbox1{
                width: 25px !important;
                height: 25px !important;
                border: 1px solid lightgrey !important;
                border-radius: 5px !important;
                margin-left: 10px !important;
                border: 2px solid lightgrey !important;
            }
            .cfa_checkbox1:checked:before{
                font-size: 30px !important;
            }
                .cfa_shortcode {
                background-color: white;
                padding-left: 150px;
                border: solid;
                border-width: 5px;
                border-color: lightgrey;
                padding-bottom: 7px;
                margin-bottom: 30px;
            }
		</style>
		<style type="text/css">

  main {
    background: #FFF;
    width: 98%;
    padding: 1%;
    margin-top: 1%;
    box-shadow: 0 3px 5px rgba(0,0,0,0.2);
  }
  main p {
    font-size: 13px;
  }
  main #cfa-tab1, main #cfa-tab2, main #cfa-tab3, main #cfa-tab4, main section {
    clear: both;
    padding-top: 30px;
    display: none;
  }
  #cfa-tab1-label, #cfa-tab2-label {
    font-weight: bold;
    font-size: 14px;
    display: block;
    float: left;
    padding: 10px 30px;
    border-top: 2px solid transparent;
    border-right: 1px solid transparent;
    border-left: 1px solid transparent;
    border-bottom: 1px solid #DDD;
  }
  main label:hover {
    cursor: pointer;
    text-decoration: underline;
  }
  #cfa-tab1:checked ~ #cfa-content1, #cfa-tab2:checked ~ #cfa-content2, #cfa-tab3:checked ~ #cfa-content3, #cfa-tab4:checked ~ #cfa-content4 {
    display: block;
  }
  main input:checked + #cfa-tab1-label, main input:checked + #cfa-tab2-label, main input:checked +  #cfa-tab3-label, main input:checked +  #cfa-tab4-label {
    border-top-color: #e62117;
    border-right-color: #DDD;
    border-left-color: #DDD;
    border-bottom-color: transparent;
    text-decoration: none;
  }
  #cfa_show_photos_from_id , #cfa_show_photos_from_location , #cfa_show_photos_from_hashtag{
    margin-top: 2px;
  }
  .cfa_checkbox{
    width: 25px !important;
    height: 25px !important;
    border: 1px solid lightgrey !important;
    border-radius: 5px !important;
    margin-left: 10px !important;
  }
  .cfa_checkbox:checked:before{
    font-size: 30px !important;
  }
  #cfa_theme_selection_table tr td{
    vertical-align: top;
    display: inline-block;
  }

  .Switch {
    position: relative;
    display: inline-block;
    font-size: 1.6em;
    font-weight: bold;
    color: #ccc;
    text-shadow: 0px 1px 1px rgba(255,255,255,0.8);
    height: 18px;
    padding: 6px 6px 5px 7px;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,0.2);
    border-radius: 4px;
    background: #ececec;
    box-shadow: 0px 0px 4px rgba(0,0,0,0.1), inset 0px 1px 3px 0px rgba(0,0,0,0.1);
    cursor: pointer;
    font-size: 16px;
  }
  body.IE7 .Switch { width: 78px; }
  .Switch span {
    display: inline-block;
    width: 35px;
  }
  .Switch span.On { color: #e62117; }
  .Switch .Toggle {
    position: absolute;
    top: 1px;
    width: 37px;
    height: 25px;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,0.3);
    border-radius: 4px;
    background: #fff;
    background: -moz-linear-gradient(top, #ececec 0%, #ffffff 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ececec), color-stop(100%, #ffffff));
    background: -webkit-linear-gradient(top, #ececec 0%, #ffffff 100%);
    background: -o-linear-gradient(top, #ececec 0%, #ffffff 100%);
    background: -ms-linear-gradient(top, #ececec 0%, #ffffff 100%);
    background: linear-gradient(top, #ececec 0%, #ffffff 100%);
    box-shadow: inset 0px 1px 0px 0px rgba(255,255,255,0.5);
    z-index: 999;
    -webkit-transition: all 0.15s ease-in-out;
    -moz-transition: all 0.15s ease-in-out;
    -o-transition: all 0.15s ease-in-out;
    -ms-transition: all 0.15s ease-in-out;
  }
  .Switch.On .Toggle { left: 2%; }
  .Switch.Off .Toggle { left: 54%; }
  /* Round Switch */
  .Switch.Round {
    padding: 0px 20px;
    border-radius: 40px;
  }
  body.IE7 .Switch.Round { width: 1px; }
  .Switch.Round .Toggle {
    border-radius: 40px;
    width: 14px;
    height: 14px;
  }
  .Switch.Round.Off .Toggle {
    left: 3%;
    background: #33d2da;
  }
  .Switch.Round.On .Toggle { left: 58%; }
  .info {
    font-size: 1.2em;
    margin-bottom: 4px;
  }
</style>
		
	</head>
	<body>
	<div id="shortcode_,content" class="cfa_shortcode">
  <h1>Your Shortcode for this form is [cfa_contact_form id='<?php echo $post->ID; ?>']</h1>
</div>
<main>
  <input id="cfa-tab1" type="radio" name="cfa-tabs" checked>
  <label id="cfa-tab1-label" for="cfa-tab1" style="margin-left: 27%;">Form Settings</label>
  <input id="cfa-tab2" type="radio" name="cfa-tabs">
  <label id="cfa-tab2-label" for="cfa-tab2">Form Customizations</label>
  <input id="cfa-tab3" type="radio" name="cfa-tabs">
  <label id="cfa-tab2-label" for="cfa-tab3">Form Layouts</label>

  <section id="cfa-content1">
 

		<div class="body">
			<table>
				<tr>
					<td><h3>Show name Field:</h3></td>
					<td><input type="checkbox" id="cfa_name_field" name="cfa_name" value="1" class="cfa_checkbox1" <?php checked(1, $cfa_name); ?>></td>
				</tr>
				<tr>
					<td><h3>Show email field:</h3></td>
					<td><input type="checkbox" id="cfa_email_field" name="cfa_email" value="1" class="cfa_checkbox1" <?php checked(1, $cfa_email); ?>></td>
				</tr>
				<tr>
					<td><h3>Show subject field:</h3></td>
					<td><input type="checkbox" id="cfa_subject_field" name="cfa_subject" value="1" class="cfa_checkbox1" <?php checked(1, $cfa_subject); ?>></td>
				</tr>
				<tr>
				    <td><h3>Show phone no. field:</h3></td>
					<td><input type="checkbox" id="cfa_phone_field" name="cfa_phone" value="1" class="cfa_checkbox1" <?php checked(1, $cfa_phone); ?>></td>
				</tr>
				<tr>
					<td style="float: left;"><h3>Show message field:</h3></td>
					<td><input type="checkbox" id="cfa_message_field" name="cfa_message" value="1" class="cfa_checkbox1" <?php checked(1, $cfa_message); ?>></td>
				</tr>
				<tr>
					
					<td><h3>On submit send email to:</h3></td>
                    <td><input type="text" id="cfa_send_mail" name="cfa_send_mail" style="width: 100%;" placeholder="Recievers email" value="<?php echo $cfa_send_mail ?>"></td>
					
				</tr>
			</table>

      <input style="margin: 0 auto;display: block;margin-top: 20px;margin-bottom: 20px; margin-right: 50%;" name="save" type="submit" class="button button-primary button-large" id="publish" value="Save Changes">
  </section>



  <section id="cfa-content2">
  <h3 style="    font-size: 23px;
    margin: 0;
    margin-bottom: 15px;">Form Customize Setting</h3>
    <h3>Headings text color</h3>
       <input type="text" class="color_picker" name="cfa_container_bg0" value="<?php echo $cfa_container_bg0; ?>" >
    <h3>Form background color</h3>
       <input type="text" class="color_picker" name="cfa_container_bg1" value="<?php echo $cfa_container_bg1; ?>" >
     <h3>Form border color</h3>
     <input type="text" name="cfa_form_div_style" class="color_picker" style="width: 40%;" value="<?php echo $cfa_form_div_style ?>">

      <h3>Input field background color</h3>
     <input type="text" class="color_picker" name="cfa_input_field_style" style="width: 40%;" value="<?php echo $cfa_input_field_style ?>">

      <h3>Input field text color:</h3>
     <input type="text" class="color_picker" name="cfa_heading_style" style="width: 40%;" value="<?php echo $cfa_heading_style ?>">

      <h3>Submit button background color:</h3>
     <input type="text" name="cfa_submit_style" class="color_picker" style="width: 40%;" value="<?php echo $cfa_submit_style ?>">

      <h3>Submit text color</h3>
     <input type="text" class="color_picker" name="cfa_message_style" style="width: 40%;" value="<?php echo $cfa_message_style ?>">

           <h3>Form Border radius</h3>
    <input type="number" name="cfa_border_radius_style"  style="width: 10%;" value="<?php echo $cfa_border_radius_style ?>">px

     <input style="margin: 0 auto;display: block;margin-top: 20px;margin-bottom: 20px;" name="save" type="submit" class="button button-primary button-large" id="publish" value="Save Changes">

  </section>
<section id="cfa-content3">
	<h3>Select a Layout for your form:</h3>
	<table>
		<tr>
		<td><p style="text-align: center;margin: 0;"><input type="radio" id="cfa_default_img" name="cfa_value" value="cfa_default" <?php echo ($cfa_default == 'cfa_default')? 'checked="checked"':''; ?> />
		<label><strong>Default</strong></label></p>
		
		<p style="text-align: center; margin: 5px;"><label><img id="default_image" style="height: 250px; border-radius: 10px; border-size: 0.5px; " src="<?php echo plugins_url('images/default.png',__FILE__); ?>" /></label></p></td>


		<td><p style="text-align: center;margin: 0;"><input type="radio" id="cfa_default_img" name="cfa_value" value="cfa_custom" <?php echo ($cfa_default == 'cfa_custom')? 'checked="checked"':''; ?> />
		<label><strong>Customizable contact form</strong></label></p>
		
		<p style="text-align: center; "><label><img id="default_image" style="height: 250px; border: solid; width: 300px; border-radius: 10px;  " src="<?php echo plugins_url('images/custom.PNG',__FILE__); ?>" /></label></p></td>



		<td><p style="text-align: center;margin: 0;"><input type="radio" id="cfa_default_img" name="cfa_value" value="cfa_box" <?php echo ($cfa_default == 'cfa_box')? 'checked="checked"':''; ?> />
		<label><strong>Half box style</strong></label></p>
		
		<p style="text-align: center; margin: 5px;"><label><img id="default_image" style="height: 250px; border-radius: 10px; background-size: 1px; " src="<?php echo plugins_url('images/box.jpg',__FILE__); ?>" /></label></p></td>

			</tr>
	</table>



	<table style="padding-left: 1%;">
		<tr style="padding-left: 100px;">
			<td><p style="text-align: center;margin: 0;"><input type="radio" id="cfa_default_img" name="cfa_value" value="cfa_grid" <?php echo ($cfa_default == 'cfa_grid')? 'checked="checked"':''; ?> />
		<label><strong>Grid layout style</strong></label></p>
		
		<p style="text-align: center; margin: 5px;"><label><img id="cfa_default_image" style="height: 250px; width: 500px; border-radius: 10px; background-size: 1px; " src="<?php echo plugins_url('images/grid.png',__FILE__); ?>" /></label></p></td>


		<td><p style="text-align: center;margin: 0;"><input type="radio" id="cfa_default_img" name="cfa_value" value="cfa_clasical" <?php echo ($cfa_default == 'cfa_clasical')? 'checked="checked"':''; ?> />
		<label><strong>Blue Splash style</strong></label></p>
		
		<p style="text-align: center; margin: 5px;"><label><img id="cfa_default_image" style="margin-left: 10px; height: 250px; border-radius: 10px; background-size: 1px; width: 280px; " src="<?php echo plugins_url('images/blue.PNG',__FILE__); ?>" /></label></p></td>
		</tr>
	</table>
	<input style="margin: 0 auto;display: block;margin-top: 20px;margin-bottom: 20px;" name="save" type="submit" class="button button-primary button-large" id="publish" value="Save Changes">
</section>
</main>
</body>
</html>