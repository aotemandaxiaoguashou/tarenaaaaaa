
// JavaScript Document
$(function(){
		$(".close_window,.close_window_,#new_mem_yy").click(function(){
			$("#show_close_id").css({"visibility":"visible"});
			$("#choise_main_phone").css({"display":"none"});
			$("#close_main_window").css({"display":"block"});
		})
		/*$(".close_window").click(function(){
			alert("s");
		})*/;
		$("#close_cance,#no_sure,#show_phone_close").click(function(){
			if(document.getElementById("order").style.visibility=="visible"){
				$("#show_close_id").css({"visibility":"hidden"});
			}else{
				$(".choise_phone_2").text("");
				closeDiv('show_close_id');
			}
			
		})
		$(".over_close_window,#yes_sure").click(function(){
			//location.reload();
			
			$("#show_close_id").css({"visibility":"hidden"});closeDiv('order');
		})
		$("#sub_tj_wed").click(function(){		//提交婚礼需求
			if(Check_Sub_name("member_name_wed") && Check_Sub_mobile("member_phone_wed")){
				$("#sub_tj_wed").attr("disabled",true);
				$.post("/0510AJAX.php?act=sub_tj_wed&tim=ishl&RandID="+Math.random(),{member_name_wed:escape($("#member_name_wed").val()),member_phone_wed:escape($("#member_phone_wed").val()),marryDate_wed:escape($("#marryDate_wed").val()),Yu_money_wed:escape($("#Yu_money_wed").val()),Needs_wed:escape($("#Needs_wed").val()),Document_url:escape($("#Document_url").val()),yic:escape($(".yic").val())},function(fhMSG){
					var fhMSG = fhMSG.replace(/\r\n/gi,"");
					//alert(fhMSG);
					if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
						show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
						$("#set_member_name").val($("#member_name_wed").val());
						$("#set_member_phone").val($("#member_phone_wed").val());
						$("#in_city").css({"visibility":"visible"});
						$("#sub_tj_wed").attr("disabled",false);
						Linktech();
					}
					if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
						show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
						$("#sub_tj_wed").attr("disabled",false);
						Linktech();
					}
					if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
						show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
						$("#over_phone").val($("#member_phone_wed").val());
						$("#sub_tj_wed").attr("disabled",false);
						Have_pwd(fhMSG);
						Linktech();
					}
					if(fhMSG.indexOf("user_phone_not_like")>=0){		//判断手机号码与上次预约的是否一样,如果不一样
						var fhMSG_1=fhMSG.split("&");
						$(".choise_phone_1").text(fhMSG_1[1]);
						$(".choise_phone_2").text($("#member_phone_wed").val());
						$("#show_close_id").css({"visibility":"visible"});
						$("#choise_main_phone").css({"display":"block"});
						$("#hidden_v").val("99");
						$("#close_main_window").css({"display":"none"});
						$("#sub_tj_wed").attr("disabled",false);
					}
				});
			}
		})

		$("#bottom_hotel_sub").click(function(){
			if(DataLength($("#bottom_hotel_phone").val()) != 11 || $("#bottom_hotel_phone").val().match(/[^\d]/) || $("#bottom_hotel_phone").val().substr(0,1) != 1){
				alert("请输入正确的手机号！");	
				return false;
			}
			$("#bottom_hotel_sub").attr("disabled",true);
			$.post("/0510AJAX.php?act=sub_hotel&tim=iscp&randid="+Math.random(),{member_phone_hotel:escape($("#bottom_hotel_phone").val()),member_hotelID:escape($("#member_hotelID").val()),Document_url:escape($("#Document_url").val()),yic:escape($(".yic").val())},function(fhMSG){
				var fhMSG = fhMSG.replace(/\r\n/gi, "");
				//alert(fhMSG);
				if(fhMSG.indexOf("already_order")>=0){	//如果已经预约过
					alert("您填写的手机号已经预约过，请关闭返回！");
					$("#bottom_hotel_sub").attr("disabled",false);
				}
				if(fhMSG.indexOf("exceed_ten")>=0){	//如果半年内预约超过十次
					alert("您一天内已经预约超过十次，请关闭返回！");
					$("#bottom_hotel_sub").attr("disabled",false);
				}
				if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
					if($(".choise_phone_2").text()!=""){
							$("#order").css({"visibility":"visible"});
						}else{
							showDiv('order');
					}
					show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
					$("#set_member_phone").val($("#bottom_hotel_phone").val());
					$("#in_city").css({"visibility":"visible"});
					$("#bottom_hotel_sub").attr("disabled",false);
					Linktech();
				}
				if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
					if($(".choise_phone_2").text()!=""){
							$("#order").css({"visibility":"visible"});
						}else{
							showDiv('order');
					}
					show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
					$("#bottom_hotel_sub").attr("disabled",false);
					Linktech();
				}
				if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
					if($(".choise_phone_2").text()!=""){
							$("#order").css({"visibility":"visible"});
						}else{
							showDiv('order');
					}
					show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
					$("#over_phone").val($("#bottom_hotel_phone").val());
					$("#bottom_hotel_sub").attr("disabled",false);
					Have_pwd(fhMSG);
					Linktech();
				}
				if(fhMSG.indexOf("user_phone_not_like")>=0){		//判断手机号码与上次预约的是否一样,如果不一样
					showDiv('show_close_id');
					var fhMSG_1=fhMSG.split("&");
					$(".choise_phone_1").text(fhMSG_1[1]);
					$(".choise_phone_2").text($("#bottom_hotel_phone").val());
				//	$("#show_close_id").css({"visibility":"visible"});
					$("#choise_main_phone").css({"display":"block"});
					$("#hidden_v").val("96");
					$("#close_main_window").css({"display":"none"});
					$("#bottom_hotel_sub").attr("disabled",false);
				}
			})
			
		})
		$("#sub_hotel").click(function(){		//预约婚宴酒店
			if(Check_Sub_mobile("member_phone_hotel")){
				$("#sub_hotel").attr("disabled",true);
				$.post("/0510AJAX.php?act=sub_hotel&tim=iscp&randid="+Math.random(),{member_phone_hotel:escape($("#member_phone_hotel").val()),member_hotelID:escape($("#member_hotelID").val()),Document_url:escape($("#Document_url").val()),member_hotelname:escape($("#member_hotelname").val()),yic:escape($(".yic").val()),isExp:escape($("#isExp").val())},function(fhMSG){
					var fhMSG = fhMSG.replace(/\r\n/gi, "");
					//alert(fhMSG);
					if(fhMSG.indexOf("already_order")>=0){	//如果已经预约过
						alert("您填写的手机号已经预约过，请关闭返回！");
						("#sub_hotel").attr("disabled",false);
						location.reload();
					}
					if(fhMSG.indexOf("exceed_ten")>=0){	//如果半年内预约超过十次
						alert("您一天内已经预约超过十次，请关闭返回！");
						("#sub_hotel").attr("disabled",false);
						location.reload();
					}
					if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
						show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
						$("#set_member_phone").val($("#member_phone_hotel").val());
						$("#in_city").css({"visibility":"visible"});
						$("#sub_hotel").attr("disabled",false);
						Linktech();
					}
					if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
						show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
						$("#sub_hotel").attr("disabled",false);
						Linktech();
					}
					if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
						show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
						$("#over_phone").val($("#member_phone_hotel").val());
						$("#sub_hotel").attr("disabled",false);
						Have_pwd(fhMSG);
						Linktech();
					}
					if(fhMSG.indexOf("user_phone_not_like")>=0){		//判断手机号码与上次预约的是否一样,如果不一样
						var fhMSG_1=fhMSG.split("&");
						$(".choise_phone_1").text(fhMSG_1[1]);
						$(".choise_phone_2").text($("#member_phone_hotel").val());
						$("#show_close_id").css({"visibility":"visible"});
						$("#choise_main_phone").css({"display":"block"});
						$("#hidden_v").val("1");
						$("#close_main_window").css({"display":"none"});
						$("#sub_hotel").attr("disabled",false);
					}
					
				})
			}
		})
        $("#sub_packs").click(function(){		//领取全部礼包
            if(Check_Sub_mobile("member_phone_packs")){
                $("#sub_packs").attr("disabled",true);
                $.post("/0510AJAX.php?act=sub_hotel&tim=iscp&randid="+Math.random(),{member_phone_hotel:escape($("#member_phone_hotel").val()),member_hotelID:escape($("#member_hotelID").val()),Document_url:escape($("#Document_url").val()),member_hotelname:escape($("#member_hotelname").val()),yic:escape($(".yic").val()),isExp:escape($("#isExp").val())},function(fhMSG){
                    var fhMSG = fhMSG.replace(/\r\n/gi, "");
                    //alert(fhMSG);
                    if(fhMSG.indexOf("already_order")>=0){	//如果已经预约过
                        alert("您填写的手机号已经预约过，请关闭返回！");
                        ("#sub_packs").attr("disabled",false);
                        location.reload();
                    }
                    if(fhMSG.indexOf("exceed_ten")>=0){	//如果半年内预约超过十次
                        alert("您一天内已经预约超过十次，请关闭返回！");
                        ("#sub_packs").attr("disabled",false);
                        location.reload();
                    }
                    if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
                        show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
                        $("#set_member_phone").val($("#member_phone_hotel").val());
                        $("#in_city").css({"visibility":"visible"});
                        $("#sub_packs").attr("disabled",false);
                        Linktech();
                    }
                    if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
                        show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
                        $("#sub_packs").attr("disabled",false);
                        Linktech();
                    }
                    if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
                        show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
                        $("#over_phone").val($("#member_phone_hotel").val());
                        $("#sub_packs").attr("disabled",false);
                        Have_pwd(fhMSG);
                        Linktech();
                    }
                    if(fhMSG.indexOf("user_phone_not_like")>=0){		//判断手机号码与上次预约的是否一样,如果不一样
                        var fhMSG_1=fhMSG.split("&");
                        $(".choise_phone_1").text(fhMSG_1[1]);
                        $(".choise_phone_2").text($("#member_phone_hotel").val());
                        $("#show_close_id").css({"visibility":"visible"});
                        $("#choise_main_phone").css({"display":"block"});
                        $("#hidden_v").val("1");
                        $("#close_main_window").css({"display":"none"});
                        $("#sub_packs").attr("disabled",false);
                    }

                })
            }
        })
		$("#sub_need_car").click(function(){	//提交婚车需求
			//alert($("#carNeed1").val()+'||'+$("#carNeed2").val()+'||'+$("#carNeed3").val());
			if(Check_Sub_mobile("member_phone_car")){
				$("#sub_need_car").attr("disabled",true);
				$.post("/0510AJAX.php?act=sub_need_car&tim=isneed&randid="+Math.random(),{member_phone_car:escape($("#member_phone_car").val()),Document_url:escape($("#Document_url").val()),carNeed1:escape($("#carNeed1").val()),carNeed2:escape($("#carNeed2").val()),carNeed3:escape($("#carNeed3").val()),yic:escape($(".yic").val())},function(fhMSG){
					var fhMSG = fhMSG.replace(/\r\n/gi, "");
					//alert(fhMSG);
					if(fhMSG.indexOf("already_order")>=0){	//如果已经预约过
						alert("您填写的手机号已经预约过，请关闭返回！");
						location.reload();
					}
					if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
						show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
						$("#set_member_phone").val($("#member_phone_car").val());
						$("#in_city").css({"visibility":"visible"});
						$("#upType").val("8");
						Linktech();
					}
					if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
						show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
						Linktech();
					}
					if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
						show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
						$("#over_phone").val($("#member_phone_car").val());
						Have_pwd(fhMSG);
						Linktech();
					}
					if(fhMSG.indexOf("user_phone_not_like")>=0){		//判断手机号码与上次预约的是否一样,如果不一样
						var fhMSG_1=fhMSG.split("&");
						$(".choise_phone_1").text(fhMSG_1[1]);
						$(".choise_phone_2").text($("#member_phone_car").val());
						$("#show_close_id").css({"visibility":"visible"});
						$("#choise_main_phone").css({"display":"block"});
						$("#hidden_v").val("8");
						$("#close_main_window").css({"display":"none"});
					}
					
				})
			}
		})
		
		$("#sub_car").click(function(){	//婚车预约
			if(Check_Sub_mobile("Ordercar_phone")){
				
				$.post("/0510AJAX.php?act=sub_need_car&tim=iscp&randid="+Math.random(),{Ordercar_phone:escape($("#Ordercar_phone").val()),Document_url:escape($("#Document_url").val()),carColor:escape($("#carColor").val()),carCount:escape($("#carCount").val()),carId:escape($("#carId").val()),yic:escape($(".yic").val())},function(fhMSG){
					var fhMSG = fhMSG.replace(/\r\n/gi, "");
					//alert(fhMSG);
					if(fhMSG.indexOf("already_order")>=0){	//如果已经预约过
						alert("您填写的手机号已经预约过，请关闭返回！");
						location.reload();
					}
					if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
						show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
						$("#set_member_phone").val($("#Ordercar_phone").val());
						$("#in_city").css({"visibility":"visible"});
						$("#upType").val("8");
						Linktech();
					}
					if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
						show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
						Linktech();
					}
					if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
						show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
						$("#over_phone").val($("#Ordercar_phone").val());
						Have_pwd(fhMSG);
						Linktech();
					}
					if(fhMSG.indexOf("user_phone_not_like")>=0){		//判断手机号码与上次预约的是否一样,如果不一样
						var fhMSG_1=fhMSG.split("&");
						$(".choise_phone_1").text(fhMSG_1[1]);
						$(".choise_phone_2").text($("#Ordercar_phone").val());
						$("#show_close_id").css({"visibility":"visible"});
						$("#choise_main_phone").css({"display":"block"});
						$("#hidden_v").val("7");
						$("#close_main_window").css({"display":"none"});
					}
					
				})
			}
		})
		$("#sub_need_candy").click(function(){	//提交喜糖需求
			//alert("2");
			if(Check_Sub_mobile("member_phone_candy")){
				$.post("/0510AJAX.php?act=sub_need_sweet&tim=isneed&randid="+Math.random(),{member_name_candy:escape($("#member_name_candy").val()),member_phone_candy:escape($("#member_phone_candy").val()),Document_url:escape($("#Document_url").val()),candyNeed1:escape($("#candyNeed1").val()),candyNeed2:escape($("#candyNeed2").val()),candyNeed3:escape($("#candyNeed3").val()),yic:escape($(".yic").val())},function(fhMSG){																																																																																																			
					var fhMSG = fhMSG.replace(/\r\n/gi, "");
					//alert(fhMSG);
					if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
						show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
						$("#set_member_name").val($("#member_name_candy").val());
						$("#set_member_phone").val($("#member_phone_candy").val());
						$("#in_city").css({"visibility":"visible"});
						$("#upType").val("10");
						Linktech();
					}
					if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
						show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
						Linktech();
					}
					if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
						show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
						$("#over_phone").val($("#member_phone_candy").val());
						Have_pwd(fhMSG);
						Linktech();
					}
					if(fhMSG.indexOf("user_phone_not_like")>=0){		//判断手机号码与上次预约的是否一样,如果不一样
						var fhMSG_1=fhMSG.split("&");
						$(".choise_phone_1").text(fhMSG_1[1]);
						$(".choise_phone_2").text($("#member_phone_candy").val());
						$("#show_close_id").css({"visibility":"visible"});
						$("#choise_main_phone").css({"display":"block"});
						$("#hidden_v").val("10");
						$("#close_main_window").css({"display":"none"});
					}
					
				})
			}
		})
		
		$("#sub_need_candy1").click(function(){	//提交喜糖感兴趣
			//alert("1");
			if(Check_Sub_mobile("member_phone_candy1")){
				$.post("/0510AJAX.php?act=sub_need_sweet&tim=isneed&randid="+Math.random(),{member_name_candy:escape($("#member_name_candy1").val()),member_phone_candy:escape($("#member_phone_candy1").val()),Document_url:escape($("#Document_url").val()),candyNeed1:escape($("#candyNeed13").val()),candyNeed2:escape($("#candyNeed23").val()),candyNeed3:escape($("#candyNeed33").val()),yic:escape($(".yic").val())},function(fhMSG){																																																																																																			
					var fhMSG = fhMSG.replace(/\r\n/gi, "");
					//alert(fhMSG);
					if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
						show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
						$("#set_member_name").val($("#member_name_candy1").val());
						$("#set_member_phone").val($("#member_phone_candy1").val());
						$("#in_city").css({"visibility":"visible"});
						$("#upType").val("11");
						Linktech();
					}
					if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
						show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
						Linktech();
					}
					if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
						show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
						$("#over_phone").val($("#member_phone_candy1").val());
						Have_pwd(fhMSG);
						Linktech();
					}
					if(fhMSG.indexOf("user_phone_not_like")>=0){		//判断手机号码与上次预约的是否一样,如果不一样
						var fhMSG_1=fhMSG.split("&");
						$(".choise_phone_1").text(fhMSG_1[1]);
						$(".choise_phone_2").text($("#member_phone_candy1").val());
						$("#show_close_id").css({"visibility":"visible"});
						$("#choise_main_phone").css({"display":"block"});
						$("#hidden_v").val("11");
						$("#close_main_window").css({"display":"none"});
					}
					
				})
			}
		})
		
		$("#sub_need_pho").click(function(){		//普通行业提交需求
			if(Check_Sub_name("member_name_pho") && Check_Sub_mobile("member_phone_pho")){
				$("#sub_need_pho").attr("disabled",true);
				
				$.post("/0510AJAX.php?act=sub_tj_wed&tim=ispho&randid="+Math.random(),{member_phone_pho:escape($("#member_phone_pho").val()),member_name_pho:escape($("#member_name_pho").val()),Document_url:escape($("#Document_url").val()),phoNeed1:escape($("#phoNeed1").val()),phoNeed2:escape($("#phoNeed2").val()),phoNeed3:escape($("#phoNeed3").val()),Needs_wed:escape($("#Needs_wed_pho").val()),yic:escape($(".yic").val())},function(fhMSG){
					var fhMSG = fhMSG.replace(/\r\n/gi, "");
					//alert(fhMSG);
					if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
						show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
						$("#set_member_name").val($("#member_name_pho").val());
						$("#set_member_phone").val($("#member_phone_pho").val());
						$("#in_city").css({"visibility":"visible"});
						$("#sub_need_pho").attr("disabled",false);
						Linktech();
					}
					if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
						show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
						$("#sub_need_pho").attr("disabled",false);
						Linktech();
					}
					if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
						show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
						$("#over_phone").val($("#member_phone_pho").val());
						$("#sub_need_pho").attr("disabled",false);
						Have_pwd(fhMSG);
						Linktech();
					}
					if(fhMSG.indexOf("user_phone_not_like")>=0){		//判断手机号码与上次预约的是否一样,如果不一样
						var fhMSG_1=fhMSG.split("&");
						$(".choise_phone_1").text(fhMSG_1[1]);
						$(".choise_phone_2").text($("#member_phone_pho").val());
						$("#show_close_id").css({"visibility":"visible"});
						$("#choise_main_phone").css({"display":"block"});
						$("#hidden_v").val("5");
						$("#close_main_window").css({"display":"none"});
						$("#sub_need_pho").attr("disabled",false);
					}
				})
			}
		})
		$("#sub_need_mv").click(function(){		//拍电影提交需求
			if(Check_Sub_name("member_name_mv") && Check_Sub_mobile("member_phone_mv")){
				$("#sub_need_mv").attr("disabled",true);
				
				$.post("/0510AJAX.php?act=sub_tj_wed&tim=ispho&randid="+Math.random(),{member_phone_pho:escape($("#member_phone_mv").val()),member_name_pho:escape($("#member_name_mv").val()),Document_url:escape($("#Document_url").val()),phoNeed1:escape($("#mvNeed1").val()),phoNeed2:escape($("#mvNeed2").val()),phoNeed3:escape($("#mvNeed3").val()),Needs_wed:escape($("#Needs_wed_mv").val()),yic:escape($(".yic").val())},function(fhMSG){
					var fhMSG = fhMSG.replace(/\r\n/gi, "");
					//alert(fhMSG);
					if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
						show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
						$("#set_member_name").val($("#member_name_mv").val());
						$("#set_member_phone").val($("#member_phone_mv").val());
						$("#in_city").css({"visibility":"visible"});
						$("#sub_need_mv").attr("disabled",false);
						Linktech();
					}
					if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
						show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
						$("#sub_need_mv").attr("disabled",false);
						Linktech();
					}
					if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
						show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
						$("#over_phone").val($("#member_phone_mv").val());
						$("#sub_need_mv").attr("disabled",false);
						Have_pwd(fhMSG);
						Linktech();
					}
					if(fhMSG.indexOf("user_phone_not_like")>=0){		//判断手机号码与上次预约的是否一样,如果不一样
						var fhMSG_1=fhMSG.split("&");
						$(".choise_phone_1").text(fhMSG_1[1]);
						$(".choise_phone_2").text($("#member_phone_mv").val());
						$("#show_close_id").css({"visibility":"visible"});
						$("#choise_main_phone").css({"display":"block"});
						$("#hidden_v").val("93");
						$("#close_main_window").css({"display":"none"});
						$("#sub_need_mv").attr("disabled",false);
					}
				})
			}
		})
	/*	$("#sub_tj_mv").click(function(){		//电影预约店铺
			if(Check_Sub_name("member_name_mvc") && Check_Sub_mobile("member_phone_mvc")){
				$("#sub_tj_pho").attr("disabled",true);
				$.post("/0510AJAX.php?act=sub_tj_wed&tim=ispu&randid="+Math.random(),{member_phone_company:escape($("#member_phone_mvc").val()),member_name_company:escape($("#member_name_mvc").val()),Document_url:escape($("#Document_url").val()),member_companyID:escape($("#member_companyID").val()),member_cType:escape($("#member_cType").val()),yic:escape($(".yic").val())},function(fhMSG){
					var fhMSG = fhMSG.replace(/\r\n/gi, "");
					//alert(fhMSG);
					if(fhMSG.indexOf("already_order")>=0){	//如果已经预约过
						alert("您填写的手机号已经预约过，请关闭返回！");
						$("#sub_tj_mv").attr("disabled",false);
						location.reload();
					}
					if(fhMSG.indexOf("exceed_ten")>=0){	//如果半年内预约超过十次
						alert("您一天内已经预约超过十次，请关闭返回！");
						$("#sub_tj_mv").attr("disabled",false);
						location.reload();
						Linktech();
					}
					if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
						show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
						$("#set_member_name").val($("#member_name_mvc").val());
						$("#set_member_phone").val($("#member_phone_mvc").val());
						$("#in_city").css({"visibility":"visible"});
						$("#sub_tj_mv").attr("disabled",false);
						Linktech();
					}
					if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
						show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
						$("#sub_tj_pho").attr("disabled",false);
						Linktech();
					}
					if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
						show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
						$("#over_phone").val($("#member_phone_mvc").val());
						$("#sub_tj_mv").attr("disabled",false);
						Have_pwd(fhMSG);
						Linktech();
					}
					if(fhMSG.indexOf("user_phone_not_like")>=0){		//判断手机号码与上次预约的是否一样,如果不一样
						var fhMSG_1=fhMSG.split("&");
						$(".choise_phone_1").text(fhMSG_1[1]);
						$(".choise_phone_2").text($("#member_phone_mvc").val());
						$("#show_close_id").css({"visibility":"visible"});
						$("#choise_main_phone").css({"display":"block"});
						$("#hidden_v").val("94");
						$("#close_main_window").css({"display":"none"});
						$("#sub_tj_mv").attr("disabled",false);
					}
				})
			}
		})*/
		$("#sub_tj_pho").click(function(){		//普通行业预约店铺
										
			if(Check_Sub_name("member_name_company") && Check_Sub_mobile("member_phone_company")){
				
				$("#sub_tj_pho").attr("disabled",true);
				
				$.post("/0510AJAX.php?act=sub_tj_wed&tim=ispu&randid="+Math.random(),{member_phone_company:escape($("#member_phone_company").val()),member_name_company:escape($("#member_name_company").val()),Document_url:escape($("#Document_url").val()),member_companyID:escape($("#member_companyID").val()),member_cType:escape($("#member_cType").val()),yic:escape($(".yic").val()),isExp:escape($("#isExp").val())},function(fhMSG){
					var fhMSG = fhMSG.replace(/\r\n/gi, "");
					
					if(fhMSG.indexOf("already_order")>=0){	//如果已经预约过
						alert("您填写的手机号已经预约过，请关闭返回！");
						$("#sub_tj_pho").attr("disabled",false);
						location.reload();
					}
					if(fhMSG.indexOf("exceed_ten")>=0){	//如果半年内预约超过十次
						alert("您一天内已经预约超过十次，请关闭返回！");
						$("#sub_tj_pho").attr("disabled",false);
						location.reload();
					}
					if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
						show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
						$("#set_member_name").val($("#member_name_company").val());
						$("#set_member_phone").val($("#member_phone_company").val());
						$("#in_city").css({"visibility":"visible"});
						$("#sub_tj_pho").attr("disabled",false);
						Linktech();
					}
					if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
						show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
						$("#sub_tj_pho").attr("disabled",false);
						Linktech();
					}
					if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
						show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
						$("#over_phone").val($("#member_phone_company").val());
						$("#sub_tj_pho").attr("disabled",false);
						Have_pwd(fhMSG);
						Linktech();
					}
					if(fhMSG.indexOf("user_phone_not_like")>=0){		//判断手机号码与上次预约的是否一样,如果不一样
						var fhMSG_1=fhMSG.split("&");
						$(".choise_phone_1").text(fhMSG_1[1]);
						$(".choise_phone_2").text($("#member_phone_company").val());
						$("#show_close_id").css({"visibility":"visible"});
						$("#choise_main_phone").css({"display":"block"});
						$("#hidden_v").val("4");
						$("#close_main_window").css({"display":"none"});
						$("#sub_tj_pho").attr("disabled",false);
					}
				})
			}
		})
	
		$("#sub_lkl").click(function(){
			if(DataLength($("#sub_lkl_name").val()) <2){
				alert("请输入您的真实姓名！");	
				return false;
			}
			if(DataLength($("#sub_lkl_mobile").val()) != 11 || $("#sub_lkl_mobile").val().match(/[^\d]/) || $("#sub_lkl_mobile").val().substr(0,1) != 1){
				alert("请输入正确的手机号！");	
				return false;
			}
			$.post("/0510AJAX.php?act=sub_hotel&tim=nocp&randid="+Math.random(),{hotel_need_phone:escape($("#sub_lkl_mobile").val()),Document_url:escape($("#Document_url").val()),yic:escape($(".yic").val())},function(fhMSG){
					var fhMSG = fhMSG.replace(/\r\n/gi, "");
					//alert(fhMSG);
					if(fhMSG.indexOf("already_order")>=0){	//如果已经预约过
						alert("您填写的手机号已经预约过，请关闭返回！");
						return false;
					}
					if(fhMSG.indexOf("exceed_ten")>=0){	//如果半年内预约超过十次
						alert("您一天内已经预约超过十次，请关闭返回！");
						return false;
					}
					if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
						if($(".choise_phone_2").text()!=""){
							$("#order").css({"visibility":"visible"});
						}else{
							showDiv('order');
						}
						show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
						$("#set_member_name").val($("#sub_lkl_name").val());
						$("#set_member_phone").val($("#sub_lkl_mobile").val());
						$("#in_city").css({"visibility":"visible"});
					}
					if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
						if($(".choise_phone_2").text()!=""){
							$("#order").css({"visibility":"visible"});
						}else{
							showDiv('order');
						}
						show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
					}
					if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
						if($(".choise_phone_2").text()!=""){
							$("#order").css({"visibility":"visible"});
						}else{
							showDiv('order');
						}
						show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
						$("#over_phone").val($("#hotel_need_phone").val());
						Have_pwd(fhMSG);
					}
					if(fhMSG.indexOf("user_phone_not_like")>=0){		//判断手机号码与上次预约的是否一样,如果不一样
						showDiv('show_close_id');
						var fhMSG_1=fhMSG.split("&");
						$(".choise_phone_1").text(fhMSG_1[1]);
						$(".choise_phone_2").text($("#sub_lkl_mobile").val());
						//$("#show_close_id").css({"visibility":"visible"});
						$("#choise_main_phone").css({"display":"block"});
						$("#hidden_v").val("97");
						$("#close_main_window").css({"display":"none"});
					}																																																																																 			})
		})
		$("#sub_need_hotel").click(function(){		//婚宴酒店提交需求
			if(Check_Sub_mobile("hotel_need_phone")){
				$("#sub_need_hotel").attr("disabled",true);
				$.post("/0510AJAX.php?act=sub_hotel&tim=nocp&randid="+Math.random(),{hotel_need_phone:escape($("#hotel_need_phone").val()),hotelNeed1:escape($("#hotelNeed1").val()),hotelNeed2:escape($("#hotelNeed2").val()),hotelNeed3:escape($("#hotelNeed3").val()),Document_url:escape($("#Document_url").val()),yic:escape($(".yic").val())},function(fhMSG){
					var fhMSG = fhMSG.replace(/\r\n/gi, "");
					//alert(fhMSG);
					if(fhMSG.indexOf("already_order")>=0){	//如果已经预约过
						alert("您填写的手机号已经预约过，请关闭返回！");
						$("#sub_need_hotel").attr("disabled",false);
						location.reload();
					}
					if(fhMSG.indexOf("exceed_ten")>=0){	//如果半年内预约超过十次
						alert("您一天内已经预约超过十次，请关闭返回！");
						$("#sub_need_hotel").attr("disabled",false);
						location.reload();
					}
					if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
						show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
						$("#set_member_phone").val($("#hotel_need_phone").val());
						$("#in_city").css({"visibility":"visible"});
						$("#sub_need_hotel").attr("disabled",false);
						Linktech();
					}
					if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
						show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
						$("#sub_need_hotel").attr("disabled",false);
						Linktech();
					}
					if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
						show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
						$("#over_phone").val($("#hotel_need_phone").val());
						$("#sub_need_hotel").attr("disabled",false);
						Have_pwd(fhMSG);
						Linktech();
					}
					if(fhMSG.indexOf("user_phone_not_like")>=0){		//判断手机号码与上次预约的是否一样,如果不一样
						$("#sub_need_hotel").attr("disabled",false);
						var fhMSG_1=fhMSG.split("&");
						$(".choise_phone_1").text(fhMSG_1[1]);
						$(".choise_phone_2").text($("#hotel_need_phone").val());
						$("#show_close_id").css({"visibility":"visible"});
						$("#choise_main_phone").css({"display":"block"});
						$("#hidden_v").val("98");
						$("#close_main_window").css({"display":"none"});
					}
				})
			}
		})
		$("#sub_need_hotel1").click(function(){		//婚宴酒店提交需求
			if(Check_Sub_mobile("hotel_need_phone1")){
				$("#sub_need_hotel1").attr("disabled",true);
				$.post("/0510AJAX.php?act=sub_hotel&tim=nocp&randid="+Math.random(),{hotel_need_phone:escape($("#hotel_need_phone1").val()),hotelNeed1:escape($("#hotelNeed1").val()),hotelNeed2:escape($("#hotelNeed2").val()),hotelNeed3:escape($("#hotelNeed3").val()),Document_url:escape($("#Document_url").val()),yic:escape($(".yic").val())},function(fhMSG){
					var fhMSG = fhMSG.replace(/\r\n/gi, "");
					//alert(fhMSG);
					if(fhMSG.indexOf("already_order")>=0){	//如果已经预约过
						alert("您填写的手机号已经预约过，请关闭返回！");
						$("#sub_need_hotel1").attr("disabled",false);
						location.reload();
					}
					if(fhMSG.indexOf("exceed_ten")>=0){	//如果半年内预约超过十次
						alert("您一天内已经预约超过十次，请关闭返回！");
						$("#sub_need_hotel1").attr("disabled",false);
						location.reload();
					}
					if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
						show_hide('easyOrder_Newmem','easyOrder_Newmem_main','');
						$("#set_member_phone").val($("#hotel_need_phone1").val());
						$("#in_city").css({"visibility":"visible"});
						$("#sub_need_hotel1").attr("disabled",false);
						Linktech();
						alert("恭喜你已预约成功!");
						$("#calendarMsg").hide();
					}
					if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
						show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
						$("#sub_need_hotel1").attr("disabled",false);
						Linktech();
					}
					if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
						show_hide('easyOrder_Oldmem','easyOrder_Oldmem_main','');
						$("#over_phone").val($("#hotel_need_phone1").val());
						$("#sub_need_hotel1").attr("disabled",false);
						Have_pwd(fhMSG);
						Linktech();
						alert("恭喜你已预约成功!");
						$("#calendarMsg").hide();
					}
					if(fhMSG.indexOf("user_phone_not_like")>=0){		//判断手机号码与上次预约的是否一样,如果不一样
						$("#sub_need_hotel1").attr("disabled",false);
						var fhMSG_1=fhMSG.split("&");
						$(".choise_phone_1").text(fhMSG_1[1]);
						$(".choise_phone_2").text($("#hotel_need_phone1").val());
						$("#show_close_id").css({"visibility":"visible"});
						$("#choise_main_phone").css({"display":"block"});
						$("#hidden_v").val("98");
						$("#close_main_window").css({"display":"none"});
						alert("恭喜你已预约成功!");
						$("#calendarMsg").hide();
						
					}
				})
			}
		})
		$(".choise_phone_1,.choise_phone_2").click(function(){		//号码选择按钮点击的时候
			$hadd_v=$("#hidden_v").val();
			if($hadd_v=="99"){				//号码选择按钮点击的时候,婚礼需求提交
				$("#hotel_need_phone").val($(this).text());
				$(".yic").val("");
				$("#sub_tj_wed").click();
				$("#show_close_id").css({"visibility":"hidden"});
				$(".yic").val("ok");
			}else if($hadd_v=="98"){			//号码选择按钮点击的时候,婚宴需求提交
				$("#member_phone_hotel").val($(this).text());
				$(".yic").val("");
				$("#sub_need_hotel").click();
				$("#show_close_id").css({"visibility":"hidden"});
				$(".yic").val("ok");
			}else if($hadd_v=="97"){			//号码选择按钮点击的时候,婚宴需求提交
				$("#member_phone_hotel").val($(this).text());
				$(".yic").val("");
				$("#sub_lkl").click();
				$("#show_close_id").css({"visibility":"hidden"});
				$(".yic").val("ok");
			}else if($hadd_v=="96"){			//号码选择按钮点击的时候,婚宴需求提交
				$("#member_phone_hotel").val($(this).text());
				$(".yic").val("");
				$("#bottom_hotel_sub").click();
				$("#show_close_id").css({"visibility":"hidden"});
				$(".yic").val("ok");
			}else if($hadd_v=="1"){			//号码选择按钮点击的时候,婚宴店铺预约
				$("#member_phone_hotel").val($(this).text());
				$(".yic").val("");
				$("#sub_hotel").click();
				$("#show_close_id").css({"visibility":"hidden"});
				$(".yic").val("ok");
			}else if($hadd_v=="4"){			//号码选择按钮点击的时候,普通店铺预约
				$("#member_phone_company").val($(this).text());
				$(".yic").val("");
				$("#sub_tj_pho").click();
				$("#show_close_id").css({"visibility":"hidden"});
				$(".yic").val("ok");
			}else if($hadd_v=="5"){			//号码选择按钮点击的时候,普通行业预约
				$("#member_phone_pho").val($(this).text());
				$(".yic").val("");
				$("#sub_need_pho").click();
				$("#show_close_id").css({"visibility":"hidden"});
				$(".yic").val("ok");
			}else if($hadd_v=="8"){			//号码选择按钮点击的时候，婚车提交需求
				$("#member_phone_car").val($(this).text());
				$(".yic").val("");
				$("#sub_need_car").click();
				$("#show_close_id").css({"visibility":"hidden"});
				$(".yic").val("ok");
			}else if($hadd_v=="7"){			//号码选择按钮点击的时候,婚车预约
				$("#Ordercar_phone").val($(this).text());
				$(".yic").val("");
				$("#sub_car").click();
				$("#show_close_id").css({"visibility":"hidden"});
				$(".yic").val("ok");
			}else if($hadd_v=="94"){			//号码选择按钮点击的时候,电影预约
				$("#member_phone_mvc").val($(this).text());
				$(".yic").val("");
				$("#sub_tj_mv").click();
				$("#show_close_id").css({"visibility":"hidden"});
				$(".yic").val("ok");
			}else if($hadd_v=="93"){			//号码选择按钮点击的时候,电影预约
				$("#member_phone_mv").val($(this).text());
				$(".yic").val("");
				$("#sub_need_mv").click();
				$("#show_close_id").css({"visibility":"hidden"});
				$(".yic").val("ok");
			}else if($hadd_v=="10"){			//号码选择按钮点击的时候,喜糖预约
				$("#member_phone_candy").val($(this).text());
				$(".yic").val("");
				$("#sub_need_candy,#sub_need_candy1").click();
				$("#show_close_id").css({"visibility":"hidden"});
				$(".yic").val("ok");
			}else if($hadd_v=="11"){			//号码选择按钮点击的时候,喜糖感兴趣
				$("#member_phone_candy1").val($(this).text());
				$(".yic").val("");
				$("#sub_need_candy1").click();
				$("#show_close_id").css({"visibility":"hidden"});
				$(".yic").val("ok");
			}
			
		})
		$("#over_sub").click(function(){
			if(DataLength($("#over_pwd").val()) < 6){
				$(".err_over_pwd").text("请输入正确的密码");
				$(".err_pwd_alerd").css({"display":"inline"});
				return false;
			}else{
				$.post("/0510AJAX.php?act=over_sub&randid="+Math.random(),{member_phone:escape($("#over_phone").val()),member_pwd:escape($("#over_pwd").val())},function(fhMSG){
					var fhMSG = fhMSG.replace(/\r\n/gi, "");
					//alert(fhMSG);
					if(fhMSG.indexOf("login_success")>=0){	//如果登录成功
						show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
					}
					if(fhMSG.indexOf("login_error")>=0){	//如果登录失败
						$(".err_over_pwd").text("密码与手机号不匹配");
						$(".err_pwd_alerd").css({"display":"inline"});
					}
				})
			}
		})
		$("#sub_set_tj").click(function(){
			if(DataLength($("#set_pwd").val()) <6){
				$(".err_pwd_").css({"display":"block"});
				$istrue="";
			}else{
				$(".err_pwd_").css({"display":"none"});
				$istrue="i";
			}
			
			var reg=/^\w{3,}@\w+(\.\w+)+$/;
			if(!reg.test($("#set_email").val()) && $("#set_email").val()!=""){
				$(".err_email_").css({"display":"block"});
				$istrue="";
			}else{
				$(".err_email_").css({"display":"none"});
				$istrue+="o";
			}
			
			if((DataLength($("#set_member_name").val())<3 || DataLength($("#set_member_name").val())>10) && $("#set_member_name").val()!=""){
				$(".err_name_").css({"display":"block"});
				$istrue="";
			}else{
				$(".err_name_").css({"display":"none"});
				$istrue+="k";
			}
			if($istrue=="iok"){
				$.post("/0510AJAX.php?act=sub_set_tj&randid="+Math.random(),{member_phone:escape($("#set_member_phone").val()),member_pwd:escape($("#set_pwd").val()),member_name:escape($("#set_member_name").val()),member_sex:escape($("input[name=set_member_sex[]][checked]").val()),member_email:escape($("#set_email").val()),upType:escape($("#upType").val()),member_city:escape($("#in_city").val())},function(fhMSG){
					var fhMSG = fhMSG.replace(/\r\n/gi, "");
					//alert(fhMSG);
					if(fhMSG.indexOf("update_succ")>=0){		//会员信息更新成功
						show_hide('easyOrder_Succmem','easyOrder_Succmem_main','');
					}else{
						alert("由于网络原因，会员信息更新失败，请您稍后操作，或联系我们");
						location.reload();
					}
				});
			}
		})
		
		/*$(".over_close_window,#yes_sure").click(function(){
			location.reload();
		})*/
		$("#member_name_wed").blur(function(){
			Check_Sub_name("member_name_wed");
		})
		$("#member_phone_wed").blur(function(){
			Check_Sub_mobile("member_phone_wed");
		})
		$("#member_phone_hotel").blur(function(){
			Check_Sub_mobile("member_phone_hotel");
		})
        $("#member_phone_packs").blur(function(){
            Check_Sub_mobile("member_phone_packs");
        })
		$("#member_phone_car").blur(function(){
			Check_Sub_mobile("member_phone_car");
		})
		$("#member_name_pho").blur(function(){
			Check_Sub_name("member_name_pho");
		})
		$("#member_phone_pho").blur(function(){
			Check_Sub_mobile("member_phone_pho");
		})
		$("#member_name_mv").blur(function(){
			Check_Sub_name("member_name_mv");
		})
		$("#member_phone_mv").blur(function(){
			Check_Sub_mobile("member_phone_mv");
		})
		$("#member_phone_company").blur(function(){
			Check_Sub_mobile("member_phone_company");
		})
		$("#member_name_company").blur(function(){
			Check_Sub_name("member_name_company");
		})
		$("#member_phone_mvc").blur(function(){
			Check_Sub_mobile("member_phone_mvc");
		})
		$("#member_name_mvc").blur(function(){
			Check_Sub_name("member_name_mvc");
		})
		$("#member_name_candy").blur(function(){
			Check_Sub_name("member_name_candy");
		})
		$("#hotel_need_phone").blur(function(){
			Check_Sub_mobile("hotel_need_phone");
		})
		$("#hotel_need_phone1").blur(function(){
			Check_Sub_mobile("hotel_need_phone1");
		})
		$("#Ordercar_phone").blur(function(){
			Check_Sub_mobile("Ordercar_phone");
		})
		$("#set_pwd,#set_email,#set_member_name").focus(function(){
			$(this).css({"border":"solid 2px #FF5D7F"});
		})
		$("#set_pwd,#set_email,#set_member_name").blur(function(){
			$(this).css({"border":"solid 1px #CCCCCC"});
		})
		$("#over_pwd").blur(function(){
			if(DataLength($("#over_pwd").val()) < 6){
				$(".err_over_pwd").text("请输入正确的密码");
				$(".err_pwd_alerd").css({"display":"inline"});
				return false;
			}else{				
				$(".err_pwd_alerd").css({"display":"none"});
				$(".err_over_pwd").text("");
			}
		});
})
		function sub_youhui($phone,$id1,$id2){		//酒店小框预约
				
				if(DataLength($("#"+$phone+"").val()) != 11 || $("#"+$phone+"").val().match(/[^\d]/) || $("#"+$phone+"").val().substr(0,1) != 1){
					alert("请输入正确的手机号！");	
					return false;
				}
				$("#"+$phone+"").next("#sub_hotel_youhui").attr("disabled","disabled"); 
				$.post("/0510AJAX.php?act=sub_hotel&tim=iscp&randid="+Math.random(),{member_phone_hotel:escape($("#"+$phone+"").val()),member_hotelID:escape($("#member_hotelID").val()),Document_url:escape($("#Document_url").val()),member_hotelname:escape($("#member_hotelname").val())},function(fhMSG){
					var fhMSG = fhMSG.replace(/\r\n/gi, "");
					//alert(fhMSG);
					if(fhMSG.indexOf("already_order")>=0){	//如果已经预约过
						alert("您填写的手机号已经预约过，请关闭返回！");
					}
					if(fhMSG.indexOf("exceed_ten")>=0){	//如果半年内预约超过十次
						alert("您一天内已经预约超过十次，请关闭返回！");
					}
					if(fhMSG.indexOf("not_member")>=0){	//如果不是会员话
						$("#"+$id1+"").css({"display":"none"});
						$("#"+$id2+"").css({"display":"block"});
					}
					if(fhMSG.indexOf("is_login_member")>=0){		//如果是已经登录的会员
						$("#"+$id1+"").css({"display":"none"});
						$("#"+$id2+"").css({"display":"block"});
					}
					if(fhMSG.indexOf("no_login_member")>=0){		//如果是没有登录的会员
						$("#"+$id1+"").css({"display":"none"});
						$("#"+$id2+"").css({"display":"block"});
						Have_pwd(fhMSG);
					}																																																																									
			})
		}
	function Have_pwd(fhMSG){
		if(fhMSG.indexOf("no_login_member_nopwd")>=0){
			$("#honey_pwd").html('输入密码即可完成预约，如果您没有设置过密码，请点击<a href="http://www.591wed.com/new_findpwd.php?ui=set" target="_blank">设置密码</a>');
			$("#forg_pwd").html('<a href="http://www.591wed.com/new_findpwd.php?ui=set" target="_blank" class="forget_pwd_over">设置密码？</a>');
		}else if(fhMSG.indexOf("no_login_member_havepwd")>=0){
			$("#honey_pwd").html('您已经是591会员，输入密码即可完成预约，如果忘记密码，请点击<a href="http://www.591wed.com/new_findpwd.php" target="_blank">找回密码</a>');
			$("#forg_pwd").html('<a href="http://www.591wed.com/new_findpwd.php" target="_blank" class="forget_pwd_over">忘记密码？</a>');
		}	
	}
	function show_hide($showID1,$showID2,$Type){
		
		$(".main_top_title").css({"display":"none"});
		$("#"+$showID1+"").css({"display":"block"});
		$(".main_info_h_order").css({"display":"none"});
		$("#"+$showID2+"").css({"display":"block"});
		if($Type==2){
			$("#Type_cu").text("婚庆");
			$("#Type_cu_1").text("婚庆公司");
			$("#Type_cu_2").text("婚庆公司");
		}else if($Type==4){
			$("#Type_cu").text("摄影");
			$("#Type_cu_1").text("婚纱摄影店");
			$("#Type_cu_2").text("婚纱摄影店");
		}else if($Type==6){
			$("#Type_cu").text("婚戒");
			$("#Type_cu_1").text("珠宝首饰店");
			$("#Type_cu_2").text("珠宝首饰店");
		}else if($Type==5){
			$("#Type_cu").text("婚纱");
			$("#Type_cu_1").text("婚纱礼服店");
			$("#Type_cu_2").text("婚纱礼服店");
		}else if($Type==8){
			$(".libao").html('<p class="n_huode">这样您将无法获得：</p><p class="huode">591结婚网婚车优惠超低价格</p><p class="huode">591强有力的婚车订单保障服务</p><p class="huode">婚车顾问免费一对一贴心服务</p>');
			$("#end_tip").html('<p class="huode_">591结婚网婚车优惠超低价格</p><p class="huode_">591强有力的婚车订单保障服务</p><p class="huode_">婚车顾问免费一对一贴心服务</p>');
			$(".go_look").html('您还可以看看：<a href="/8/list_5_1.html" target="_blank" title="热门套餐">热门套餐</a><a href="/8/list_1_1.html" target="_blank" title="豪华轿车">豪华轿车</a><a href="/8/list_7_1.html" target="_blank" title="高端轿车">高端轿车</a><a href="/8/list_3_1.html" target="_blank" title="加长轿车">加长轿车</a>');
		}else if($Type==10){
			$(".libao").html('<p class="n_huode">这样您将无法获得：</p><p class="huode">591结婚网喜糖优惠超低价格</p><p class="huode">591强有力的喜糖订单保障服务</p><p class="huode">喜糖顾问免费一对一贴心服务</p>');
			$("#end_tip").html('<p class="huode_">591结婚网喜糖优惠超低价格</p><p class="huode_">591强有力的喜糖订单保障服务</p><p class="huode_">喜糖顾问免费一对一贴心服务</p>');
			$(".go_look").html('您还可以看看：<a href="/10/list_2.html" target="_blank" title="喜糖盒">喜糖盒</a><a href="/10/list_1.html" target="_blank" title="喜糖">喜糖</a>');
		}else if($Type==9){
			$(".libao").html('<p class="n_huode">这样您将无法获得：</p><p class="huode">591结婚网喜酒优惠超低价格</p><p class="huode">591强有力的喜酒订单保障服务</p><p class="huode">喜酒顾问免费一对一贴心服务</p>');
			$("#end_tip").html('<p class="huode_">591结婚网喜酒优惠超低价格</p><p class="huode_">591强有力的喜酒订单保障服务</p><p class="huode_">喜酒顾问免费一对一贴心服务</p>');
			$(".go_look").html('您还可以看看：<a href="/9/" target="_blank" title="喜酒">喜酒</a>');
		}
			
		if($Type==5 || $Type==2||$Type==4 || $Type==6 || $Type==99){
			$(".libao").html('<p class="n_huode">这样您将无法获得：</p><p class="huode">591超低优惠价格及订单大礼包</p><p class="huode">591强有力的订单保障服务</p><p class="huode">婚礼顾问一对一贴心服务</p>');
			$("#end_tip").html('<p class="huode_">591超低优惠价格及订单大礼包</p><p class="huode_">591强有力的订单保障服务</p><p class="huode_">婚礼顾问一对一贴心服务</p>');
			$(".go_look").html('您还可以看看：<a href="/4/" target="_blank" title="婚纱摄影">婚纱摄影</a><a href="/2/" target="_blank" title="婚庆公司">婚庆公司</a><a href="/6/" target="_blank" title="婚戒首饰">婚戒首饰</a><a href="/5/" target="_blank" title="婚纱礼服">婚纱礼服</a>');
		}
		if($Type==90){
			$("#help_hotel").html("<p>国内领先婚宴预定平台&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8年资深婚礼顾问团队</p><p>近百万对新人的共同选择&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;一对一免费推荐服务</p>");	
		}
		if($Type==80){
			$("#help_hotel").html("<p>国内领先婚宴预定平台&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8年资深婚礼顾问团队</p><p>近百万对新人的共同选择&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;一对一免费推荐服务</p>");	
			$("#hotel_in").html("找不到心仪的酒店？让婚礼顾问为您推荐！");
		}
		$("#Needs_wed_pho").val($Type);
		$("#Needs_wed_mv").val(23);
		$("#Needs_wed_candy").val(10);
	}
	function Check_Sub_mobile($id){
		if(DataLength($("#"+$id+"").val()) != 11 || $("#"+$id+"").val().match(/[^\d]/) || $("#"+$id+"").val().substr(0,1) != 1){
			$(".err_pho").css({"display":"block"});
			return false;
		}else{
			$(".err_pho").css({"display":"none"});
			return true;
		}
	}
	function Check_Sub_name($id){
		if(DataLength($("#"+$id+"").val()) <2){
			$(".err_name_").css({"display":"block"});
			return false;
		}else{
			$(".err_name_").css({"display":"none"});
			return true;
		}
	}
	function setvalue($id,$value1,$value2){
		//alert("a");
		if($value1!=2){
			$("#"+$id+"").val($value1);
		}
		$("#"+$id+"1").text($value2);
	}
	function getsel($id){
		//alert($("#carNeed2").val());
		if($id=='carNeed2'){
		$("#"+$id+"").val($("#"+$id).val());
		$("#"+$id+"1").text($("#"+$id).val()+'元');}
		else if($id=='carNeed3'){
		$("#"+$id+"").val($("#"+$id).val());
		$("#"+$id+"1").text($("#"+$id).val()+'辆');	
		}else if($id=='candyNeed1'){
		$("#"+$id+"").val($("#"+$id).val());
		$("#"+$id+"1").text($("#"+$id).val()+'份');	
		}
		
	}
	function getVal(){
		$hotelNeed1=$("#dirt_bar").val().split(",");
		$hotelNeed2=$("#price_bar").val().split(",");
		$hotelNeed3=$("#num_bar").val().split(",");
		
		$("#hotelNeed1").val($hotelNeed1[0]);
		$("#hotelNeed2").val($hotelNeed2[0]);
		$("#hotelNeed3").val($hotelNeed3[0]);
		
		$("#hotelNeed11").text($hotelNeed1[1]);
		$("#hotelNeed21").text($hotelNeed2[1]);
		$("#hotelNeed31").text($hotelNeed3[1]);
		
	}
	function getCookie(name){ 					//js获取cookie值
		var strCookie=document.cookie; 
		var arrCookie=strCookie.split("; "); 
		for(var i=0;i<arrCookie.length;i++){ 
		var arr=arrCookie[i].split("="); 
		if(arr[0]==name)return arr[1]; 
		}
	}
	function Linktech(){
		if(getCookie("site_city")=="1"){
			if(getCookie("tg_src")=="154"){
				document.getElementById("LinkT").src='http://service.linktech.cn/purchase_cpa.php?a_id='+getCookie("LTINFO")+'&m_id=591cd&mbr_id=591cd('+getCookie("Linktech_userID")+')&o_cd='+getCookie("Linktech_userID")+'&p_cd=591cd';
			}		
		}
	}
	function setHval($id){
		$("#member_hotelID").val($id);
		$("#member_hotelname").val($("#hideHN"+$id+"").val());
		
		$("#HNnme").text($("#hideHN"+$id+"").val());
		$("#HType").text($("#hideHT"+$id+"").val());
		$("#HFan").text($("#hideHF"+$id+"").val());
		$("#HAdd").text($("#hideHA"+$id+"").val());
		$("#HZui").text($("#hideHZ"+$id+"").val());
	}
	function DemoClick($name){
		if($("input[name="+$name+"1[]][checked]").val()==1){
		$("input[name="+$name+"1[]][checked]").click();}
		$("input[name="+$name+"2[]][checked]").click();
		//$("input[name="+$name+"3[]][checked]").click();
		
		var value="";
		var value1="";
		for (var i=0;i<document.getElementsByName($name+"3[]").length;i++ ){
			if(document.getElementsByName($name+"3[]")[i].checked)
			{ 
				if(value=="")
				{
					value=document.getElementsByName($name+"3[]")[i].value;
					value1=document.getElementsByName($name+"3[]")[i].value;
				}else
				{
					value=value+"码农"+document.getElementsByName($name+"3[]")[i].value;		//用"码农"字做分隔
					value1=value1+"，"+document.getElementsByName($name+"3[]")[i].value;
				}
			}
		}
		value=value.replace(/\s+/g,"");   
		$("#phoNeed3").val(value);
		if(DataLength(value1)>9){
			value1=value1.substr(0,9)+'等';
		}
		$("#phoNeed31").text(value1);
	}
	
	function CarClick($name){
		
		
		//$("input[name="+$name+"3[]][checked]").click();
		
		var value="";
		var value1="";
		//alert(document.getElementsByName($name+"1[]").length);
		for (var i=0;i<document.getElementsByName($name+"1[]").length;i++ ){
			
			if(document.getElementsByName($name+"1[]")[i].checked)
			{ 
				if(value=="")
				{
					value=document.getElementsByName($name+"1[]")[i].value;
					value1=document.getElementsByName($name+"1[]")[i].value;
				}else
				{
					value=value+"码农"+document.getElementsByName($name+"1[]")[i].value;		//用"码农"字做分隔
					value1=value1+"，"+document.getElementsByName($name+"1[]")[i].value;
				}
			}
		}
		//alert(value);
		value=value.replace(/\s+/g,"");   
		$("#carNeed1").val(value);
		if(DataLength(value1)>9){
			value1=value1.substr(0,9)+'等';
		}
		$("#carNeed11").text(value1);
	}
	function CandyClick($name){
		//alert(document.getElementsByName($name+"2[]").length);
		var value="";
		var value1="";
		for (var i=0;i<document.getElementsByName($name+"2[]").length;i++ ){
			if(document.getElementsByName($name+"2[]")[i].checked)
			{ 
				if(value=="")
				{
					value=document.getElementsByName($name+"2[]")[i].value;
					value1=document.getElementsByName($name+"2[]")[i].value;
					
				}else
				{
					value=value+"码农"+document.getElementsByName($name+"2[]")[i].value;		//用"码农"字做分隔
					value1=value1+"，"+document.getElementsByName($name+"2[]")[i].value;
				}
			}
		}
		value=value.replace(/\s+/g,"");   
		$("#candyNeed2").val(value);
		if(DataLength(value1)>9){
			value1=value1.substr(0,9)+'等';
		}
		$("#candyNeed21").text(value1);
		
		var value="";
		var value1="";
		for (var i=0;i<document.getElementsByName($name+"3[]").length;i++ ){
			if(document.getElementsByName($name+"3[]")[i].checked)
			{ 
				if(value=="")
				{
					value=document.getElementsByName($name+"3[]")[i].value;
					value1=document.getElementsByName($name+"3[]")[i].value;
					
				}else
				{
					value=value+"码农"+document.getElementsByName($name+"3[]")[i].value;		//用"码农"字做分隔
					value1=value1+"，"+document.getElementsByName($name+"3[]")[i].value;
				}
			}
		}
		value=value.replace(/\s+/g,"");   
		$("#candyNeed3").val(value);
		if(DataLength(value1)>9){
			value1=value1.substr(0,9)+'等';
		}
		$("#candyNeed31").text(value1);
	}
	
	function tradeSet(){
		
		var yy=$("#yy").val(); 
		var mm=$("#mm").val(); 
		var dd=$("#dd").val(); 
		var date=yy+'-'+mm+'-'+dd;
		var sdate;
		$ok="";
		if((yy=='' || mm=='' || dd=='') && $("#unknown").attr("checked")==false){
			alert('请选择您的婚期！');
			return false;
		}
		if($("#unknown").attr("checked")==true){
			var sdate='未定';
		}else{
			var sdate=yy+'年'+mm+'月'+dd+'日';
		}
		var needId='';
		var needName='';
		$("input[name='wed_mand[]']:checkbox").each(function (){ 
			if ($(this).attr("checked")) { 
				if(needId==''){
					needId=$(this).attr("id");
					needName=$(this).attr("value");
				}else{
					needId+=','+$(this).attr("id");
					needName+=','+$(this).attr("value");
				}
			}
		})
		if(needId=='')
		{
			alert('请选择您的需求!'+needId+'!');
			return false;
		}
			$("#needname").html(needName)
			$("#marryDate_wed_").html(sdate);
			$("#marryDate_wed").attr("value",date);
			$("#Needs_wed").attr("value",needId);
			showDiv('order');show_hide('Three_easy_wed','Three_easy_wed_main','99');
		
		
	}
	//返回数据长度
	function DataLength(fData)
	{
		var intLength=0
		for (var i=0;i<fData.length;i++)
		{
			if ((fData.charCodeAt(i) < 0) || (fData.charCodeAt(i) > 255))
				intLength=intLength+2;
			else
				intLength=intLength+1;
		}
		return intLength;
	}
	
	function set_CompanyValue(id,com_name){
		//alert("ssssss");
		$('#member_companyID').val(id);
	
		$('#CNAME').text(com_name);
		
	}