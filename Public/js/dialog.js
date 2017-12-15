var dialog={
	// 错误弹出框
	error:function(message){
		layer.open({
		  content: message,
		  icon:2,
		  title:'错误提示'
		}); 
	},

	// 成功弹出框
	success:function(message,url){
		layer.open({
		  content: message,
		  icon:1,
		  yes:function(){
		  	location.href=url;
		  }
		}); 
	},

	// 确认弹出框
	error:function(message,url){
		layer.open({
		  content: message,
		  icon:2,
		  title:'错误提示'
		}); 
	},
}