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
                // User সব সময়ে index এ থাকবে 
                return view('FrontEnd.home.index');
            } else if ($userRole == 'admin') {
                return view('admin.index');
            }
            else{
                return redirect()->back();
            }
        }
    }

    // Front End Home page 
    public function home(){
        return view('FrontEnd.home.index');
    }
}
