<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

Route::get('/notes', [NotesController::class, 'index'])->name('notes.index');
Route::post('/notes', [NotesController::class, 'store'])->name('notes.store');
Route::post('/notes/{id}/{status}', [NotesController::class, 'updateStatus'])->name('notes.updateStatus');
Route::get('/notes/complaintsOffers', [NotesController::class, 'complaintsOffers'])->name('notes.complaintsOffers');
