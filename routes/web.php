<?php

use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index'])->name('site.home');
Route::get('/portifolio/{id}', [SiteController::class, 'portfolio'])->name('site.portfolio');
