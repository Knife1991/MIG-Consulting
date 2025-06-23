<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, "homepage"])->name('welcome');
Route::get('chisiamo', [PublicController::class, 'chiSiamo'])->name('chiSiamo');

// Formazione Operativa
Route::get('formazioneOperativa', [PublicController::class, 'formazioneOperativa'])->name('formazioneOperativa');
Route::get('analisiprocessi', [PublicController::class, 'analisiProcessi'])->name('analisiProcessi');
Route::get('performanceKPI', [PublicController::class, 'performance'])->name('performance');
Route::get('projectmanagement', [PublicController::class, 'project'])->name('project');
Route::get('leanSixSigma', [PublicController::class, 'leanSixSigma'])->name('leanSixSigma');
Route::get('tempiEmetodi', [PublicController::class, 'tempiEmetodi'])->name('tempiEmetodi');
Route::get('statisticaSPC', [PublicController::class, 'statisticaSPC'])->name('statisticaSPC');
Route::get('metodologiaSMED', [PublicController::class, 'metodologiaSMED'])->name('metodologiaSMED');
Route::get('OEE', [PublicController::class, 'OEE'])->name('OEE');
Route::get('contabilitaIndustriale', [PublicController::class, 'contabilitaIndustriale'])->name('contabilitaIndustriale');
Route::get('DoE', [PublicController::class, 'DoE'])->name('DoE');


// Formazione di Ruolo
Route::get('formazioneRuolo', [PublicController::class, 'formazioneRuolo'])->name('formazioneRuolo');
Route::get('formazioneLeader', [PublicController::class, 'formazioneLeader'])->name('formazioneLeader');

// Consulenza Aziendale
Route::get('consulenza-aziendale', [PublicController::class, 'consulenza'])->name('consulenza-aziendale');

// Contatti
Route::get('contatti', [PublicController::class, 'contatti'])->name('contatti');
Route::post('contatti/submit', [PublicController::class, 'submit'])->name('contact.submit');


// Blog
Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog', [PostController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/{slug}', [PostController::class, 'show'])->name('blog.show');
Route::get('/dashboard/posts', [PostController::class, 'dashboard'])->name('posts.dashboard')->middleware('auth');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit')->middleware('auth');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update')->middleware('auth');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy')->middleware('auth');
Route::feeds();


// Fortify
Route::get('/login', function () {
    return view('auth.login');
})->name('login');


// Privacy
Route::get('privacy', [PublicController::class, 'privacy'])->name('privacy');