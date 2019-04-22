$(function () {

	'use strict';

    var selectTime;

    $("#jqxcalendar").jqxCalendar({ width: '83%', height: '250px' });

    $('#jqxcalendar').on('valuechanged', function (event) {
        var date = event.args.date;
     	$("#log").val(date.toDateString());
    });


    // hour select
    $('.hour-date > div:not(:last-child) ul li').on('click', function () {

    	$(this).css({
    		border:'2px solid #3498DB',
    		color:'#3498DB'
    	}).siblings().css({
    		border:'1px solid #ccc',
    		color:'#000'
    	});
    	$('.hour-date > div:not(:last-child) ul li').not($(this)).css({
     		border:'1px solid #ccc',
    		color:'#000'   		
    	});

        selectTime = $(this);
    });

    // book-online
    $('#book_submit').on('click', function (event) {
        var doc = $.trim($('#selectDoc').val());
        var date = $.trim($('#log').val());

        if(selectTime == null){
            $('html, body').animate({
                scrollTop: 0
            },function(){
                console.log('x');
                $('.errorMessage p').text('Please select Time');
                $('.errorMessage').fadeIn().delay(5000).fadeOut();
            });
        }
        else{
            var time = selectTime.text();
            
            if(doc == '' || date == '' || time == ''){
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
                        doc : doc,
                        date : date,
                        time : time,
                        action : 'book_online'
                    },
                    function (data, status){
                        console.log(status);
                        data = $.trim(data);
                        
                        if(data==="book_success")
                        {
                            $('html, body').animate({
                                scrollTop: 0
                            }, 1000);
                            $('.errorMessage p').text('Booking added Successfully').addClass('successMessage').parent().fadeIn().delay(4000).fadeOut(function () {
                                $('.errorMessage p').removeClass('successMessage');
                            });
                            $('#selectDoc').val('');
                            $('#log').val('');
                            $('.hour-date > div:not(:last-child) ul li').css({
                                border:'1px solid #ccc',
                                color:'#000'        
                            });
                        }
                        else if(data==="previous_book") 
                        {
                            $('html, body').animate({
                                scrollTop: 0
                            },function(){
                               $('.errorMessage p').text('You have register in this Day').parent().fadeIn().delay(7000).fadeOut();
                            });
                        }
                        else 
                        {
                            $('html, body').animate({
                                scrollTop: 0
                            },function(){
                                $('.errorMessage p').text('ERROR: PLEASE RE-REGISTER').parent().fadeIn().delay(7000).fadeOut();
                            });
                        }
                        
                    }
                );
            
            } 
        }
        return false;
    });
});