<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TourDetailController;
use App\Http\Controllers\TourListController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class,'index']);
Route::get('/tours',[TourListController::class,'index']);
Route::get('/tour/detail/{id}',[TourDetailController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);