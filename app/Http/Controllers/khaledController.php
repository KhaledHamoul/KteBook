<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class khaledController extends Controller
{
    public function dashboard(Request $req)
    {
        return 'index';
    }

    public function hhi($n)
    {
        return 'khraaa'. $n;
    }
}
