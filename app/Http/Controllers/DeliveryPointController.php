<?php

namespace App\Http\Controllers;

use App\Models\DeliveryPoint;
use Illuminate\Http\Request;

class DeliveryPointController extends Controller
{
    
    function create(Request $request){
        $validation = $this->validate($request,[
            'order_id' => "required|integer",
            'location' => "required",
        ]);

        $deliveryPoint = new DeliveryPoint();
        $deliveryPoint->type = "STOP";
        $deliveryPoint->order_id = $validation['order_id'];
        $deliveryPoint->location = $validation['location'];
        $deliveryPoint->save();

        
        return redirect()->back()->with("success","Point Added");
        


    }

    function edit(Request $request){
        $validation = $this->validate($request,[
            'point_id' => "required|integer",
            'location' => "required",
        ]);

        $deliveryPoint = DeliveryPoint::findOrFail($validation['point_id']);

        $deliveryPoint->location = $validation['location'];
        $deliveryPoint->save();

        return redirect()->back()->with("success","Edit Success");
        


    }

    function delete($point_id){

        $deliveryPoint = DeliveryPoint::findOrFail($point_id);
        $deliveryPoint->delete();


        return redirect()->back()->with("error","Point deleted successfully");

    }
}
