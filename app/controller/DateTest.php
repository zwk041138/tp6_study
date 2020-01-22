<?php
namespace app\controller;
use app\BaseController;
use think\facade\Db;
use app\model\Thh;
class DateTest{
	public function index(){
		$user = Db::table('lb_thh')->select();
		return \json($user);
	}
	public function getThh(){
		$thh = Thh::select();
		return \json($thh);
	}
}