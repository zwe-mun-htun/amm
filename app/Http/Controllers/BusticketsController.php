<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ServiceModels\BusticketsModels;

class BusticketsController
{
 protected $bustickets;
    public function __construct()
    {
        $this->bustickets=new BusticketsModels();
    }
    function get_all(){
        $res['bustickets']=$this->bustickets->get_tickets();
        return view('layout/bus_tickets')->with($res);
    }

}