$(document).ready(function(){
	menuOpen();
	menuClose();
});

function menuOpen(){
	$('#hamburger,.top-line,.middle-line,bottom-line').on('click',function(){
		$('.left-menu').addClass('slide-in');
	});
}

function menuClose(){
	$('.menu-close,#left-menu-list a').on('click',function(){
		$('.left-menu').removeClass('slide-in');
	});
}
