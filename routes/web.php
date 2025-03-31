<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ArmyCorpController;
use App\Http\Controllers\QuarterController;
use App\Http\Controllers\CompanyController;

Route::get('/cuerpo-ejercito/create', [ArmyCorpController::class, 'create'])->name('cuerpo.create');
Route::post('/cuerpo-ejercito/store', [ArmyCorpController::class, 'store'])->name('cuerpo.store');


Route::get('/cuartel/create', [QuarterController::class, 'create'])->name('cuartel.create');
Route::post('/cuartel/store', [QuarterController::class, 'store'])->name('cuartel.store');


Route::get('/compania/create', [CompanyController::class, 'create'])->name('compania.create');
Route::post('/compania/store', [CompanyController::class, 'store'])->name('compania.store');
