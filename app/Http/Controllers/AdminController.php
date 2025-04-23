<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class AdminController extends Controller
{

    public function index(Request $request)
    {
        if (!session()->has('auth')) {
            return redirect()->route('home');
        }

        return view('admin');
    }
}
