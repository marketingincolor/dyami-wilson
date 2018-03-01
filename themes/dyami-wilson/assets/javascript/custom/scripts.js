$(document).ready(function(){
	removeMenuScrolling();
	filterWork();
	audioVideoModal();
	openCloseMenu();
	// leftMenuChangeLinks();

	$('#home').find('.home-hero__layout')
	  // .slideUp('slow')
	  .animate({
	  	opacity: 1,
	  	top: '55%'
	  },1000,function(){
  });
});

// function leftMenuChangeLinks(){
// 	$('#left-menu-list').find('li').each(function(){
// 		var url     = $(this).attr('href');
// 		var siteURL = location.href;
// 		$(this).attr('href',siteURL + url);
// 	});
// }

function removeMenuScrolling() {
	
	if(screen.width < 400) {
		$('.hamburger').addClass('hamburger--mobile');
	}

	$('.hamburger--mobile').on('click', function() {
		$('body').css('overflow', 'hidden');
	});

	$('.menu-close').on('click', function() {
		$('body').css('overflow', 'initial');
	});
}

// Open and close the left menu
function openCloseMenu(){
	var open = false;

	// Open left menu
	$('#hamburger,.top-line,.middle-line,bottom-line').on('click',function(){
		$('#left-menu').addClass('slide-in');
		open = true;
	});

	// Close left menu
	$('.menu-close').on('click',function(){
		$('#left-menu').removeClass('slide-in');
		open = false;
	});

	// Smooth scroll to section when left menu anchor is clicked
	// Then close menu after scrolling is complete
	$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 1000,function(){
    	$('#left-menu').removeClass('slide-in');
    	open = false;
    });
	});

	// Close Left menu if user clicks anywhere outside the menu
	$('#home,#featured-work,#services,.services2,#meet-dyami,.footer,.single-hero,.featured-post,.related-posts,.work-hero,.featured-work').click(function(){
		if (open == true) {
			$('#left-menu').removeClass('slide-in');
		}
	});
}

// Ajax logic. Private Function called only by other functions
function ajaxWork(url){
	$.ajax({
		type: 'GET',
		url: url,
		success: function(response){
			// Remove all HTML before appending new html
			$('#work-container').html('');
			$('#work-container').css({'opacity':0})
			// Add data into work container
			$('#work-container').append(response);
			// Animate opacity for fade in effect of all work projects
			$('#work-container').animate({
			  	opacity: 1,
			  },1000,function(){
		  });
			// Call modal function after every ajax call
			audioVideoModal();
		}
	});
}

// Makes AJAX call to filter work by category
function filterWork(cat){
	
	$('#category-menu-list').find('a').on('click',function(){
		$('#category-menu-list').find('a').removeClass('active-work');
		$(this).addClass('active-work');
		var category       = $(this).text();
		var categoryJoined = category.split(' & ').join('-').split(' ').join('-');
		if (cat == undefined) {
			var url = templateURL + '/ajax-search.php?cat=' + categoryJoined;
		}else{
			var url = templateURL + '/ajax-search.php?cat=' + cat;
		}
		ajaxWork(url);
		
	});

	$('#work-select').on('change',function(){
		
		var category       = $(this).find(':selected').text();
		var categoryJoined = category.split(' & ').join('-').split(' ').join('-');
		if (cat == undefined) {
			var url = templateURL + '/ajax-search.php?cat=' + categoryJoined;
		}else{
			var url = templateURL + '/ajax-search.php?cat=' + cat;
		}

		ajaxWork(url);
	});
}

// Add audio or video file to modal and play
function audioVideoModal(){
	$('.feat-img-cont').on('click',function(){

		// check if audio or video post
		if ($(this).data('audio')) {
			var type    = 'audio/mpeg';
			var ele     = 'audio';
			var fileURL = $(this).data('audio');
			var title   = $(this).data('title');
		  var html      = '<' + ele + ' controls autoplay><source src="' + fileURL +'" type="' + type +'"></'+ ele +'>';
		}
		if ($(this).data('video')) {
			var type    = 'video/mp4';
			var ele     = 'video';
			var fileURL = $(this).data('video');
			var title   = $(this).data('title');
			var html    = '<iframe src="'+ fileURL +'" frameborder="0" style="width:100%" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
		}
		// set html that will be injected into modal
		
		// After modal opens inject html into it
		$(document).on('open.zf.reveal',function(){
			$('#audio-video-modal').find('#modal-title').html(title);
			$('#audio-video-modal').find('#modal-body').html(html);
		});
	});
}

// Stop the file from playing when modal is closed
$(document).on('closed.zf.reveal',function(){
	$('#audio-video-modal').find('audio').trigger('pause');
	$('#audio-video-modal').find('#modal-body').html('');
});

// Set Category to All when landing on work page
if ($('body').hasClass('page-template-page-work')) {
	$(function(){
	  $('#menu-item-19').find('a').click().addClass('active-work');
	});
}
