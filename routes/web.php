<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/hosting-plans', [HomeController::class, 'plan'])->name('home.plans');
Route::get('/reseller-plans', [HomeController::class, 'reseller'])->name('home.reseller');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('home.contact');
Route::post('/savecontact', [HomeController::class, 'savecontact'])->name('home.savecontact');

Route::get('/domain', [DomainController::class, 'index'])->name('domain.index');
Route::get('/domain/register', [DomainController::class, 'create'])->name('domain.create');
Route::post('/domain/create', [DomainController::class, 'store'])->name('domain.store');

//Route::get('/dbs', [PlanController::class, 'index'])->name('plan.index');
