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
	public function test(){
		$thh = Db::name('thh')->where('thh_id',195)->find();
		//\dump($thh);
		return Db::getLastSql();
	}
	public function insert(){
		$date['thh_name'] = 1;
		$date['thh_phone'] = 1;
		$date['thh_address'] = 1;
		$date['thh_yw'] = 1;
		$date['thh_ks'] = 1;
		$date['thh_cm'] = 1;
		$date['thh_is_cj'] = 1;
		$date['thh_is_jh'] = 1;
		$date['thh_is_dh'] = 1;
		return Db::name("thh")->insert($date);
	}
	public function update(){
		$date['thh_id']=195;
		$date['thh_name'] = 111;
		$date['thh_phone'] = 2;
		$date['thh_address'] = 2;
		$date['thh_yw'] = 2;
		$date['thh_ks'] = 2;
		$date['thh_cm'] = 2;
		$date['thh_is_cj'] = 2;
		$date['thh_is_jh'] = 2;
		$date['thh_is_dh'] = 2;
		return Db::name('thh')->update($date);
	}
}