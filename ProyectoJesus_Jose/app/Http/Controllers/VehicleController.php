<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\CarVariant;

class VehicleController extends Controller
{
    public function index(Request $request)
    {
        $query = Vehicle::query();

        if ($request->has('search') && $request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $vehicles = $query->paginate(15);

        return view('administrador.vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        $carvariants = CarVariant::all();

        return view('administrador.vehicles.create', compact('car_variant_id'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules here
        ]);

        Vehicle::create($validated);

        return redirect()->route('admin.vehicles.index')->with('success', 'Vehicle creado exitosamente');
    }

    public function show(Vehicle $vehicle)
    {
        return view('administrador.vehicles.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
    {
        $carvariants = CarVariant::all();

        return view('administrador.vehicles.edit', compact('vehicle', 'car_variant_id'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        $validated = $request->validate([
            // Add validation rules here
        ]);

        $vehicle->update($validated);

        return redirect()->route('admin.vehicles.index')->with('success', 'Vehicle actualizado exitosamente');
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('admin.vehicles.index')->with('success', 'Vehicle eliminado exitosamente');
    }
}
