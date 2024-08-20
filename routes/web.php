<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, "homepage"])->name('welcome');
Route::get('chisiamo', [PublicController::class, 'chiSiamo'])->name('chiSiamo');
