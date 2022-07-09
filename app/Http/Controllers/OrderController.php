<?php

namespace App\Http\Controllers;

use App\Models\DeliveryPoint;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function track($tracking_number)
    {

        $order = Order::where("tracking_number", $tracking_number)->get()->first();

        if (!$order) {
            return redirect("home")->with("error", "Order not found");
        }

        return view("track_order");
        //order found retrieve order details

    }

    public function create(Request $request)
    {

        $validation = $this->validate($request, [
            'parcel_name' => "required|string|max:255",
            'sender_name' => "required|string|max:155",
            'amount_paid' => "required|numeric",
            'sender_email' => "required|email",
            'image' => 'nullable|image',
        ]);

        //validation success

        $order = new Order();
        $order->parcel_name = $validation['parcel_name'];
        $order->sender_name = $validation['sender_name'];
        $order->sender_email = $validation['sender_email'];
        $order->amount_paid = $validation['amount_paid'];
        $order->status = "In Transit";
        if (isset($validation['image'])) {
            $order->image = uploadFileRequest($validation['quantity'], "image", "media");
        }

        $order->tracking_number = "CVL" . (time() + rand(100000, 9999999));

        //generate tracking number

        if ($order->save()) {

            //create from and to points very important!
            $from = new DeliveryPoint();
            $from->location = "Pending...";
            $from->type = "FROM";
            $from->order_id = $order->id;
            $from->save();

            $to = new DeliveryPoint();
            $to->location = "Location Pending";
            $to->type = "TO";
            $to->order_id  = $order->id;
            $to->save();

            return redirect(route("admin.order-path", ['order' => $order->id]))->with("success", "Order Added Successfully Please set the coordinates of the parcel");
        } else {
            return redirect(route("admin.set-path"))->with("error", "System error please contact administrator");
        }

    }

    public function edit(Request $request)
    {

        $validation = $this->validate($request, [
            'order_id' => "required|integer",
            'parcel_name' => "required|string|max:255",
            'sender_name' => "required|string|max:155",
            'amount_paid' => "required|numeric",
            'sender_email' => "required|email",
            'image' => 'nullable|image',
        ]);

        //validation success

        $order = Order::findOrFail($validation['order_id']);
        $order->parcel_name = $validation['parcel_name'];
        $order->sender_name = $validation['sender_name'];
        $order->sender_email = $validation['sender_email'];
        $order->amount_paid = $validation['amount_paid'];
        $order->status = "In Transit";

        if (isset($validation['image'])) {
            $order->image = uploadFileRequest($validation['quantity'], "image", "media");
        }

        if($order->save()){
            return redirect(route("admin.orders"))->with("success","Order edited successfully");
        }
        else{
            return redirect(route("admin.orders"))->with("error","System error please contact administrator");
        }


    }


    public function delete($order){

        $order = Order::findOrFail($order);
        $order->delete();
        
        //delete all deliery point records

        DeliveryPoint::where("order_id",$order->id)->delete();

        return redirect(route('admin.orders'))->with("error","Order deleted!");


    }

}
