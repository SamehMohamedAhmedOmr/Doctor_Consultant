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
					postID : id,
					action : 'deletePOST'
				},
				function (data, status){
					console.log(status);
                    data = $.trim(data);
                    
                    if(data==="delete_success")
                    {
                        window.location.href = 'myPost.php';
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