<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>layui在线调试</title>
  <link rel="stylesheet" href="/php/newscms/Public/layui-v2.2.45/css/layui.css">
  <style>
   /* body{margin: 10px;}
    .demo-carousel{height: 200px; line-height: 200px; text-align: center;}*/
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
  <!-- 内容 -->
    <div class="layui-body">
    <div style="padding: 15px;">
<table class="layui-hide" id="test" lay-filter="demo"></table>
 

  <a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="detail">查看</a>
  <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
  <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>

 
<div class="layui-tab layui-tab-brief" lay-filter="demo">
  <ul class="layui-tab-title">
    <li class="layui-this">演示说明</li>
    <li>日期</li>
    <li>分页</li>
    <li>上传</li>
  </ul>
  <div class="layui-tab-content">
    <div class="layui-tab-item layui-show">
    
      <div class="layui-carousel" id="test1">
        <div carousel-item>
          <div><p class="layui-bg-green demo-carousel">在这里，你将以最直观的形式体验 layui！</p></div>
          <div><p class="layui-bg-red demo-carousel">在编辑器中可以执行 layui 相关的一切代码</p></div>
          <div><p class="layui-bg-blue demo-carousel">你也可以点击左侧导航针对性地试验我们提供的示例</p></div>
          <div><p class="layui-bg-orange demo-carousel">如果最左侧的导航的高度超出了你的屏幕</p></div>
          <div><p class="layui-bg-cyan demo-carousel">你可以将鼠标移入导航区域，然后滑动鼠标滚轮即可</p></div>
        </div>
      </div>
    </div>
    <div class="layui-tab-item">
      <div id="laydateDemo"></div>
    </div>
    <div class="layui-tab-item">
      <div id="pageDemo"></div>
    </div>
    <div class="layui-tab-item">
      <div class="layui-upload-drag" id="uploadDemo">
        <i class="layui-icon"></i>
        <p>点击上传，或将文件拖拽到此处</p>
      </div>
    </div>
    </div>
  </div>
</div>
</div>
</div>
<script type="text/javascript" src="/php/newscms/Public/layui-v2.2.45/layui.js"></script>
<script>
layui.config({
  version: '1512984638033' //为了更新 js 缓存，可忽略
});


layui.use(['laydate', 'laypage', 'layer', 'table', 'carousel', 'upload', 'element'], function(){
  var laydate = layui.laydate //日期
  ,laypage = layui.laypage //分页
  layer = layui.layer //弹层
  ,table = layui.table //表格
  ,carousel = layui.carousel //轮播
  ,upload = layui.upload //上传
  ,element = layui.element; //元素操作
  
  //向世界问个好
  layer.msg('Hello World');
  
  //监听Tab切换
  element.on('tab(demo)', function(data){
    layer.msg('切换了：'+ this.innerHTML);
    console.log(data);
  });
  
  //执行一个 table 实例
  table.render({
    elem: '#test',
    height: 332,
    url: '/demo/table/user/', //数据接口
    page: true, //开启分页
    cols: [[ //表头
      {field: 'id', title: 'ID', width:80, sort: true, fixed: 'left'},
      {field: 'username', title: '用户名', width:80},
      {field: 'sex', title: '性别', width:80, sort: true},
      {field: 'city', title: '城市', width:80},
      {field: 'sign', title: '签名', width: 170},
      {field: 'experience', title: '积分', width: 80, sort: true},
      {field: 'score', title: '评分', width: 80, sort: true},
      {field: 'classify', title: '职业', width: 80},
      {field: 'wealth', title: '财富', width: 135, sort: true},
      {fixed: 'right', width: 165, align:'center', toolbar: '#barDemo'},
    ]]
  });
  
  //监听工具条
  table.on('tool(demo)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"
    var data = obj.data //获得当前行数据
    ,layEvent = obj.event; //获得 lay-event 对应的值
    if(layEvent === 'detail'){
      layer.msg('查看操作');
    } else if(layEvent === 'del'){
      layer.confirm('真的删除行么', function(index){
        obj.del(); //删除对应行（tr）的DOM结构
        layer.close(index);
        //向服务端发送删除指令
      });
    } else if(layEvent === 'edit'){
      layer.msg('编辑操作');
    }
  });
  
  //执行一个轮播实例
  carousel.render({
    elem: '#test1'
    ,width: '100%' //设置容器宽度
    ,height: 200
    ,arrow: 'none' //不显示箭头
    ,anim: 'fade' //切换动画方式
  });
  
  //将日期直接嵌套在指定容器中
  var dateIns = laydate.render({
    elem: '#laydateDemo'
    ,position: 'static'
    ,calendar: true //是否开启公历重要节日
    ,mark: { //标记重要日子
      '0-10-14': '生日'
      ,'2017-11-11': '剁手'
      ,'2017-11-30': ''
    } 
    ,done: function(value, date, endDate){
      if(date.year == 2017 && date.month == 11 && date.date == 30){
        dateIns.hint('一不小心就月底了呢');
      }
    }
    ,change: function(value, date, endDate){
      layer.msg(value)
    }
  });
  
  //分页
  laypage.render({
    elem: 'pageDemo' //分页容器的id
    ,count: 100 //总页数
    ,skin: '#1E9FFF' //自定义选中色值
    //,skip: true //开启跳页
    ,jump: function(obj, first){
      if(!first){
        layer.msg('第'+ obj.curr +'页');
      }
    }
  });
  
  //上传
  upload.render({
    elem: '#uploadDemo'
    ,url: '' //上传接口
    ,done: function(res){
      console.log(res)
    }
  });
  
  //底部信息
  var footerTpl = lay('#footer')[0].innerHTML;
  lay('#footer')[0].innerHTML = layui.laytpl(footerTpl).render({});
});
</script>
</body>
</html>