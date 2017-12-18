<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>后台</title>
  <link rel="stylesheet" href="/php/newscms/Public/layui-v2.2.45/css/layui.css">
  <style type="text/css">
    .layui-breadcrumb{
      background: #f2f2f2;
     line-height: 3;
     padding-left: 15px;
    }
  </style>
</head>
<body class="layui-layout-body">

<div class="layui-layout layui-layout-admin">

  <!-- 头部 -->
  <div class="layui-header">
    <div class="layui-logo">新闻CMS</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <!-- <ul class="layui-nav layui-layout-left">
  <li class="layui-nav-item"><a href="">控制台</a></li>
  <li class="layui-nav-item"><a href="">商品管理</a></li>
  <li class="layui-nav-item"><a href="">用户</a></li>
  <li class="layui-nav-item">
    <a href="javascript:;">其它系统</a>
    <dl class="layui-nav-child">
      <dd><a href="">邮件管理</a></dd>
      <dd><a href="">消息管理</a></dd>
      <dd><a href="">授权管理</a></dd>
    </dl>
  </li>
</ul> -->

    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item">
        <a href="javascript:;">
          <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
          <?php echo ($_SESSION['admin_user']['user_name']); ?>
        </a>
        <dl class="layui-nav-child">
          <dd><a href="">基本资料</a></dd>
          <dd><a href="">安全设置</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="/php/newscms/index.php?m=admin&c=login&a=loginout">退了</a></li>
    </ul>
  </div>
  <!-- 菜单 -->
  <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item"><a href="/php/newscms/index.php?m=admin&c=index">首页</a></li>
        <li class="layui-nav-item layui-nav-itemed">
          <a class="" href="javascript:;">菜单权限</a>
          <dl class="layui-nav-child">
            <dd><a href="/php/newscms/index.php?m=admin&c=menu">菜单列表</a></dd>
            <dd><a href="javascript:;">列表二</a></dd>
            <dd><a href="javascript:;">列表三</a></dd>
            <dd><a href="">超链接</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">解决方案</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">列表一</a></dd>
            <dd><a href="javascript:;">列表二</a></dd>
            <dd><a href="">超链接</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item"><a href="">云市场</a></li>
        <li class="layui-nav-item"><a href="">发布商品</a></li>
      </ul>
    </div>
  </div>
  
  <div class="layui-body">
    <!-- 内容主体区域 -->
    <div class="layui-breadcrumb">
      <a href="/php/newscms/index.php?m=admin&c=index">首页</a>
      <a href="/php/newscms/index.php?m=admin&c=menu">菜单权限</a>
      <a href="/php/newscms/index.php?m=admin&c=menu">菜单列表</a>
      <a><cite>添加</cite></a>
    </div>
    <div style="padding: 15px;">

   <form class="layui-form" action="">
  <div class="layui-form-item">
    <label class="layui-form-label">输入框</label>
    <div class="layui-input-block">
      <input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">密码框</label>
    <div class="layui-input-inline">
      <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">辅助文字</div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">选择框</label>
    <div class="layui-input-block">
      <select name="city" lay-verify="required">
        <option value=""></option>
        <option value="0">北京</option>
        <option value="1">上海</option>
        <option value="2">广州</option>
        <option value="3">深圳</option>
        <option value="4">杭州</option>
      </select>
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">复选框</label>
    <div class="layui-input-block">
      <input type="checkbox" name="like[write]" title="写作">
      <input type="checkbox" name="like[read]" title="阅读" checked>
      <input type="checkbox" name="like[dai]" title="发呆">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">开关</label>
    <div class="layui-input-block">
      <input type="checkbox" name="switch" lay-skin="switch">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">单选框</label>
    <div class="layui-input-block">
      <input type="radio" name="sex" value="男" title="男">
      <input type="radio" name="sex" value="女" title="女" checked>
    </div>
  </div>
  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">文本域</label>
    <div class="layui-input-block">
      <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>
</div>
<script type="text/javascript" src="/php/newscms/Public/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="/php/newscms/Public/js/dialog/layer.js"></script>
  <script type="text/javascript" src="/php/newscms/Public/js/dialog.js"></script>
<script type="text/javascript" src="/php/newscms/Public/layui-v2.2.45/layui.js"></script>
<script>
//JavaScript代码区域
// layui.use('element', function(){
//   var element = layui.element;  
// });
layui.use('form', function(){
  var form = layui.form;
  
  //监听提交
/*  form.on('submit(formDemo)', function(data){
    layer.msg(JSON.stringify(data.field));
    return false;
  });*/
});

var SCOPE={
  'save_url':'/php/newscms/admin.php?c=menu&a=add',
  'jump_url':'/php/newscms/admin.php?c=menu',
}
// form表单提交
$('.layui-btn').click(function() {
  var data=$('.layui-form').serializeArray();
  postData={};
  $(data).each(function() {
    postData[this.name]=this.value;
  });
  console.log(postData);
  url=SCOPE.save_url;
  $.ajax({
       type: "POST",
       dataType:"json",
       url: url,
       data: postData,
       success: function(msg){
         if(msg.status==0){
          return dialog.error(msg.message);
         }

         if(msg.status==1){
          return dialog.success(msg.message,save_url);
         }

       }
    });
})

</script>
</body>
</html>