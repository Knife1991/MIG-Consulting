<?php

use Illuminate\Support\Facades\Route;
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


// Formazione di Ruolo
Route::get('formazioneRuolo', [PublicController::class, 'formazioneRuolo'])->name('formazioneRuolo');
