<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesControllre;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitiesControllre::class);
Route::resource('about', AboutController::class);
Route::get('training', [AboutController::class, 'training'])->name('training');



