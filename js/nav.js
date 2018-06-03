// JavaScript Document

$(window).resize(navScroll);
$(document).ready(navScroll);
$(window).scroll(navScroll);
var toggle = 0;

var url = window.location.pathname;
var filename = (url.substring(0, url.lastIndexOf('/')));
filename = filename.substring(filename.lastIndexOf('/') + 1);

function navScroll(){
    if($(window).width() >= 992) {
        var scrollTop = 0;
          scrollTop = $(window).scrollTop();

          if (scrollTop >= 100) 
		  {
			  $('#global-nav').css({"padding":"0px"})
			  $('#global-nav').addClass('scrolled-nav');
			  $("nav a").css('color', 'black')

		  } 
		else if (scrollTop < 100) 
		{
            $('#global-nav').removeClass('scrolled-nav');
			$("nav a").css('color', 'white')
		}
    }
    else {
        $('#global-nav').css({
            "padding":"21px",
            "padding-top":"8px",
            "padding-bottom":"8px"
        })
		$("nav a").css('color', 'black')
    }
}

$(".navbar-toggler").click(function() {
    toggle++;
    if(toggle % 2 == 1) {
        $('#global-nav').removeClass('toggle-height');
    }
    else {
        $('#global-nav').addClass('toggle-height');
    }
});