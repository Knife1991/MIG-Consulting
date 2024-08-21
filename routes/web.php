<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, "homepage"])->name('welcome');
Route::get('chisiamo', [PublicController::class, 'chiSiamo'])->name('chiSiamo');

// Formazione Operativa
Route::get('formazioneOperativa', [PublicController::class, 'formazioneOperativa'])->name('formazioneOperativa');
Route::get('analisiprocessi', [PublicController::class, 'analisiProcessi'])->name('analisiProcessi');


// Formazione di Ruolo
Route::get('formazioneRuolo', [PublicController::class, 'formazioneRuolo'])->name('formazioneRuolo');
