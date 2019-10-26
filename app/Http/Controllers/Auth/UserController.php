<?php


namespace App\Http\Controllers\Auth;


class UserController
{

    public function __construct(){
        $this->user=New UserModel();
    }

}