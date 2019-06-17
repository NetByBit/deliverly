<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->orders()->latest()->with('user')->paginate(12);
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'from_city' => 'required|string',
            'from' => 'required|string',
            'to_city' => 'required|string',
            'to' => 'required|string',
            'weight' => 'required',
            'description' => 'required|string',
        ]);

        if (array_key_exists('image', $validatedData)) {
            $validatedData['image'] = '/storage/' . $validatedData['image']->store('images', 'public');
        }

        auth()->user()->orders()->create($validatedData);
        return redirect('/orders');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function accept(Order $order)
    {
        $order->update([
            'driver_id' => auth()->id()
        ]);

        $order->statuses()->create([
            'body' => 'Your order has been accepted'
        ]);

        return back();
    }

    public function comment(Request $request, Order $order)
    {
        $validatedData = $request->validate([
            'body' => 'required',
        ]);

        $order->statuses()->create($validatedData);

        return back();
    }

    public function delivered(Order $order)
    {
        $order->update([
            'delivered' => true,
        ]);

        $order->statuses()->create([
            'body' => 'Your order has been delivered'
        ]);

        return back();
    }
}
