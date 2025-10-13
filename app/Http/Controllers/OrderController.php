<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function viewOrder()
    {
        return view('create-order');
    }

    public function storeOrder()
    {
        $order = new order;
        $order->book_name = request('book-name');
        $order->copies_number = request('copies-numbers');
        $order->first_name = request('first-name');
        $order->last_name = request('last-name');
        $order->email = request('email');
        $order->payment_method = request('payment-method');
        $order->credit_number = request('credit-number');
    
        $order->save();

        
        
        return redirect('/')-> with('message', 'Thanks for your order');
    }



    public function allOrder()
    {
        return view('orders', [
            'orders' => Order::all()
        ]);
    }

    public function singleOrder($id)
    {
        $order = Order::findOrFail($id);
        return view('orders-show', ['order' => $order]);
    }

    public function deleteOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect('/orders');
    }

}
