<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/plans', [HomeController::class, 'plan'])->name('plans');
/* Route::get('/domain-registration', [HomeController::class, 'domainregistration'])->name('domainregistration');

Route::get('/domain-registration', function () {
    return view('domainregistration');
});
*/
Route::get('/domain', [DomainController::class, 'index'])->name('domain.index');


//Route::resource('domain', DomainController::class);

Route::get('/domain/create', [DomainController::class, 'create'])->name('domain.create');
Route::post('/domain/create', [DomainController::class, 'store'])->name('domain.store');
