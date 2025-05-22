<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function adminDashboard()
    {
        return view('admin/dashboard');
    }

    public function userDashboard(){

        return view('user/dashboard');
    }

}