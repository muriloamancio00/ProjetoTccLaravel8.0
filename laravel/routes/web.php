<?php

use Illuminate\Support\Facades\Route;
use App\Facades\FeirantePermissions;
use App\Http\Controllers\FeiraController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('feiras', 'FeiraController');

    Route::post('/feiras',[FeiraController::class,'store']);
    Route::get('/feiras/create',[FeiraController::class,'create']);
    Route::get('/feiras/',[FeiraController::class,'create']);
Route::get('horarios/{id}/edit', 'HorarioController@edit')->name('horarios.edit');
Route::get('horarios/{id}/destroy', 'HorarioController@edit')->name('horarios.destroy');

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


    Route::get('/testfacade', function () {
        return App\Facades\FeirantePermissionsFacade::test();
    });
    Route::get('/testfacade1', function () {
        return FeirantePermissions::test();
    });

