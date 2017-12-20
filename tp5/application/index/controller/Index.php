<?php
namespace app\index\controller;

use think\Config;
use think\Controller;
use think\View;

class Index extends Controller
{
    public function index()
    {
         return  $this->fetch('index');

    }



    public function _empty() {
        return $this->view->fetch('common/error');
    }
}
