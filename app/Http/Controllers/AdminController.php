<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {

            $userRole = Auth()->user()->role;
            if ($userRole == 'customer') {
                return view('dashboard');
            } else if ($userRole == 'admin') {
                return view('admin.index');
            }
            else{
                return redirect()->back();
            }
        }
    }
}
