<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $usr = user::orderBy('id')->get();

        return view('users.users', ['users'=>$usr]);
    }
}
