<?php

use App\Http\Controllers\SuperAdmin\DashboardController;
use Illuminate\Support\Facades\Route;

// Super Admin routes group - only authenticated users
Route::middleware(['auth'])->group(function () {

    // Super Admin dashboard
    Route::get('/super-admin/dashboard', [DashboardController::class, 'index'])->name('super-admin.dashboard');

});
