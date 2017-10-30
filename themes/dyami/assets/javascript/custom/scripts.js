$(document).ready(function(){
	menuOpen();
	menuClose();
	filterWork();
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
			}
		});
	});
}
if ($('body').hasClass('page-template-page-work')) {
	$(function(){
	  $('#menu-item-19').find('a').click().addClass('active-work');
	});
}
