<?php

namespace App\Http\Controllers\Simpul;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MockupController extends Controller
{
    public function login()
    {
        return view("tnde.simpullogin");
    }

    public function dashboard()
    {
        return view("tnde.simpuldashboard");
    }
}
