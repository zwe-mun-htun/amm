<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $table="packages";
    protected $fillable=['id','title','description', 'route', 'amount','image','start_date','end_date','services','status','company_id','short_title','rating','last_route','duration'];

}