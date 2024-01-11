<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AnnouncementController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PageController::class,'home'])->name('home');

Route::resource('categories', CategoryController::class);

Route::get('/announcements', [AnnouncementController::class, 'index'])->middleware('auth','verified')->name('announcements');

Route::get('/all/announcements', [PageController::class, 'all'])->name('all.announcements');

