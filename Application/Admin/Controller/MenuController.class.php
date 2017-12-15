<?php
namespace Admin\Controller;
use Think\Controller;
class MenuController extends Controller {
    public function index(){
    	$ret=D('Menu')->getMenus();
    	// dump($ret);
        return $this->display();
    }

    public function add(){
    	if($_POST){
    		if(!$_POST['name'] || !isset($_POST['name'])){
    			return show(0,'菜单名不能为空！');
    		}
    		if(!$_POST['m'] || !isset($_POST['m'])){
    			return show(0,'模块名不能为空！');
    		}
    		if(!$_POST['c'] || !isset($_POST['c'])){
    			return show(0,'控制器不能为空！');
    		}
    		if(!$_POST['f'] || !isset($_POST['f'])){
    			return show(0,'方法名不能为空！');
    		}
    		$ret=D('Menu')->insert($_POST);
    		if($ret){
    			return show(1,'新增成功',$ret);
    		}else{
    			return show(0,'新增失败',$ret);
    		}

    		return ;
    	}
        return $this->display();
    }
}