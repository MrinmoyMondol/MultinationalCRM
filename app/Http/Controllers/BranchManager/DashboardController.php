<?php

namespace App\Http\Controllers\BranchManager;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the branch manager dashboard.
     */
    public function index(): View
    {
        return view('branch_manager.home.branch_manager_home');
    }
}
