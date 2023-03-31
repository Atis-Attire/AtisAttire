<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders()
    {
        $orders =  Order::all();
        return $orders;
    }

    public function order($id)
    {
        $order = Order::find($id);
        return $order;
    }

    public function deleteOrder($id)
    {
        Order::find($id)->delete();
    }
    public function newOrder(Request $request)
    {
        $order  = new Order();
        $order ->date = $request->date;
        $order ->user = $request->user;
        $order ->status = $request->status;
        $order ->save();
    }
    public function updateOrder(Request $request, $id)
    {
        $order = Order::find($id);
        $order ->date = $request->date;
        $order ->user = $request->user;
        $order ->status = $request->status;
        $order ->save();
    }
}
