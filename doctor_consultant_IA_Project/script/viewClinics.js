$(function(){
	'use strict';

	$('.delete').on('click', function (event) {
		var id = $(this).data('d');
		
		if(id == ''){
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
					clinicID : id,
					action : 'deleteClinic'
				},
				function (data, status){
					console.log(status);
                    data = $.trim(data);
                    console.log(data);
                    if(data==="delete Successfually")
                    {
                        window.location.href = 'viewClinics.php';
                    }
                    else 
                    {
			            $('html, body').animate({
			                scrollTop: 0
			            },function(){
                        	$('.errorMessage p').text('Please Ensure of the item deleted').parent().fadeIn().delay(7000).fadeOut();
			            });
                    }
                    
				}
			);
			
		}

		return false;
	});

});