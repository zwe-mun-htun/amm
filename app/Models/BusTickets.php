<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class BusTickets extends Model
{
 protected $table="bustickets";
 protected $fillable=['id','title','description','amount','type','day','night','keyword','dep_time','arrival_time','company_id','status'];
}