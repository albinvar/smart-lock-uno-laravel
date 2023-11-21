<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // create a method to view the intruders page
    public function appIntruders()
    {
        return view('app.intruders');
    }

    // create a method to view the dashboard page
    public function appDashboard()
    {
        return view('app.dashboard');
    }
}
