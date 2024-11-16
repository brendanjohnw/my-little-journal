<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\JournalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'RedirectToHomePage']);

Route::get('/write', [HomePageController::class, 'DisplayHomePage'])->name('displayHomePage');

Route::get('/my-musings', [JournalController::class, 'DisplayMyMusingsPage'])->name('displayMyMusingsPage');

Route::post('/submit-musing', [JournalController::class, 'SubmitMusing'])->name('submitMusing');
