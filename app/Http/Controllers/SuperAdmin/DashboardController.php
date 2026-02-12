<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the super admin dashboard.
     */
    public function index(): View
    {
        return view('super_admin.home.super_admin_home');
    }
}
