<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', '0')->orWhere('status', '1')->orWhere('status', '2')->orWhere('status', '3')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function view($id)
    {
        $orders = Order::where('id', $id)->first();
        return view('admin.orders.view', compact('orders'));
    }

    public function updateOrder(Request $request, $id)
    {
        $orders = Order::find($id);
        $orders->status = $request->input('order-status');
        $orders->update();
        return redirect('orders')->with('status', 'Order Updated Successfully');
    }

    public function orderHistory()
    {
        $orders = Order::where('status', '4')->orwhere('status', '5')->get();
        return view('admin.orders.history', compact('orders'));
    }
}