$(function(){
	'use strict';

	$('#addPost_submit').on('click', function (event) {
		var title = $.trim($('#title').val());
		var content = $.trim($('#postContent').val());
		
		if(title == '' || content == ''){
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
					title : title,
					content : content,
					action : 'addPost'
				},
				function (data, status){
					console.log(status);
                    data = $.trim(data);

                    if(data==="addSuccess")
                    {
                    	$('html, body').animate({
                                scrollTop: 0
                            }, 1000);
                         $('.errorMessage p').text('Post add Successfully').addClass('successMessage').parent().fadeIn().delay(4000).fadeOut(function () {
                         	window.location.href = 'blogs.php';
                         	$('.errorMessage p').removeClass('successMessage');
                         });
                         $('#title').val('');
                         $('#postContent').val('');
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


	$('#edit').on('click',function () {
		$(this).addClass('hidden').next().removeClass('hidden');
		$('#title').removeAttr('readonly');
		$('#postContent').removeAttr('readonly');
		return false;
	});

	$('#editPost_submit').on('click', function (event) {
		var title = $.trim($('#title').val());
		var content = $.trim($('#postContent').val());
		var id = $(this).data('id');
		
		if(title == '' || content == ''){
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
					title : title,
					content : content,
					id : id,
					action : 'editPost'
				},
				function (data, status){
					console.log(status);
                    data = $.trim(data);
					console.log(data);
                    if(data==="edit_success")
                    {
                         $('.errorMessage p').text('Post Edit Successfully').addClass('successMessage').parent().fadeIn().delay(4000).fadeOut(function () {
                         	window.location.href = 'blogs.php';
                         	$('.errorMessage p').removeClass('successMessage');
                         });
                         $('#title').val('');
                         $('#postContent').val('');
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