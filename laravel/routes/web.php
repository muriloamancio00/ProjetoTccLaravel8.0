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


Route::resource('feiras', '\App\Http\Controllers\FeiraController')
->middleware(['auth']);

Route::resource('produtos', '\App\Http\Controllers\ProdutoController')
->middleware(['auth']);


Route::resource('bancas', '\App\Http\Controllers\BancaController')
->middleware(['auth']);

require __DIR__.'/auth.php';


