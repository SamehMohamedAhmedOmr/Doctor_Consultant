$(function () {
    
    'use strict';

	$('#edit').on('click',function () {
		$(this).addClass('hidden').next().removeClass('hidden');
		$('#address').removeAttr('readonly');
		return false;
	});

	$('#editClinic_submit').on('click', function (event) {
		var address = $.trim($('#address').val());
		var clinicID = $(this).data('id');
		
		if(address == ''){
            $('html, body').animate({
                scrollTop: 0
            },function(){
   	            $('.errorMessage p').text('Please fill all Fields');
      	        $('.errorMessage').fadeIn().delay(5000).fadeOut();
            });
		}
		else{
			$.get(
				'ajax.php',
				{
					address : address,
					clinicID: clinicID,
					action : 'editClinic'
				},
				function (data, status){
					console.log(status);
                    data = $.trim(data);
                    if(data == "update Successfually")
                    {
                    	$('html, body').animate({
                                scrollTop: 0
                            }, 1000);
                         $('.errorMessage p').text('Clinic Edit Successfully').addClass('successMessage').parent().fadeIn().delay(4000).fadeOut(function () {
                         	window.location.href = 'viewClinics.php';
                         	$('.errorMessage p').removeClass('successMessage');
                         });
                         $('#address').val('');
                    }
                    else 
                    {
			            $('html, body').animate({
			                scrollTop: 0
			            },function(){
                      	 	 $('.errorMessage p').text('ERROR').parent().fadeIn().delay(7000).fadeOut();
			            });
                    }
                    
				}
			);
			
		}

		return false;
	});    
    

});