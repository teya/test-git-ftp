jQuery(document).ready(function ($) {
	// $('#beepo-career-featured-jobs .beepo-career-featured-categories li:first-child .sub-menu').css('display', 'block');
	$('#beepo-career-featured-jobs .beepo-career-featured-categories li:first-child').addClass('active').find('.sub-menu').css('display', 'block');
	// prevent page from jumping to top from  # href link
	$('.menu-featured-jobs-container li.menu-item-has-children > a').click(function(e) {
		e.preventDefault();
	});

	// remove link from menu items that have children
	$(".menu-featured-jobs-container li.menu-item-has-children > a").attr("href", "#");

	//  function to open / close menu items
	$(".menu-featured-jobs-container a").click(function() {
		var link = $(this);
		var closest_ul = link.closest("ul");
		var parallel_active_links = closest_ul.find(".active")
		var closest_li = link.closest("li");
		var link_status = closest_li.hasClass("active");
		var count = 0;

		closest_ul.find("ul").slideUp(function() {
			if (++count == closest_ul.find("ul").length){
				
				parallel_active_links.removeClass("active");
			}
		});

		if (!link_status) {
			closest_li.children("ul").slideDown();
			closest_li.addClass("active");
		}
	})

	if($('#job-roles-list-container').length){
		$('.job-role-item').on('click', function(){
			var li_item = $(this);
			var element_id = li_item.attr('id').replace('role-profile-id-','');
			var current_sub_job_roles = $('#sub-job-roles-list-id-'+element_id);

			li_item.addClass('active').siblings().removeClass('active');
			current_sub_job_roles.siblings().hide().find('li').hide();;

			if($('#job-roles-section-column-left-active').length){;
				current_sub_job_roles.show("fast", function(){
					$(current_sub_job_roles).find('.sub-job-roles-list').children('li').each(function(index){
					    $(this).delay(100*index).fadeIn(300);
					});
				});
			}else{
				
				$('.job-roles-section-column-left-inactive').animate({
				    width:'50%'
				}, 300
				,function(){
					$('.job-roles-section-column-right').show();
					current_sub_job_roles.show("fast", function(){
						$(current_sub_job_roles).find('.sub-job-roles-list').children('li').each(function(index){
						    $(this).delay(100*index).fadeIn(300);
						});
					});
				}
				).removeClass('job-roles-section-column-left-inactive').attr('id', 'job-roles-section-column-left-active');
			}
		});
	}
    $('img.beepo-video-thumbnail').click(function(){
          if($(this).attr('data-video').length) {
              var width = $(this).width();
              var height = $(this)[0].getBoundingClientRect().height;
              var video = '<iframe src="'+ $(this).attr('data-video') +'" width="'+width+'" height="'+ height +'" frameborder="0" allowfullscreen="allowfullscreen" id="video"></iframe>';
              $(this).replaceWith(video);
          }
    });
     
  var maxHeight = 0;
  var webinarItem = $('.webinar-item');
  webinarItem.each(function(){
     if ($(this).outerHeight() > maxHeight) { maxHeight = $(this).outerHeight(); }
  });
  webinarItem.height(maxHeight);
});

