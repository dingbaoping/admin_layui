<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<style type="text/css">
		.login{
			width: 360px;
			background: #f5f5f5;
			padding: 20px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 10%;
			text-align: center;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 18px;
		}
		input{
			font-size: 18px;
		}
	</style>
</head>
<body>
	<div class="login">
		<form action="" method="post">
			<h3>请登录</h3>
			<p>用户名：<input type="text" name="user_name"></p>
			<p>密&emsp;码：<input type="password" name="paw"></p>
			<p><input type="button" value="提交" onclick="login.check()"></p>
		</form>
	</div>

	<script type="text/javascript" src="/php/newscms/Public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="/php/newscms/Public/js/dialog/layer.js"></script>
	<script type="text/javascript" src="/php/newscms/Public/js/dialog.js"></script>
	<script type="text/javascript" src="/php/newscms/Public/js/admin/login.js"></script>
</body>
</html>