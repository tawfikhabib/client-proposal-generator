<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProposalController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProposalController::class, 'create'])->name('proposal.create');
Route::post('/generate', [ProposalController::class, 'generate'])->name('proposal.generate');