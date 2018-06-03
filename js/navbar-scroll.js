// JavaScript Document
// Change navabr colour on scroll

var scroll_start = 0;
var startchange = $('#scroll-color');
var offset = startchange.offset();
$(document).scroll(function () {
	scroll_start = $(this).scrollTop();
	if (scroll_start > offset.top) {
        $('.navigation').css('background', '#e63c2d');
	} 
	else 
	{
        $('.navigation').css('background', 'transparent');
	}
}