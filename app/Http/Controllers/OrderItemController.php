<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function orderItems()
    {
        $orderItems =  OrderItem::all();
        return $orderItems;
    }

    public function orderItem($id)
    {
        $orderItem = OrderItem::find($id);
        return $orderItem;
    }

    public function deleteOrderItem($id)
    {
        OrderItem::find($id)->delete();
    }
    public function newOrderItem(Request $request)
    {
        $orderItem  = new OrderItem();
        $orderItem ->order = $request->order;
        $orderItem ->product = $request->product;
        $orderItem ->order_quantity = $request->order_quantity;
        $orderItem ->save();
    }
    public function updateOrderItem(Request $request, $id)
    {
        $orderItem = OrderItem::find($id);
        $orderItem ->order = $request->order;
        $orderItem ->product = $request->product;
        $orderItem ->order_quantity = $request->order_quantity;
        $orderItem ->save();
    }
}
