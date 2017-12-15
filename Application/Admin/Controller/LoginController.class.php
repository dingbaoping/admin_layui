<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
    public function index(){
        if(session('admin_user')){
            $this->redirect('/php/newscms/index.php?m=admin&c=index');
        }
        return $this->display();
    }

    public function check(){
    	$user_name=$_POST['user_name'];
    	$paw=$_POST['paw'];
    	if(!trim($user_name)){
    		return show(0,'用户名不能为空！');
    	}
    	if(!trim($paw)){
    		return show(0,'密码不能为空！');
    	}
    	$ret=D('Admin')->getAdminByUserName($user_name);

        if(!$ret){
            return show(0,'该用户不存在！');
        }
         if(md5($ret['paw']) != getMd5Paw($paw)){
            return show(0,'密码错误！');
        }

        session('admin_user',$ret);

        return show(1,'登录成功！');
    }

    public function loginout(){
        session('admin_user',null);
        $this->redirect('/php/newscms/index.php?m=admin&c=login');
    }
}