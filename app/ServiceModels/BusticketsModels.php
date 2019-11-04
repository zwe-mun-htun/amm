<?php


namespace App\ServiceModels;


use App\Models\BusTickets;

class BusticketsModels
{
 function get_tickets(){
     $data=bustickets::where('status',1)->get()->toArray();
     return $data;
 }
}