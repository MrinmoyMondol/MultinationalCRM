<?php

use App\Http\Controllers\ProfileController; // Import ProfileController for user profile operations
use Illuminate\Support\Facades\Route; // Import Route facade for route registration

// Redirect home route to login page
Route::get('/', function () {
     return view('auth.login');
});

// // Dashboard route accessible to authenticated and verified users
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// // Protected routes for authenticated users only
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); // Edit profile page
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); // Update profile data
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); // Delete profile
// });

require __DIR__.'/auth.php'; // Authentication routes (login, register, password reset, etc.)
require __DIR__.'/super_admin/super_admin.php'; // Super Admin role routes
require __DIR__.'/branch_manager/branch_manager.php'; // Branch Manager role routes
require __DIR__.'/country_manager/country_manager.php'; // Country Manager role routes
require __DIR__.'/customer/customer.php'; // Customer role routes
require __DIR__.'/staff/staff.php'; // Staff role routes