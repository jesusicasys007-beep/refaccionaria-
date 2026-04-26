<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $query = Order::query();

        if ($request->has('search') && $request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $orders = $query->paginate(15);

        return view('administrador.orders.index', compact('orders'));
    }

    public function create()
    {
        $users = User::all();

        return view('administrador.orders.create', compact('user_id'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules here
        ]);

        Order::create($validated);

        return redirect()->route('admin.orders.index')->with('success', 'Order creado exitosamente');
    }

    public function show(Order $order)
    {
        return view('administrador.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $users = User::all();

        return view('administrador.orders.edit', compact('order', 'user_id'));
    }

    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            // Add validation rules here
        ]);

        $order->update($validated);

        return redirect()->route('admin.orders.index')->with('success', 'Order actualizado exitosamente');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('admin.orders.index')->with('success', 'Order eliminado exitosamente');
    }
}
