$(document).ready(function(){
	removeMenuScrolling();
	filterWork();
	audioVideoModal();
	btnOutlineEffect();
	openCloseMenu();

	$('#home').find('.home-hero__layout')
  // .slideDown('slow')
  .animate({
  	opacity: 1
  },1000,function(){
  	
  });


});

function btnOutlineEffect(){
	$('.btn-outline, .btn-flip, .btn-flop').each(function(){
		if($(this).hasClass("btn-block")){
			var thisCopy = $( this ).clone();
			$( this ).wrap( "<div class='btn-effect btn-block' style='height:"+$(this).outerHeight()+"px'></div>" );
		}else{
			var thisCopy = $( this ).clone();
			$( this ).wrap( "<div class='btn-effect' style='height:"+$(this).outerHeight()+"px'></div>" );
		}
		thisCopy.appendTo( $( this ).parent() );
		$("<br/>").insertAfter( $(this).parent().find(".btn-outline:first-of-type") );

		$( $(this).parent() ).unbind().hover(function(){
			$(this).find('.btn:first-of-type').stop().animate({top:'-'+$(this).outerHeight()+'px'}, 250);
			$(this).find('.btn:last-of-type').stop().animate({top:'-'+$(this).outerHeight()+'px'}, 250);
		}, function(){
			$(this).find('.btn:first-of-type').stop().animate({top:'0px'}, 250);
			$(this).find('.btn:last-of-type').stop().animate({top:'0px'}, 250);
		})
	})
}

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
	
		$('.menu-close,#left-menu-list a').on('click',function(){
			$('#left-menu').removeClass('slide-in');
			open = false;
		});

	// Close Left menu if user clicks anywehre outside the menu
	$('section,.footer').click(function(){
		console.log('clicked a section. Open should be true. Open real value is ' + open);
		if (open == true) {
			$('#left-menu').removeClass('slide-in');
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

		$.ajax({
			type: 'GET',
			url: url,
			success: function(response){
				$('#work-container').html('');
				$('#work-container').append(response);
				audioVideoModal();
			}
		});
	});

	$('#work-select').on('change',function(){
		
		var category       = $(this).find(':selected').text();
		var categoryJoined = category.split(' & ').join('-').split(' ').join('-');
		if (cat == undefined) {
			var url = templateURL + '/ajax-search.php?cat=' + categoryJoined;
		}else{
			var url = templateURL + '/ajax-search.php?cat=' + cat;
		}

		$.ajax({
			type: 'GET',
			url: url,
			success: function(response){
				$('#work-container').html('');
				$('#work-container').append(response);
				audioVideoModal();
			}
		});
	});
}

// Add audio or video file to modal and play
function audioVideoModal(){
	$('.feat-img-cont').on('click',function(){

		// check if audio or video post
		if ($(this).data('audio')) {
			console.log('audio');
			var type    = 'audio/mpeg';
			var ele     = 'audio';
			var fileURL = $(this).data('audio');
			var title   = $(this).data('title');
		}
		if ($(this).data('video')) {
			console.log('video');
			var type    = 'video/mp4';
			var ele     = 'video';
			var fileURL = $(this).data('video');
			var title   = $(this).data('title');
		}
		// set html that will be injected into modal
		var html      = '<' + ele + ' controls autoplay><source src="' + fileURL +'" type="' + type +'"></'+ ele +'>';
		
		// After modal opens inject html into it
		$(document).on('open.zf.reveal',function(){
			console.log('revealed');
			$('#audio-video-modal').find('#modal-title').html(title);
			$('#audio-video-modal').find('#modal-body').html(html);
		});
	});
}

// Stop the file from playing when modal is closed
console.log('closed');
$(document).on('closed.zf.reveal',function(){
	$('#audio-video-modal').find('video,audio').trigger('pause');
});

// Set Category to All when landing on work page
if ($('body').hasClass('page-template-page-work')) {
	$(function(){
	  $('#menu-item-19').find('a').click().addClass('active-work');
	});
}
