<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the customer dashboard.
     */
    public function index(): View
    {
        return view('customer.home.customer_home');
    }
}
