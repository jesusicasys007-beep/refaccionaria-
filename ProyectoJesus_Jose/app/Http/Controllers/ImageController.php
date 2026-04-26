<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(Request $request)
    {
        $query = Image::query();

        if ($request->has('search') && $request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $images = $query->paginate(15);

        return view('administrador.images.index', compact('images'));
    }

    public function create()
    {
        return view('administrador.images.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules here
        ]);

        Image::create($validated);

        return redirect()->route('admin.images.index')->with('success', 'Image creado exitosamente');
    }

    public function show(Image $image)
    {
        return view('administrador.images.show', compact('image'));
    }

    public function edit(Image $image)
    {
        return view('administrador.images.edit', compact('image'));
    }

    public function update(Request $request, Image $image)
    {
        $validated = $request->validate([
            // Add validation rules here
        ]);

        $image->update($validated);

        return redirect()->route('admin.images.index')->with('success', 'Image actualizado exitosamente');
    }

    public function destroy(Image $image)
    {
        $image->delete();

        return redirect()->route('admin.images.index')->with('success', 'Image eliminado exitosamente');
    }
}
