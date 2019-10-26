<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\ServiceModels\PackagesModel;

class PackagesController
{
    protected $packages;
    public function __construct()
    {
        $this->packages=new PackagesModel();
    }


    function get_all(){
        $res['package']=$this->packages->get_packages();
        return view('layout/packages')->with($res);
    }
    function home(){
        $res['package']=$this->packages->get_packages();
        return view('welcome')->with($res);
    }


}