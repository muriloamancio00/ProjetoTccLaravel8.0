<?php

use Illuminate\Support\Facades\Route;
//use App\Facades\UserPermissions;

Route::get('/', function () {
    return view('welcome');

});
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
