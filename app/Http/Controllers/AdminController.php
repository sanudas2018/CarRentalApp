<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {

            $userRole = Auth()->user()->role;

            if ($userRole == 'customer') {
                $cars = Cars::all();
                // User সব সময়ে index এ থাকবে 
                return view('FrontEnd.home.index', compact('cars'));
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
        $cars = Cars::all();
        
        return view('FrontEnd.home.index', compact('cars'));
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

    public function carUpdate($id){
        $data = Cars::find($id);
        return view('admin.carUpdatePage', compact('data'));
    }

    public function CarUpdateSingle(Request $request, $id){
        $data = Cars::find($id);
        $data -> name = $request->name;
        $data -> brand = $request->brand;
        $data -> car_model = $request->model;
        $data -> year = $request->year;
        $data -> car_type = $request->car_type;
        $data -> daily_rent_price = $request->daily_rent_price;
        $data -> availability = $request->availability;

        $image = $request -> image;
        if($image){
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request -> image ->move('uploads', $imageName);
            $data->image=$imageName;
        }

        $data->save();
        return redirect()->back();
    }

    // Booking page
    public function bookings(){
        $allData = Rental::all();
        return view('admin.bookingPage', compact('allData'));
    }

    // Booking delete
    public function booking_delete($id){
        $data = Rental::find($id);
        $data -> delete();
        return redirect()->back();
    }

    // approved / rejected
    public function booking_approve($id){
        $booking = Rental::find($id);
        $booking-> status ='approve';
        $booking-> save();
        return redirect()->back();
    }
    public function booking_rejected($id){
        $booking = Rental::find($id);
        $booking-> status ='rejected';
        $booking-> save();
        return redirect()->back();
    }



}
