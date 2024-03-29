<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\RevisorController;
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

// ----------------- Annunci -----------------
//rotta per pagina creazione articolo (Livewire)
Route::get('/announcements', [AnnouncementController::class, 'index'])->middleware('auth','verified')->name('announcements');

Route::get('/all/announcements', [PageController::class, 'all'])->name('all.announcements');
Route::get('/announcement/{announcement}', [PageController::class, 'show'])->name('show.announcement');
Route::get('/my-announcements', [AnnouncementController::class, 'userAnn'])->name('user.announcements');

// ricerca annunci
Route::get('/ricerca/annuncio', [PageController::class, 'searchAnnouncements'])->name('announcements.search');

// sezione User
Route::get('/user/edit',[UserController::class, 'edit'])->name('user.edit');
Route::put('/user/update',[UserController::class, 'update'])->name('user.update');

// ------------------ Login/Register ------------------
//rotte per login con social
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/auth/github', [GithubController::class, 'redirectToGithub']);
Route::get('/auth/github/callback', [GithubController::class, 'handleGithubCallback']);

Route::get('/lavora-con-noi', [PageController::class, 'lavoraConNoi'])->name('lavoraConNoi');
Route::post('/lavora-con-noi/save', [RevisorController::class, 'lavoraSave'])->middleware('auth')->name('lavora.save');


// --------------- Zona revisore ------------
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
//Richiedi di diventare revisore
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
// Rendi utente revisore
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

// Accetta annuncio
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');
//Rifiuta annuncio
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');

// Cambio lingua
Route::get('/lingua/{lang}', [PageController::class, 'setLanguage'])->name('set_language_locale');
