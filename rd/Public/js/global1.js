$(document).ready(function(){
    $('.quick-item > .list').hover(
        function(){
            var l = $(this).offset().left, t = $(this).offset().top;
            $(this).clone().addClass('clone').insertAfter($(this));
            $(this).addClass('current').css({'position':'absolute', 'left': l + 'px', 'top': t + 'px', 'z-index': '20'});
        },
        function(){
            $('.clone').detach();
            $(this).removeClass('current').removeAttr('style');
        }
    );

    var cateTimer = null;
    $('.cate-tree').hover(
        function(){
            $(this).addClass('cate-tree-hover');
            $('.cate-tree-layer').show();
        },
        function(){
            cateTimer = setTimeout(function(){
                $('.cate-tree').removeClass('cate-tree-hover');
                $('.cate-tree-layer').hide();
            },100);
        }
    );
    $('.cate-tree-layer').hover(
        function(){
            clearInterval(cateTimer);
            $('.cate-tree').addClass('cate-tree-hover');
        },
        function(){
            $(this).hide();
            $('.cate-tree').removeClass('cate-tree-hover');
        }
    );

    // 微信二维码
    $('#wx').hover(
        //function(){
        //    $(this).addClass('wx');
        //},
        //function(){
       //     $(this).removeClass('wx');
        //}
    );
    // 商品列表
    $('#cate-goods > li > .btn-box > .btn-box-z').each(function(){
        $(this).hover(
            function(){
                $(this).css('position', 'relative').find('.standard').show();
            },
            function(){
                $(this).removeAttr("style").find('.standard').hide();
            }
        );
    });
    // 经典套餐列表
    $('.case-list-box > .case-area > .item').hover(
        function(){
            $(this).addClass('item-hover');
        },
        function(){
            $(this).removeClass('item-hover');
        }
    );

    // 经典套餐详情 Tab
    $('.case-tabs > .tab-hd > li').click(function(){
        $(this).addClass('curr').siblings('li').removeClass('curr');
        $('.case-tabs > .tab-bd > div').hide().eq($(this).index()).show();
    });

    // 套系
    $('.package-list > .item').hover(
        function(){
            $(this).addClass('item-hover');
        },
        function(){
            $(this).removeClass('item-hover');
        }
    );

    // 新人讲堂
    $('.lec-tabs > .tab-hd > ul > li').mouseover(function(){
        $(this).addClass('curr').siblings('li').removeClass('curr');
        $('.lec-tabs > .tab-bd > .box').hide().eq($(this).index()).show();
    });

    //属性筛选
    $('.attr-extra').click(function(){
        if($('#screening').hasClass('scree-bd-curr')){
            $('#screening').removeClass('scree-bd-curr');
            $(this).text("更多选项");
        }else{
            $('#screening').addClass('scree-bd-curr');
            $(this).text("收起");
        }
    });
    if($('#screening > li').length < 2){
        $('#screening').addClass('scree-bd-curr');
    }


    // 首页轮播图
    var aSlidePage = $('.txt-list li');
    var aSlideCon = $('.focus-img ul li');
    var iSize = aSlideCon.size();
    var iNow = 0;
    var timer = null;
    aSlidePage.each(function(index){
    $(this).mouseover(function(){
        iNow = index;
        slideRun()
    })
    })
    function slideRun(){
    aSlidePage.removeClass('bg');
    aSlidePage.eq(iNow).addClass('bg');
    aSlideCon.stop();
    aSlideCon.find('b').stop();
    aSlideCon.eq(iNow).siblings().animate({
        opacity:0
    },800).hide();
    aSlideCon.eq(iNow).show().animate({
        opacity:1
    },800)
    }
    autoRun();
    function autoRun(){
    timer = setInterval(function(){
        iNow++;
        if(iNow>iSize-1) iNow=0;
        slideRun();
    },5000)
    };
    $('#focus-ad').hover(function(){
        clearInterval(timer);
    },function(){
        autoRun();
    });

    // 快捷入口
    $('.quick-box > ul > li').each(function(){
        var iClass = null;
        $(this).hover(
            function(){
                iClass = $(this).attr('class');
                $(this).addClass('curr');
            },
            function(){
                if(iClass !== $(this).attr('class')){
                    $(this).removeClass('curr');
                };
            }
        );
    });

    // 首页社区晒单
    $('.bask-order-focus > .bask-order-tab > .item').mouseover(function(){
        $(this).addClass('onbg').siblings('li').removeClass('onbg');
        $('.bask-order-focus > .bask-order-cont > .item').hide().eq($(this).index()).show();
    });

    // 团购详情 Tab
    $('.group-tabs > .tab-hd > li').click(function(){
        $(this).addClass('curr').siblings('li').removeClass('curr');
        $('.group-tabs > .tab-bd > div').hide().eq($(this).index()).show();
    });
    
    // 精算器 Tab
    $('.title-tab > li').click(function(){
        $(this).addClass('curr').siblings('li').removeClass('curr');
        $('.title-tab-cont > div').hide().eq($(this).index()).show();
        $('.tab-desc > div').hide().eq($(this).index()).show();
    });
    



});



var spanlist = 1;
var contents = '';
var exists_zero = 1;
var dispatch_str = '{$shipping_str}';
var style = '';
function getselect(val, path, type)
{
	var valstr = '';
	if($("#other_address").attr("checked") == false) $("#other_address").attr("checked", true);
	if(path < spanlist)
	{
		$("span[id^='spanlist']").each(function(){
			var listid = $(this).attr("id").substring(8);
			if(listid > path) $("#spanlist" + listid).remove();
			spanlist = path;
		});
	}
	
	ajaxselect(val,type);
	if (type == 0)
	{
		style = ' class="f_l"';
	}else
	{
		style = '';
	}
	if(contents != 0)
	{
		
		var after = spanlist + 1;
		var html_contents = '<span name="spanlist' + after + '" id="spanlist' + after + '"><select'+style+' name="spanlist_' + after + '" id="spanlist_' + after + '" onchange="getselect(this.value, ' + after + ',\''+type+'\')"><option value="0" selected="selected">请选择</option>' + contents + '</select></span>';
		$("#spanlist" + spanlist).after(html_contents);
		spanlist++;
	}
	exists_zero = 0;
	$("select[name^='spanlist_']").each(function(){
		if($(this).val() == 0)
		{
			exists_zero = 1;
			return false;
		}
		valstr += $(this).val() + ',';
	})
}

//url:'cart.php',
//data:'act=ajax_get_region&pid='+selectid,

function ajaxselect(selectid, type)
{
	if(selectid == 0)
	{
		contents = selectid;
		return false;
	}
	if (type == 0)
	{
		url   = 'reg.php';
		param = 'act=useradd&parent_id='+selectid;
	}else
	{
		url   = 'cart.php';
		param = 'act=ajax_get_region&pid='+selectid;
	}
	$.ajax({
		type:'POST',
		url:url,
		data:param,
		dataType:'html',
		async:false,
		success:function(htmls)
		{
			contents = htmls;
		}
	});
	return true;
}
