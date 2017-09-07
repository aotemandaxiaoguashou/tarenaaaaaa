$(function(){
   $.ajax({
		url:cityUrl,
		type:"get",
		data:'pid=1',
		dataType:"json",
		success:function(data){
			//添加option选项
			var info ="";
			for(var i=0;i<data.length;i++){
				info+="<option value='"+data[i].area_id+"'\>"+data[i].area_name+"</option>";
			}
			$("select").append(info);
		}
   });
   
   //为下拉添加change事件
   $("select").live("change",function(){
		var ob = $(this); //获取当前被下拉的select节点对象
		ob.nextAll("select").remove(); //清空当前下拉框后面所有的select节点
		//Ajax加载对应的子信息。
		$.ajax({
			url:cityUrl,
			type:"get",
			data:'pid='+ob.val(),
			dataType:"json",
			success:function(data){
				if(data.length<=0){
					return;
				}
				//添加option选项
				var info ="<select name='user_city[]'>";
					info+="<option value=''>--选择--</option>";
				for(var i=0;i<data.length;i++){
					info+="<option value='"+data[i].area_id+"'\>"+data[i].area_name+"</option>";
				}
				info+="</select>";
				ob.after(info); //将拼装好的信息添加到当前下拉框后面。
			}
   });
   });
});