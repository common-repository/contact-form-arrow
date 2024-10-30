
jQuery(document).ready(function($) {
alert("hello");

jQuery("#cfa_submit").click(function(){
var cfa_name = jQuery("#cfa_name").val();
var cfa_email = jQuery("#cfa_email").val();
var cfa_subject = jQuery("#cfa_subject").val();
var cfa_phone = jQuery("#cfa_phone").val();
var cfa_message = jQuery("#cfa_message").val();
var send_mail = jQuery("#send_mail").val();


       jQuery.ajax({
      type: 'POST',
      url: MyAjax.ajaxurl,
      data: {"action": "cfa_send_email", "dname":cfa_name,"demail":cfa_email, "dsubject":cfa_subject, "dphone":cfa_phone, "dmessage":cfa_message, "dmail":send_mail},
      success: function(data){
       alert('email successfull!');
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
      } 
    });

});
return false;   
});