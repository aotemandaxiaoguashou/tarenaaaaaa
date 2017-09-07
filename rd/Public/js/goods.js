//加入收藏夹代码
function addFavorite(id){
	$.ajax({
		type:'post',
		url:favurl,
		data:'goods_id='+id,
		dataType:"json",
		success:function(data){
			if(data['info']=="exist"){
				alert("您已经收藏！");
			}else if(data['info']=="ok"){
				alert("收藏成功！");
			}
		},
		error:function(){
			alert("您尚未登录！");
		}
	});
}

//加入购物车
var buynum=1;
function checknum(num,k,buys){
	//buynum=$("#buynum").val();
	num=parseInt(num);
	if(num<=1||isNaN(num)){
		num=1;
	}
	if(num>buys){
		num=buys;
		//alert("对不起,该商品库存不足！");
	}
	$("#buynum"+k).val(num);
	buynum=num;
}

function checkbuynum(num,buys){
	num=parseInt(num);
	if(num<=1||isNaN(num)){
		num=1;
	}
	if(num>buys){
		num=buys;
		alert("该商品最多限买"+buys+"件！");
	}
	$("#buynum").val(num);
	buynum=num;
}

function addcart(id){
	$.ajax({
		type:'post',
		url:carturl,
		data:'goods_id='+id+'&buy_num='+buynum,
		dataType:"json",
		success:function(data){
			if(data['info']=="ok"){
				alert("加入购物车成功！");
			}
		},
		error:function(){
			alert("您尚未登录！");
		}
	});
}

//\uxxxx转换编码为汉字
function reconvert(str){ 
	str = str.replace(/(\\u)(\w{4})/gi,function($0){ 
		return (String.fromCharCode(parseInt((escape($0).replace(/(%5Cu)(\w{4})/g,"$2")),16))); 
	}); 

	str = str.replace(/(&#x)(\w{4});/gi,function($0){ 
		return String.fromCharCode(parseInt(escape($0).replace(/(%26%23x)(\w{4})(%3B)/g,"$2"),16)); 
	}); 
	return str; 
}

