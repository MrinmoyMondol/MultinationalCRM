<?php

use App\Http\Controllers\CountryManager\DashboardController;
use Illuminate\Support\Facades\Route;

// Country Manager routes group - only authenticated users
Route::middleware(['auth'])->group(function () {

    // Country Manager dashboard
    Route::get('/country/dashboard', [DashboardController::class, 'index'])->name('country-manager.dashboard');

});
