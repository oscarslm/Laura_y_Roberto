$(document).ready(function(){

	$(window).on("scroll", function() {
	  if($(window).scrollTop() > 40) {
	    $("#header").addClass("navbar-fixed");
	  } else {
	    $("#header").removeClass("navbar-fixed");
	  }
	});

});