<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class hotels extends Model
{
    protected $table="hotels";
    protected $fillable=['hotel_id','name','rating','short_description','includes','amount','location','discount','images','facilities','phone'];
}