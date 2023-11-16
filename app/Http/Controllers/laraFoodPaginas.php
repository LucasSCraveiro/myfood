<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laraFoodPaginas extends Controller
{
    public function home()
    {
        return view('telaInicial');
    }

    public function login()
    {
        return view('login');
    }

    public function email()
    {
        return view('email');
    }

    public function celular()
    {
        return view('celular');
    }

    public function restaurantes()
    {
        return view('restauranteLista');
    }
}
