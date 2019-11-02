<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ServiceModels\HotelsModel;


class HotelsController
{
    protected $hotels;
    public function __construct()
    {
        $this->hotels=new HotelsModel();
    }
    function get_all(){
        $res['hotel']=$this->hotels->get_hotels();
        return view('layout/hotels')->with($res);
    }
}