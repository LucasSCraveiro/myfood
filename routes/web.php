<?php

use App\Http\Controllers\laraFoodPaginas;
use App\Http\Controllers\laraFoodUsuario;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [laraFoodPaginas::class, 'home']);

Route::get('/mostrar', [FuncionariosController::class, 'mostrar']);

Route::get('/login', [laraFoodPaginas::class, 'login']);

Route::get('/email', [laraFoodPaginas::class, 'email']);

Route::get('/celular', [laraFoodPaginas::class, 'celular']);

Route::get('/cadastro', [laraFoodUsuario::class, 'cadastrar']);

Route::get('/restaurante', [laraFoodPaginas::class, 'restaurantes']);

Route::get('/card', function () {
    return view('cardEstabelecimento');
});

Route::get('/padrao', function (){
    return view('padrao');
});

Route::get('/teste', function (){
    return view('telaInicial');
});