$(function(){
	'use strict';

	$('#sendComment').on('click', function (event) {
		var postId = $(this).data('post');
		var comment= $('#comment').val();

		if(postId == ''  || comment == ''){
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
					postID : postId,
					comment : comment,
					action : 'sendComment'
				},
				function (data, status){
					console.log(status);
                    data = $.trim(data);
                    console.log(data);
                    if(data==="addCommentSuccessfully")
                    {
                    	$('#comment').val('');
                    	window.location.reload();
                    }
                    else 
                    {
			            $('html, body').animate({
			                scrollTop: 0
			            },function(){
                     	   $('.errorMessage p').text('Please Re Enter your Comment').parent().fadeIn().delay(7000).fadeOut();

			            });
                    }
                    
				}
			);
			
		}

		return false;
	});

});