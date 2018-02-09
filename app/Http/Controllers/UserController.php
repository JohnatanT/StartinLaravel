<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('user.welcome');
    }

    public function list()
    {
        return view('user.list');
    }


    public function show($id)
    {
        return view('user.show',compact('id'));
    }

    
}
