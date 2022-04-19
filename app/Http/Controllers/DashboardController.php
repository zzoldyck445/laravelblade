<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard1()
    {
        return view('dashboard-content.dashboard');
    }
    // public function dashboard2()
    // {
    //     return view('dashboard-content.default-dashboard');
    // }
    public function dashboard3()
    {
        return view('dashboard-content.visual-dashboard');
    }
}
