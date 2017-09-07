//»ÃµÆÆ¬
	$(document).ready(function () {
		$('.slide_area').each(function () {
			slideTo(this);
		});
		$('.slide_area_kelan').each(function () {
			slideTo_kelan(this);
		});
		function slideTo(list) {
			var adTimer;
			var index = 1;
			var len = $(list).find('.slide_triggers a').parent().find("a").length;
			$(list).find('.slide_triggers a').mouseover(function () {
			index = $(list).find('.slide_triggers a').index(this);
			showPic(list,index);
			});
			$(list).find('.slide_list').hover(function () {
			clearInterval(adTimer);
			}, function () {
			adTimer = setInterval(function () {
			if(len!=1){								
			showPic(list,index);
			index++;
			}
			if (index == len) { index = 0; }
			}, 5000);
			}).trigger("mouseleave");
			function showPic(list,index) {
				$(list).find('.slide_list li').stop(true, true).hide().eq(index).fadeIn('slow');
				$(list).find('.slide_triggers a').removeClass('curr').eq(index).addClass('curr');
			};
		}
		
		function slideTo_kelan(list) {
			var adTimer;
			var index = 1;
			var len = $(list).find('.slide_triggers_kelan a').parent().find("a").length;
			$(list).find('.slide_triggers_kelan a').mouseover(function () {
			index = $(list).find('.slide_triggers_kelan a').index(this);
			showPic(list,index);
			});
			$(list).find('.slide_list_kelan').hover(function () {
			clearInterval(adTimer);
			}, function () {
			adTimer = setInterval(function () {
			if(len!=1){								
			showPic(list,index);
			index++;
			}
			if (index == len) { index = 0; }
			}, 5000);
			}).trigger("mouseleave");
			function showPic(list,index) {
				$(list).find('.slide_list_kelan li').stop(true, true).hide().eq(index).fadeIn('slow');
				$(list).find('.slide_triggers_kelan a').removeClass('curr').eq(index).addClass('curr');
			};
		}
	});