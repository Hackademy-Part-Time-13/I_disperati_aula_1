<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\GoogleController;
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

//rotta per pagina creazione articolo (Livewire)
Route::get('/announcements', [AnnouncementController::class, 'index'])->middleware('auth','verified')->name('announcements');

Route::get('/all/announcements', [PageController::class, 'all'])->name('all.announcements');
Route::get('/announcement/{announcement}', [PageController::class, 'show'])->name('show.announcement');

//rotte per login con social
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/auth/github', [GithubController::class, 'redirectToGithub']);
Route::get('/auth/github/callback', [GithubController::class, 'handleGithubCallback']);