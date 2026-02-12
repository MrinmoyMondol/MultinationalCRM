<?php

namespace App\Http\Controllers\CountryManager;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the country manager dashboard.
     */
    public function index(): View
    {
        return view('country_manager.home.country_manager_home');
    }
}
