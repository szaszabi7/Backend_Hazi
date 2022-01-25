<?php

use App\Http\Controllers\HomeworkController;
use App\Models\Homework;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ HomeworkController::class, 'index' ])->name('home');

Route::resource('/homeworks', HomeworkController::class);