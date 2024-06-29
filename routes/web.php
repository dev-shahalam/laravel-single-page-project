<?php


use App\Http\Controllers\appController;
use Illuminate\Support\Facades\Route;

Route::get('/',[appController::class,'index']);
