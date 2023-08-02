<?php

use Illuminate\Support\Facades\Route;
//use App\Facades\UserPermissions;
use App\Http\Controllers\FeiraController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('feiras', 'FeiraController');

    Route::post('/feiras',[FeiraController::class,'store']);
    Route::get('/feiras/create',[FeiraController::class,'create']);
    Route::get('/feiras/',[FeiraController::class,'create']);

require __DIR__.'/auth.php';
/*
    Route::get('/main4', function () {
        return view('templates.principal')->with('titulo', "");
    })->middleware(['auth'])->name('index');

    Route::get('/main3', function () {
        return view('templates.generic')->with('titulo', "");
    })->middleware(['auth'])->name('index');

    Route::get('/main2', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
*/

/*
    Route::get('/testfacade', function () {
        return App\Facades\UserPermissionsFacade::test();
    });
    Route::get('/testfacade1', function () {
        return UserPermissions::test();
    });
*/
