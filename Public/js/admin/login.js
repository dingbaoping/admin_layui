/*
*前端登录业务
*/
var login={
	check:function(){
		//获取登录页面中的用户名或密码
		var user_name=$("input[name='user_name']").val();
		var paw=$("input[name='paw']").val();
		if(!user_name){
			dialog.error('用户名不能为空！');
		}
		if(!paw){
			dialog.error('密码不能为空！');
		}
		//执行异步请求  $.post
		$.ajax({
		   type: "POST",
		   dataType:"json",
		   url: "/php/newscms/index.php?m=admin&c=login&a=check",
		   data: {
		   	user_name:user_name,
		   	paw:paw
		   },
		   success: function(msg){
		     if(msg.status==0){
		     	return dialog.error(msg.message);
		     }

		     if(msg.status==1){
		     	return dialog.success(msg.message,'/php/newscms/index.php?m=admin&c=index');
		     }

		   }
		});

	}
}