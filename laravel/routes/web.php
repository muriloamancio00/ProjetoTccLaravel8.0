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
    return view('welcome');

});


/*
    Route::get('/testfacade', function () {
        return App\Facades\UserPermissionsFacade::test();
    });
    Route::get('/testfacade1', function () {
        return UserPermissions::test();
    });
*/
    

Route::get('/dashboard', function () {
    return view('templates.main')->with('titulo', "");
})->middleware(['auth'])->name('index');

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
Route::get('/administradores', function () {
    return view('administradores.index');
})->middleware(['auth']);*/

Route::resource('administradores', '\App\Http\Controllers\AdministradorController')
->middleware(['auth']);

Route::resource('/feirantes', '\App\Http\Controllers\FeiranteController')
->middleware(['auth']);


require __DIR__.'/auth.php';


