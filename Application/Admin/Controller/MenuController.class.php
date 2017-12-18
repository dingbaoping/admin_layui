<?php
namespace Admin\Controller;
use Think\Controller;
class MenuController extends Controller {

    public function index(){
    	if(IS_AJAX){
    		$menus=D('Menu')->getMenus();
    		$total=D('Menu')->getTotal();
	    	// $this->ajaxReturn([
	    	// 'code' => 0,
	    	// 	'msg'=>'',
	    	// 	'count' => count($total),
	    	// 	'data' => $menus,
	    	// 	]);
	    	echo json_encode([
	    		'code' => 0,
	    		'msg'=>'',
	    		'count' => count($total),
	    		'data' => $menus,
	    		]);
	    }
	    else{
	    	return $this->display();
	    }
    }

    // public function index() {
    //     $data = array();
    //     if(isset($_REQUEST['type']) && in_array($_REQUEST['type'], array(0,1))) {
    //         $data['type'] = intval($_REQUEST['type']);
    //         $this->assign('type',$data['type']);
    //     }else{
    //         $this->assign('type',-100);
    //     }
    //     /**
    //      * 分页操作逻辑
    //      */
    //     $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
    //     $pageSize = $_REQUEST['pageSize'] ? $_REQUEST['pageSize'] : 3;
    //     $menus = D("Menu")->getMenus($data,$page,$pageSize);
    //     $menusCount = D("Menu")->getMenusCount($data);

    //     $res = new \Think\Page($menusCount, $pageSize);
    //     $pageRes = $res->show();
    //     $this->assign('pageRes', $pageRes);
    //     $this->assign('menus',$menus);
    // 	$this->display();
    // }

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