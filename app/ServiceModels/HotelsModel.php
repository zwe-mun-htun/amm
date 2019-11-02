<?php


namespace App\ServiceModels;


use App\Models\Hotels;

class HotelsModel
{
    function get_hotels(){
        $data=Hotels::where('status',1)->orderBy('amount','desc')->get()->toArray();
        return $data;
    }
}