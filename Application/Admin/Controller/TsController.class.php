<?php
namespace Admin\Controller;
use Think\Controller;
class TsController extends Controller {
    public function index(){
        return $this->show();
    }
}