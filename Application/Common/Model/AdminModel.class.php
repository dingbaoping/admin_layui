<?php
namespace Common\Model;
use Think\Model;
class AdminModel extends Model {
    private $_db='';
    public function __construct(){
        $this->_db=M("admin");
    }
    public function getAdminByUserName($user_name){
        $ret=$this->_db->where('user_name="'.$user_name.'"')->find();
        return $ret;
    }
}