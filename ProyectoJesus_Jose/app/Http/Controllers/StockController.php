<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use App\Models\Warehouse;
use App\Models\Part;

class StockController extends Controller
{
    public function index(Request $request)
    {
        $query = Stock::query();

        if ($request->has('search') && $request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $stocks = $query->paginate(15);

        return view('administrador.stocks.index', compact('stocks'));
    }

    public function create()
    {
        $warehouses = Warehouse::all();
        $parts = Part::all();

        return view('administrador.stocks.create', compact('warehouse_id', 'part_id'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules here
        ]);

        Stock::create($validated);

        return redirect()->route('admin.stocks.index')->with('success', 'Stock creado exitosamente');
    }

    public function show(Stock $stock)
    {
        return view('administrador.stocks.show', compact('stock'));
    }

    public function edit(Stock $stock)
    {
        $warehouses = Warehouse::all();
        $parts = Part::all();

        return view('administrador.stocks.edit', compact('stock', 'warehouse_id', 'part_id'));
    }

    public function update(Request $request, Stock $stock)
    {
        $validated = $request->validate([
            // Add validation rules here
        ]);

        $stock->update($validated);

        return redirect()->route('admin.stocks.index')->with('success', 'Stock actualizado exitosamente');
    }

    public function destroy(Stock $stock)
    {
        $stock->delete();

        return redirect()->route('admin.stocks.index')->with('success', 'Stock eliminado exitosamente');
    }
}
