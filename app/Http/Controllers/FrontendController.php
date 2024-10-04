<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Rental;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function CarDetails($id)
    {
        $SingleCar = Cars::find($id);
        $AllCars = Cars::all();
        return view('FrontEnd.home.CarDetails', compact('SingleCar', 'AllCars'));
    }

    public function add_booking(Request $request, $id)
    {
        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'date|after:startDate',
        ]);

        $data = new Rental;

        $data->car_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->total_cost = $request->total_cost;

        $startDate = $request->startDate;
        $endDate = $request->endDate;
        $isBooked = Rental::where('car_id', $id)
            ->where('start_date', '<=', $endDate)
            ->where('end_date', '>=', $startDate)->exists();

        if ($isBooked) {
            return redirect()->back()->with('message', 'Car Is Already Booked Please Try Different Date');
        } else {
            $data->start_date = $request->startDate;
            $data->end_date = $request->endDate;
            $data->save();
            return redirect()->back()->with('message', 'Car Booked Successfully');
        }
    }
}
