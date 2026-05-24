<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Manufacturer;

class PartController extends Controller
{
    public function index(Request $request)
    {
        $query = Part::query();

        if ($request->has('search') && $request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $parts = $query->paginate(15);

        return view('administrador.parts.index', compact('parts'));
    }

    public function catalog(Request $request)
    {
        $query = Part::query()->with(['category', 'manufacturer', 'images']);

        if ($request->has('search') && $request->search) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
        }

        $parts = $query->paginate(9);

        return view('cliente.piezas', compact('parts'));
    }

    public function create()
    {
        $categories = Categorie::all();
        $manufacturers = Manufacturer::all();

        return view('administrador.parts.create', compact('category_id', 'manufacturer_id'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules here
        ]);

        Part::create($validated);

        return redirect()->route('admin.parts.index')->with('success', 'Part creado exitosamente');
    }

    public function show(Part $part)
    {
        return view('administrador.parts.show', compact('part'));
    }

    public function edit(Part $part)
    {
        $categories = Categorie::all();
        $manufacturers = Manufacturer::all();

        return view('administrador.parts.edit', compact('part', 'category_id', 'manufacturer_id'));
    }

    public function update(Request $request, Part $part)
    {
        $validated = $request->validate([
            // Add validation rules here
        ]);

        $part->update($validated);

        return redirect()->route('admin.parts.index')->with('success', 'Part actualizado exitosamente');
    }

    public function destroy(Part $part)
    {
        $part->delete();

        return redirect()->route('admin.parts.index')->with('success', 'Part eliminado exitosamente');
    }
}
