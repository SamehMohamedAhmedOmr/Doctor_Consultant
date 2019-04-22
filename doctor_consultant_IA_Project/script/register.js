/*global $, window*/

$(function () {
    
    'use strict';
    
    $('.sign-up-tabs div').on('click', function () {
        $(this).addClass('selected-sign-up-tab').siblings().removeClass('selected-sign-up-tab');
        var id = $(this).data('toggle');
        $('#' + id).show().siblings().hide();
    });

    $('#patient_submit').on('click', function () {

		var name = $.trim($('#name').val());
		var email = $.trim($('#email').val());
		var pass = $.trim($('#password').val());
		var mobile = $.trim($('#mobile').val());
		var accept = $('#agree').is(':checked');

		
		if(email == '' || pass == '' || name == '' || mobile == ''){
			$('html, body').animate({
                scrollTop: 0
            },function(){
   	            $('.errorMessage p').text('Please fill all Fields');
      	        $('.errorMessage').fadeIn().delay(5000).fadeOut();
            });
		}
		else if(accept == false){
			$('html, body').animate({
                scrollTop: 0
            },function(){
   	            $('.errorMessage p').text('Please Accept on the conditions');
      	        $('.errorMessage').fadeIn().delay(5000).fadeOut();
            });
		}
		else{	
			$.post(
				'ajax.php',
				{
					email : email,
					pass : pass,
					name : name,
					mobile : mobile,
					action : 'patient_signup'
				},
				function (data, status){
					console.log(status);
                    data = $.trim(data);
                    console.log(data);
                    if(data==="sign_success")
                    {
			            $('html, body').animate({
			                scrollTop: 0
			            },function(){
			            	$('.errorMessage p').text('Success Registration, Please wait and login').addClass('successMessage').parent().fadeIn().delay(4000).fadeOut(function () {
	                         	$('.errorMessage p').removeClass('successMessage');
								window.location.href = 'index.php';
							});
			            });
                    }
                    else if(data==="Duplicated_email") 
                    {
			            $('html, body').animate({
			                scrollTop: 0
			            },function(){
	                        $('.errorMessage p').text('This Email is already register before');
							$('.errorMessage').fadeIn().delay(7000).fadeOut();
			            });
                    }
                    else 
                    {
						$('html, body').animate({
			                scrollTop: 0
			            },function(){
	                        $('.errorMessage p').text('ERROR, PLEASE RE-SIGN UP');
							$('.errorMessage').fadeIn().delay(7000).fadeOut();
			            });
                    }
                    
				}
			);	
		}

		return false;	
	});

    $('#doctot_submit').on('click', function () {

		var name = $.trim($('#name-doc').val());
		var email = $.trim($('#email-doc').val());
		var pass = $.trim($('#password-doc').val());
		var mobile = $.trim($('#mobile-doc').val());
		var univerisity = $.trim($('#univerisity').val());

		var specialization = $.trim($('#Specialization').val());

		var accept = $('#agree-doc').is(':checked');

		if(email == '' || pass == '' || name == '' || mobile == '' || univerisity == '' || specialization == ''){
			$('html, body').animate({
                scrollTop: 0
            },function(){
   	            $('.errorMessage p').text('Please fill all Fields');
      	        $('.errorMessage').fadeIn().delay(5000).fadeOut();
            });
		}
		else if(accept == false){
			$('html, body').animate({
                scrollTop: 0
            },function(){
   	            $('.errorMessage p').text('Please Accept on the conditions');
      	        $('.errorMessage').fadeIn().delay(5000).fadeOut();
            });
		}
		else{	
			$.post(
				'ajax.php',
				{
					email : email,
					pass : pass,
					name : name,
					mobile : mobile,
					univerisity : univerisity,
					specialization : specialization,
					action : 'doctor_signup'
				},
				function (data, status){
					console.log(status);
                    data = $.trim(data);
                    console.log(data);
                    if(data==="sign_success")
                    {
			            $('html, body').animate({
			                scrollTop: 0
			            },function(){
			            	$('.errorMessage p').text('Success Registration, Please wait and login').addClass('successMessage').parent().fadeIn().delay(4000).fadeOut(function () {
	                         	$('.errorMessage p').removeClass('successMessage');
								window.location.href = 'index.php';
							});
			            });
                    }
                    else if(data==="Duplicated_email") 
                    {
			            $('html, body').animate({
			                scrollTop: 0
			            },function(){
	                        $('.errorMessage p').text('This Email is already register before');
							$('.errorMessage').fadeIn().delay(7000).fadeOut();
			            });
                    }
                    else 
                    {
						$('html, body').animate({
			                scrollTop: 0
			            },function(){
	                        $('.errorMessage p').text('ERROR, PLEASE RE-SIGN UP');
							$('.errorMessage').fadeIn().delay(7000).fadeOut();
			            });
                    }    
				}
			);	
		}

		return false;	
	});




});