<?php

use Illuminate\Support\Facades\Route;

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
    return App\Facades\UserPermissionsFacade::test();
    });
    

Route::get('/dashboard', function () {
    return view('templates.middleware')->with('titulo', "");
})->middleware(['auth'])->name('dashboard');

Route::resource('/administradores', '\App\Http\Controllers\AdministradorController')
->middleware(['auth']);


require __DIR__.'/auth.php';
