<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, "homepage"])->name('welcome');
Route::get('chisiamo', [PublicController::class, 'chiSiamo'])->name('chiSiamo');
Route::get('formazioneOperativa', [PublicController::class, 'formazioneOperativa'])->name('formazioneOperativa');
Route::get('formazioneRuolo', [PublicController::class, 'formazioneRuolo'])->name('formazioneRuolo');
