$(document).ready(function(){
	$('#hamburger,.top-line,.middle-line,bottom-line').on('click',function(){
		$('.left-menu').addClass('slide-in');
	});
	$('.menu-close').on('click',function(){
		$('.left-menu').removeClass('slide-in');
	});
});