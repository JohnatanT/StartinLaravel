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

    public function create()
    {
        return view('user.create');
    }

    public function post(Request $request)
    {
        //VALIDAÇÃO
        $this->validate($request, [
            //Nome do campo  => Regras
            'name' => ['required'],
            'email' => ['required','email'],
            'password' => ['required','confirmed']
        ]);

        
        //var_dump($request->all()); //Retorna todos os dados recebidos
        //var_dump($request->input('email')); //Retorna os dados de um campo especifico
        //var_dump($request->only(['name','email'])); //Retorna os dados de alguns campos escolhidos
        var_dump($request->except(['_token'])); //Retorna todos os dados menos os escolhidos na função
    }

}
