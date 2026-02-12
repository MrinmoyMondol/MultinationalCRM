<?php

use App\Http\Controllers\BranchManager\DashboardController;
use Illuminate\Support\Facades\Route;

// Branch Manager routes group - only authenticated users
Route::middleware(['auth'])->group(function () {

    // Branch Manager dashboard
    Route::get('/branch/dashboard', [DashboardController::class, 'index'])->name('branch-manager.dashboard');

});
