$(document).ready(function(){

	var sectionArray = [1, 2, 3, 4, 5, 6, 7];
	$.each(sectionArray, function(index, value){
	     $(document).scroll(function(){
	         var offsetSection = $('#' + 'section_' + value).offset().top;
	         var docScroll = $(document).scrollTop();
	         var docScroll1 = docScroll + 1; 
	         if ( docScroll1 >= offsetSection ){
	             $('li').removeClass('active');
	             $('li:link').addClass('inactive');  
	             $('li').eq(index).addClass('active');
	             $('li:link').eq(index).removeClass('inactive');
	         }
	     });
	    $('li a').eq(index).click(function(e){
	        var offsetClick = $('#' + 'section_' + value).offset().top;
	        e.preventDefault();
	        $('html, body').animate({
	            'scrollTop':offsetClick
	        }, 300);
	    });
	});

	    // $('.nav-item:link').addClass('inactive');    
	    // $('.nav-item').eq(0).addClass('active');
	    // $('.nav-item:link').eq(0).removeClass('inactive');
	

	$(window).on("scroll", function() {
	  if($(window).scrollTop() > 40) {
	    $("#header").addClass("shadow-sm");
	    $("#header").addClass("sticky");
	  } else {
	    $("#header").removeClass("shadow-sm");
	    $("#header").removeClass("sticky");
	  }
	});

});