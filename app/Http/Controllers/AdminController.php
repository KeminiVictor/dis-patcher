<?php

namespace App\Http\Controllers;

use App\Models\Order;

class AdminController extends Controller
{

    public function dashboard()
    {
        $ordersCount = sizeOf(Order::all());
        return view("admin.dashboard")->with("ordersCount", $ordersCount);
    }

    public function orders()
    {
        $orders = Order::orderByDesc('id')->paginate(10);
        return view("admin.orders")->with("orders", $orders);
    }

    public function createOrder()
    {
        return view("admin.create_order");
    }

    public function orderPath($order)
    {
        $order = Order::findOrFail($order);
        return view("admin.order_path")->with("order", $order);

    }

    public function editOrder($order)
    {
        $order = Order::findOrFail($order);
        return view("admin.edit_order")->with("order",$order);
    }
}
