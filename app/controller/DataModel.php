<?php
namespace app\controller;


use app\model\Thh;

class DataModel
{
    public function index(){
        return Thh::select();
    }
    public function insert(){
        $thh = new Thh();
        $thh->thh_id = 

    }
}