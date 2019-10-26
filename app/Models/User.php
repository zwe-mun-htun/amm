<?php


namespace App\Models;


class User
{
    protected $table="user";
    protected $fillable=['id','type','name', 'email', 'password'];

}