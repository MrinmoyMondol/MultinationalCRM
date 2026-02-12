<?php

use App\Http\Controllers\Staff\DashboardController;
use Illuminate\Support\Facades\Route;

// Staff routes group - only authenticated users
Route::middleware(['auth'])->group(function () {

    // Staff dashboard
    Route::get('/staff/dashboard', [DashboardController::class, 'index'])->name('staff.dashboard');

});
