$(document).ready(function() {
            $(".wpcf7-submitContact").click(function(e) {

                $('.wpcf7-form-contact').removeClass('init');
                $('.wpcf7-form-contact').addClass('submitting');
                $('.wpcf7-spinner').css("visibility", "visible");

                var ajaxUrl = "postRequest/saveContactUs.php";

                var name = $("#your-name-contact").val();
                var email = $("#your-email-contact").val();
                var subject = $("#your-subject-contact").val();
                var message = $("#your-message-contact").val();

                var returnVar = 0;
                if(name==''){
                    var returnVar = 1;
                    $("#your-name-contact").after('<span class="wpcf7-not-valid-tip your-name-contact" aria-hidden="true "></span>');
                } else{
                    $(".your-name-contact").remove();
                }

                if(email==''){
                    var returnVar = 1;
                    $("#your-email-contact").after('<span class="wpcf7-not-valid-tip your-email-contact" aria-hidden="true"></span>');
                } else{

                    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;    
                    if(!regex.test(email)){   
                        var returnVar = 1; 
                        $("#your-email-contact").after('<span class="wpcf7-not-valid-tip your-email-contact" aria-hidden="true"></span>');
                    } else{
                        $(".your-email-contact").remove();    
                    }
                }

                if(subject==''){
                    var returnVar = 1;
                    $("#your-subject-contact").after('<span class="wpcf7-not-valid-tip your-subject-contact" aria-hidden="true"></span>');   
                } else{
                    $(".your-subject-contact").remove();
                }

                if(message==''){
                    var returnVar = 1;
                    $("#your-message-contact").after('<span class="wpcf7-not-valid-tip your-message-contact" aria-hidden="true"></span>'); 
                } else{
                    $(".your-message-contact").remove();
                }


                if(returnVar==0){

                    $.ajax({  
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

                                $("#your-name-contact").val('');
                                $("#your-email-contact").val('');
                                $("#your-subject-contact").val('');
                                $("#your-message-contact").val('');

                                $('.wpcf7-spinner').css("visibility", "hidden");
                                $('.wpcf7-form-contact').removeClass('submitting');
                                $('.wpcf7-form-contact').removeClass('invalid');
                                $('.wpcf7-form-contact').addClass('sent');
                                $('.wpcf7-response-output').text('Your message was sent successfully. Thanks.');
                            } else {
                                $('.wpcf7-spinner').css("visibility", "hidden");
                                $('.wpcf7-form-contact').removeClass('submitting');
                                $('.wpcf7-form-contact').addClass('invalid');
                                $('.wpcf7-response-output').text('Validation errors occurred. Please confirm the fields and submit it again.');
                            }

                            setTimeout(function() {
                                $('.wpcf7-form-contact').removeClass('submitting');
                                $('.wpcf7-form-contact').removeClass('invalid');
                                $('.wpcf7-form-contact').removeClass('sent');
                                $('.wpcf7-response-output').text('');
                                $('.wpcf7-form-contact').addClass('init');
                            }, 3000);
                        }  
                    });

                    
                } else {
                    $('.wpcf7-spinner').css("visibility", "hidden");
                    $('.wpcf7-form-contact').removeClass('submitting');
                    $('.wpcf7-form-contact').addClass('invalid');
                    $('.wpcf7-response-output').text('Validation errors occurred. Please confirm the fields and submit it again.');
                    
                }

            });

            $(".wpcf7-submitHome").click(function(e) {

                $('.wpcf7-form-home').removeClass('init');
                $('.wpcf7-form-home').addClass('submitting');
                $('.wpcf7-spinner').css("visibility", "visible");

                var ajaxUrl = "postRequest/saveContactUs.php";

                var name = $("#home-your-name").val();
                var email = $("#home-your-email").val();
                var telephone_number = $("#home-your-telephone_number").val();
                var message = $("#home-your-message").val();

                var returnVar = 0;
                if(name==''){
                    var returnVar = 1;
                    $("#home-your-name").after('<span class="wpcf7-not-valid-tip home-your-name" aria-hidden="true "></span>');
                } else{
                    $(".home-your-name").remove();
                }

                if(email==''){
                    var returnVar = 1;
                    $("#home-your-email").after('<span class="wpcf7-not-valid-tip home-your-email" aria-hidden="true"></span>');
                } else{

                    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;    
                    if(!regex.test(email)){   
                        var returnVar = 1; 
                        $("#home-your-email").after('<span class="wpcf7-not-valid-tip home-your-email" aria-hidden="true"></span>');
                    } else{
                        $(".home-your-email").remove();    
                    }
                }

                if(telephone_number==''){
                    var returnVar = 1;
                    $("#home-your-telephone_number").after('<span class="wpcf7-not-valid-tip home-your-telephone_number" aria-hidden="true"></span>');   
                } else{
                    $(".home-your-telephone_number").remove();
                }

                if(message==''){
                    var returnVar = 1;
                    $("#home-your-message").after('<span class="wpcf7-not-valid-tip home-your-message" aria-hidden="true"></span>'); 
                } else{
                    $(".home-your-message").remove();
                }


                if(returnVar==0){

                    $.ajax({  
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

                                $("#home-your-name").val('');
                                $("#home-your-email").val('');
                                $("#home-your-telephone_number").val('');
                                $("#home-your-message").val('');

                                $('.wpcf7-spinner').css("visibility", "hidden");
                                $('.wpcf7-form-home').removeClass('submitting');
                                $('.wpcf7-form-home').removeClass('invalid');
                                $('.wpcf7-form-home').addClass('sent');
                                $('.wpcf7-response-output').text('Thank you for your message. It has been sent.');
                            } else {
                                $('.wpcf7-spinner').css("visibility", "hidden");
                                $('.wpcf7-form-home').removeClass('submitting');
                                $('.wpcf7-form-home').addClass('invalid');
                                $('.wpcf7-response-output').text('One or more fields have an error. Please check and try again.');
                            }

                            setTimeout(function() {
                                $('.wpcf7-form-home').removeClass('submitting');
                                $('.wpcf7-form-home').removeClass('invalid');
                                $('.wpcf7-form-home').removeClass('sent');
                                $('.wpcf7-response-output').text('');
                                $('.wpcf7-form-home').addClass('init');
                            }, 3000);
                        }  
                    });

                    
                } else {
                    $('.wpcf7-form-home').removeClass('init');
                    $('.wpcf7-spinner').css("visibility", "hidden");
                    $('.wpcf7-form-home').removeClass('submitting');
                    $('.wpcf7-form-home').addClass('invalid');
                    $('.wpcf7-response-output').text('One or more fields have an error. Please check and try again.');
                    
                }

            });
        }); 