<?php
namespace app\controller;

use app\BaseController;
use think\facade\View;
return View::fetch();
class Index extends BaseController
{
    public function index()
    {
		 // 不带任何参数 自动定位当前操作的模板文件
		        return View::fetch();
	}

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
		
	public function config(){
		
	}
}
