jQuery(document).ready(function() {
    jQuery(".wpcf7-submitContact").click(function(e) {

        jQuery('.wpcf7-form-contact').removeClass('init');
        jQuery('.wpcf7-form-contact').addClass('submitting');
        jQuery('.wpcf7-spinner').css("visibility", "visible");

        var ajaxUrl = "postRequest/saveContactUs.php";

        var name = jQuery("#your-name-contact").val();
        var email = jQuery("#your-email-contact").val();
        var subject = jQuery("#your-subject-contact").val();
        var message = jQuery("#your-message-contact").val();

        var returnVar = 0;
        if(name==''){
            var returnVar = 1;
            jQuery("#your-name-contact").after('<span class="wpcf7-not-valid-tip your-name-contact" aria-hidden="true "></span>');
        } else{
            jQuery(".your-name-contact").remove();
        }

        if(email==''){
            var returnVar = 1;
            jQuery("#your-email-contact").after('<span class="wpcf7-not-valid-tip your-email-contact" aria-hidden="true"></span>');
        } else{

            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+jQuery/;    
            if(!regex.test(email)){   
                var returnVar = 1; 
                jQuery("#your-email-contact").after('<span class="wpcf7-not-valid-tip your-email-contact" aria-hidden="true"></span>');
            } else{
                jQuery(".your-email-contact").remove();    
            }
        }

        if(subject==''){
            var returnVar = 1;
            jQuery("#your-subject-contact").after('<span class="wpcf7-not-valid-tip your-subject-contact" aria-hidden="true"></span>');   
        } else{
            jQuery(".your-subject-contact").remove();
        }

        if(message==''){
            var returnVar = 1;
            jQuery("#your-message-contact").after('<span class="wpcf7-not-valid-tip your-message-contact" aria-hidden="true"></span>'); 
        } else{
            jQuery(".your-message-contact").remove();
        }


        if(returnVar==0){

            jQuery.ajax({  
                url: ajaxUrl,  
                method:"POST",  
                data:{
                    "name" : name,
                    "email" : email,
                    "subject" : subject,
                    "message" : message,
                },  
                success:function(data) {  
                    if(data==1){

                        jQuery("#your-name-contact").val('');
                        jQuery("#your-email-contact").val('');
                        jQuery("#your-subject-contact").val('');
                        jQuery("#your-message-contact").val('');

                        jQuery('.wpcf7-spinner').css("visibility", "hidden");
                        jQuery('.wpcf7-form-contact').removeClass('submitting');
                        jQuery('.wpcf7-form-contact').removeClass('invalid');
                        jQuery('.wpcf7-form-contact').addClass('sent');
                        jQuery('.wpcf7-response-output').text('Your message was sent successfully. Thanks.');
                    } else {
                        jQuery('.wpcf7-spinner').css("visibility", "hidden");
                        jQuery('.wpcf7-form-contact').removeClass('submitting');
                        jQuery('.wpcf7-form-contact').addClass('invalid');
                        jQuery('.wpcf7-response-output').text('Validation errors occurred. Please confirm the fields and submit it again.');
                    }

                    setTimeout(function() {
                        jQuery('.wpcf7-form-contact').removeClass('submitting');
                        jQuery('.wpcf7-form-contact').removeClass('invalid');
                        jQuery('.wpcf7-form-contact').removeClass('sent');
                        jQuery('.wpcf7-response-output').text('');
                        jQuery('.wpcf7-form-contact').addClass('init');
                    }, 3000);
                }  
            });

            
        } else {
            jQuery('.wpcf7-spinner').css("visibility", "hidden");
            jQuery('.wpcf7-form-contact').removeClass('submitting');
            jQuery('.wpcf7-form-contact').addClass('invalid');
            jQuery('.wpcf7-response-output').text('Validation errors occurred. Please confirm the fields and submit it again.');
            
        }

    });

    jQuery(".wpcf7-submitHome").click(function(e) {

        jQuery('.wpcf7-form-home').removeClass('init');
        jQuery('.wpcf7-form-home').addClass('submitting');
        jQuery('.wpcf7-spinner').css("visibility", "visible");

        var ajaxUrl = "postRequest/saveContactUs.php";

        var name = jQuery("#home-your-name").val();
        var email = jQuery("#home-your-email").val();
        var telephone_number = jQuery("#home-your-telephone_number").val();
        var message = jQuery("#home-your-message").val();

        var returnVar = 0;
        if(name==''){
            var returnVar = 1;
            jQuery("#home-your-name").after('<span class="wpcf7-not-valid-tip home-your-name" aria-hidden="true "></span>');
        } else{
            jQuery(".home-your-name").remove();
        }

        if(email==''){
            var returnVar = 1;
            jQuery("#home-your-email").after('<span class="wpcf7-not-valid-tip home-your-email" aria-hidden="true"></span>');
        } else{

            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+jQuery/;    
            if(!regex.test(email)){   
                var returnVar = 1; 
                jQuery("#home-your-email").after('<span class="wpcf7-not-valid-tip home-your-email" aria-hidden="true"></span>');
            } else{
                jQuery(".home-your-email").remove();    
            }
        }

        if(telephone_number==''){
            var returnVar = 1;
            jQuery("#home-your-telephone_number").after('<span class="wpcf7-not-valid-tip home-your-telephone_number" aria-hidden="true"></span>');   
        } else{
            jQuery(".home-your-telephone_number").remove();
        }

        if(message==''){
            var returnVar = 1;
            jQuery("#home-your-message").after('<span class="wpcf7-not-valid-tip home-your-message" aria-hidden="true"></span>'); 
        } else{
            jQuery(".home-your-message").remove();
        }


        if(returnVar==0){

            jQuery.ajax({  
                url: ajaxUrl,  
                method:"POST",  
                data:{
                    "name" : name,
                    "email" : email,
                    "telephone_number" : telephone_number,
                    "message" : message,
                },  
                success:function(data) {  
                    if(data==1){

                        jQuery("#home-your-name").val('');
                        jQuery("#home-your-email").val('');
                        jQuery("#home-your-telephone_number").val('');
                        jQuery("#home-your-message").val('');

                        jQuery('.wpcf7-spinner').css("visibility", "hidden");
                        jQuery('.wpcf7-form-home').removeClass('submitting');
                        jQuery('.wpcf7-form-home').removeClass('invalid');
                        jQuery('.wpcf7-form-home').addClass('sent');
                        jQuery('.wpcf7-response-output').text('Thank you for your message. It has been sent.');
                    } else {
                        jQuery('.wpcf7-spinner').css("visibility", "hidden");
                        jQuery('.wpcf7-form-home').removeClass('submitting');
                        jQuery('.wpcf7-form-home').addClass('invalid');
                        jQuery('.wpcf7-response-output').text('One or more fields have an error. Please check and try again.');
                    }

                    setTimeout(function() {
                        jQuery('.wpcf7-form-home').removeClass('submitting');
                        jQuery('.wpcf7-form-home').removeClass('invalid');
                        jQuery('.wpcf7-form-home').removeClass('sent');
                        jQuery('.wpcf7-response-output').text('');
                        jQuery('.wpcf7-form-home').addClass('init');
                    }, 3000);
                }  
            });

            
        } else {
            jQuery('.wpcf7-form-home').removeClass('init');
            jQuery('.wpcf7-spinner').css("visibility", "hidden");
            jQuery('.wpcf7-form-home').removeClass('submitting');
            jQuery('.wpcf7-form-home').addClass('invalid');
            jQuery('.wpcf7-response-output').text('One or more fields have an error. Please check and try again.');
            
        }

    });
}); 