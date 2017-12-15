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
      <a><cite>首页</cite></a>
    </div>
    <div style="padding: 15px;">
      <h3>欢迎 <?php echo ($_SESSION['admin_user']['user_name']); ?> 来到后台登录页！</h3>
     <!--  <table class="layui-table" lay-skin="line" id="demo" lay-filter="test"></table> -->
    </div>
  </div>
  

  <!-- 底部 -->
 <!--    <div class="layui-footer">
    <!-- 底部固定区域 -->
    © layui.com - 底部固定区域
  </div> -->
</div>
<script type="text/javascript" src="/php/newscms/Public/layui-v2.2.45/layui.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;  
});
layui.use('table', function(){
  var table = layui.table;
  
  //第一个实例
  // table.render({
  //   elem: '#demo',
  //   height: 315,
  //   url: '/demo/table/user/', //数据接口
  //   page: true, //开启分页
  //   cols: [[ //表头
  //     {field: 'id', title: 'ID', width:80, sort: true, fixed: 'left'},
  //     {field: 'username', title: '用户名', width:80},
  //     {field: 'sex', title: '性别', width:80, sort: true},
  //     {field: 'city', title: '城市', width:80},
  //     {field: 'sign', title: '签名', width: 177},
  //     {field: 'experience', title: '积分', width: 80, sort: true},
  //     {field: 'score', title: '评分', width: 80, sort: true},
  //     {field: 'classify', title: '职业', width: 80},
  //     {field: 'wealth', title: '财富', width: 135, sort: true},
  //   ]]
  // });
  
});
</script>
</body>
</html>