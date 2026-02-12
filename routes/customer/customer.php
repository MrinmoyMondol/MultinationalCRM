<?php

use App\Http\Controllers\Customer\DashboardController;
use Illuminate\Support\Facades\Route;

// Customer routes group - only authenticated users
Route::middleware(['auth'])->group(function () {

    // Customer dashboard
    Route::get('/customer/dashboard', [DashboardController::class, 'index'])->name('customer.dashboard');

});
