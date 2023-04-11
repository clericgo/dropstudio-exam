<?php

namespace App\Http\Controllers;
use Illuminate\Models\Orders;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    // READ //
    public function show()
    {
        return view('order.view');
    }

    // CREATE //
    public function store($request)
    {
        $order = Orders();
        $order->order_number = $request->order_number;
        $order->status_id = $request->status_id;
        $order->created_at = new DateTime('today');
        $order->save();    
    }

    // UPDATE //
    public function update($request)
    {
        $order = Clients::findOrFail($request->id);
        $order->order_number = $request->order_number;
        $order->status_id = $request->status_id;
        $order->updated_at = new DateTime('today');
        $order->save();    
    }

    // DELETE //
    public function delete($request)
    {
        $order = Orders::findOrFail($request->id);
        $order->destroy();
    }
}
