jQuery(document).ready(function() {

	jQuery('.btn-primary').click(function(e){

		e.preventDefault();
			
        var error = 0;
		
        var id = jQuery(this).attr('id');		
		var name = jQuery('input[name=fio]', this.form).val();
		var email = jQuery('input[name=email]', this.form).val();
		var phone = jQuery('input[name=phone]', this.form).val();		
		var message = jQuery('#mod_form_'+id+' #message').val();
		var recipient = jQuery('input[name=recipient]', this.form).val();
        var gRecaptchaResponse = jQuery('#mod_form_'+id+' #g-recaptcha-response').val();

		
		if (name == '') {
		   jQuery('#mod_form_'+id+' input[name=fio]').addClass('border_red');
		   error = 1;
		} else {
		   jQuery('#mod_form_'+id+' input[name=fio]').removeClass('border_red');
		   error = 0;		
		}
		if (email == '') {
		   jQuery('#mod_form_'+id+' input[name=email]').addClass('border_red');
		   error = 1;
		} else {
		   jQuery('#mod_form_'+id+' input[name=email]').removeClass('border_red');
		   error = 0;		
		}
		if (message == '') {
		   jQuery('#mod_form_'+id+' input[name=message]').addClass('border_red');
		   error = 1;
		} else {
		   jQuery('#mod_form_'+id+' input[name=message]').removeClass('border_red');
		   error = 0;		
		}

		
		
		if (!error) {
			jQuery.ajax({
				type: "POST",
				url: "/modules/mod_order_gr/helper.php",
				data: "name="+name+"&email="+email+"&phone="+phone+"&message="+message+"&g-recaptcha-response="+gRecaptchaResponse+"&recipient="+recipient,
				success: function(msg){
					jQuery('.close').click();
					//jQuery('#mod_thanks_'+id).show();
					jQuery('.mod_thanks_'+id).click();
					//jQuery('#mod_form_'+id).modal('hide');
			        //jQuery('#mod_thanks_'+id).modal();
				} 
			});
			
		}
		
	})			
});