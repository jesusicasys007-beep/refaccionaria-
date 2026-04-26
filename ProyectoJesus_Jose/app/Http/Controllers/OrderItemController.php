<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderItemController extends Controller
{
    public function index(Request $request)
    {
        $query = OrderItem::query();

        if ($request->has('search') && $request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $orderitems = $query->paginate(15);

        return view('administrador.orderitems.index', compact('orderitems'));
    }

    public function create()
    {
        $orders = Order::all();

        return view('administrador.orderitems.create', compact('order_id'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules here
        ]);

        OrderItem::create($validated);

        return redirect()->route('admin.orderitems.index')->with('success', 'OrderItem creado exitosamente');
    }

    public function show(OrderItem $orderitem)
    {
        return view('administrador.orderitems.show', compact('orderitem'));
    }

    public function edit(OrderItem $orderitem)
    {
        $orders = Order::all();

        return view('administrador.orderitems.edit', compact('orderitem', 'order_id'));
    }

    public function update(Request $request, OrderItem $orderitem)
    {
        $validated = $request->validate([
            // Add validation rules here
        ]);

        $orderitem->update($validated);

        return redirect()->route('admin.orderitems.index')->with('success', 'OrderItem actualizado exitosamente');
    }

    public function destroy(OrderItem $orderitem)
    {
        $orderitem->delete();

        return redirect()->route('admin.orderitems.index')->with('success', 'OrderItem eliminado exitosamente');
    }
}
