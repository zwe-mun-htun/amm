<?php


namespace App\ServiceModels;


use App\Models\Packages;

class PackagesModel
{
    function get_packages(){
        $data=Packages::where('status',1)->orderBy('created_at','desc')->get()->toArray();
        return $data;
    }

}
