<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function show()
    {
        return view('app.dashboard');
    }
}
