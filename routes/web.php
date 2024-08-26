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
Route::get('statisticaSPC', [PublicController::class, 'statisticaSPC'])->name('statisticaSPC');
Route::get('metodologiaSMED', [PublicController::class, 'metodologiaSMED'])->name('metodologiaSMED');
Route::get('OEE', [PublicController::class, 'OEE'])->name('OEE');
Route::get('contabilitaIndustriale', [PublicController::class, 'contabilitaIndustriale'])->name('contabilitaIndustriale');
Route::get('DoE', [PublicController::class, 'DoE'])->name('DoE');


// Formazione di Ruolo
Route::get('formazioneRuolo', [PublicController::class, 'formazioneRuolo'])->name('formazioneRuolo');
Route::get('formazioneLeader', [PublicController::class, 'formazioneLeader'])->name('formazioneLeader');
