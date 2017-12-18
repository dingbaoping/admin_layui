<?php
namespace Common\Model;
use Think\Model;
class MenuModel extends Model {
    private $_db='';
    public function __construct(){
        $this->_db=M("menu");
    }
    public function insert($data=array()){
    	if(!$data || !is_array($data)){
    		return 0;
    	}
        $ret=$this->_db->add($data);
        return $ret;
    }

    public function getMenus($data,$page,$pageSize=10) {
        $data['status'] = array('neq',-1);
        $offset = ($page - 1) * $pageSize;
        // $list = $this->_db->where($data)->order('list_order desc,menu_id desc')->limit($offset,$pageSize)->select();
         $list = $this->_db->limit($pageSize)->select();
        return $list;
    }
     public function getTotal() {
         $total = $this->_db->select();
        return $total;
    }
}