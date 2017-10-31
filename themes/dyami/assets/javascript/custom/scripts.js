$(document).ready(function(){
	menuOpen();
	menuClose();
	filterWork();
	audioVideoModal();
});

// Open left menu
function menuOpen(){
	$('#hamburger,.top-line,.middle-line,bottom-line').on('click',function(){
		$('.left-menu').addClass('slide-in');
	});
}

// Close left menu
function menuClose(){
	$('.menu-close,#left-menu-list a').on('click',function(){
		$('.left-menu').removeClass('slide-in');
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
