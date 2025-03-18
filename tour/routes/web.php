<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\TourDetailController;
use App\Http\Controllers\TourListController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class,'index']);
Route::get('/tours',[TourListController::class,'index']);
Route::get('/tour/detail/{id}',[TourDetailController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/questions',[QuestionsController::class,'index']);
Route::get('/partnership',[PartnershipController::class,'index']);
Route::get('/login',[LoginController::class,'index']);
Route::get('/register',[LoginController::class,'register']);