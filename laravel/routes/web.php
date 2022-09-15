<?php

use Illuminate\Support\Facades\Route;
use App\Facades\UserPermissions;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "<h1>Home</h1>";
});

Route::get('/testfacade', function () {
    return UserPermissions::test();
});
    
    

Route::get('/dashboard', function () {
    return view('templates.middleware')->with('titulo', "");
})->middleware(['auth'])->name('template');

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/administradores', '\App\Http\Controllers\AdministradorController')
->middleware(['auth']);

Route::resource('/feirantes', '\App\Http\Controllers\FeiranteController')
->middleware(['auth']);


require __DIR__.'/auth.php';
