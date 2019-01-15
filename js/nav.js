// JavaScript Document

$(window).resize(navScroll);
$(document).ready(navScroll);
$(window).scroll(navScroll);

var url = window.location.pathname;
var typed = $(".typed");

function navScroll(){
    if($(window).width() >= 991.98) {

        var scrollTop = 0;
          scrollTop = $(window).scrollTop();

          if (scrollTop >= 100) 
		  {
			  $("nav a").css('color', 'black')
			  $('#global-nav').removeClass('transparent')

		  } 
		else if (scrollTop < 100) 
		{
			$("nav a").css('color', 'white')
			$('#global-nav').addClass('transparent')
		}
    }
    else {
		$("nav a").css('color', 'black')
		$('#global-nav').removeClass('transparent')
    }
}


$(function() {
	if($(window).width() >= 991.98) {
		typed.typed({strings: ["'M A DESIGNER.", "'M A DEVELOPER.", "'M A FREELANCER.", " AM WILLIAM BELCHER."], typeSpeed: 100, loop: false,});
	} else {
		typed.typed({strings: [" AM WILLIAM BELCHER."], typeSpeed: 100, loop: false,});
	}
});