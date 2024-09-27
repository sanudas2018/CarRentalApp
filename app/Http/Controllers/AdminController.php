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
            } else {
                return redirect()->back();
            }
        }
    }

    // Front End Home page 
    public function home()
    {
        return view('FrontEnd.home.index');
    }

    // Front end 
    // Crate Car Page
    public function CarPage()
    {
        return view('admin.createCarPage');
    }
    public function CarListPage()
    {
        return view('admin.CarListPage');
    }


    function CreateCar(Request $request)
    {

        try {
            $img_url = '';

            if ($request->hasFile('image')) {
                // return response()->json($request->all());
                // Prepare File Name & Path
                $img = $request->file('image');

                $t = time();
                $file_name = $img->getClientOriginalName();

                $img_name = "{$t}-{$file_name}";
                $img_url = "{$img_name}";
                // Upload File
                $img->move(public_path('uploads'), $img_name);
            }

            // Save To Database
            Cars::create([
                'name' => $request->input('name'),
                'brand' => $request->input('brand'),
                'car_model' => $request->input('model'),
                'year' => $request->input(key: 'year'),
                'car_type' => $request->input(key: 'car_type'),
                'daily_rent_price' => $request->input('daily_rent_price'),
                'availability' => $request->input('availability'),

                'image' => $img_url,

            ]);

            return response()->json("success", 201);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 200);
        }



    }

    public function CarList(){
        $allData = Cars::all();
        return view('admin.CarListPage', compact('allData'));

    }

    public function carDelete($id){
       $data = Cars::find($id);
       $data -> delete();
       return redirect()->back();

    }
}
