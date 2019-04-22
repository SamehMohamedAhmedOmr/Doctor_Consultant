$(function(){
	'use strict';

	$('.login_submit').on('click', function (event) {
		var email = $.trim($('#email').val());
		var pass = $.trim($('#pass').val());
		var remember = $('#remember').checked;
		
		if(email == '' || pass == ''){
            $('html, body').animate({
                scrollTop: 0
            },function(){
   	            $('.errorMessage p').text('Please fill all Fields');
      	        $('.errorMessage').fadeIn().delay(5000).fadeOut();
            });
		}
		else{
			var remember = $('#remember').is(':checked');
	
			$.post(
				'ajax.php',
				{
					email : email,
					pass : pass,
					remember : remember,
					action : 'login'
				},
				function (data, status){
					console.log(status);
                    data = $.trim(data);
                    
                    if(data==="login_success")
                    {
                        window.location.href = 'index.php';
                    }
                    else 
                    {
			            $('html, body').animate({
			                scrollTop: 0
			            },function(){
                        	$('.errorMessage p').text('Your email o password or Both is incorrect').parent().fadeIn().delay(7000).fadeOut();
			            });
                    	$('html, body').animate({
                                scrollTop: 0
                            }, 1000);
                    }
                    
				}
			);
			
		}

		return false;
	});

});