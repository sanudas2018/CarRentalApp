<?php

namespace App\Http\Controllers;

use App\Models\Cars;
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

    // Crate Car
    public function CarPage(){
        return view('admin.createCar');
    }


    function CreateCar(Request $request)
    {
        $data = new Cars;
        $data -> name = $request -> name;
        $data -> brand = $request -> brand;
        $data -> car_model = $request -> model;
        $data -> year = $request -> year;
        $data -> car_type = $request -> car_type;
        $data -> daily_rent_price = $request -> daily_rent_price;
        $data -> availability = $request -> availability;

        $image = $request -> image;
        if($image){
            $imageName = time().'.'.$image->getClientOriginalName();
            $request->image->move('uploads',$imageName);
            $data-> image = $imageName;
        }

        $data->save();
        return redirect()->back();

    }

}
