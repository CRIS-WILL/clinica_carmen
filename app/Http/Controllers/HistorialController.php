<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historial;

class HistorialController extends Controller
{
    public function index()
    {
        $historiales = Historial::all();
        return view('historial.index', ['historiales' => $historiales]);
    }

    public function create()
    {
        return view('historial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_hist' => 'required|string|unique:historial,id_hist',
            'fecha' => 'required|date',
            'alergias' => 'nullable|string',
            'notas' => 'nullable|string',
        ]);

        Historial::create($request->all());

        return redirect()->route('historial.index')->with('success', 'Historial creado exitosamente.');
    }

    // Mostrar tabla completa
    public function show()
    {
        $historiales = Historial::all();
        return view('historial.show', compact('historiales'));
    }

    // Formulario de edición
    public function edit(string $id)
    {
        $historial = Historial::findOrFail($id);
        return view('historial.edit', compact('historial'));
    }

    // Actualizar historial
    public function update(Request $request, string $id)
    {
        $historial = Historial::findOrFail($id);

        $request->validate([
            'id_hist' => 'required|string|unique:historial,id_hist,' . $historial->id,
            'fecha' => 'required|date',
            'alergias' => 'nullable|string',
            'notas' => 'nullable|string',
        ]);

        $historial->update($request->all());

        return redirect()->route('historial.index')->with('success', 'Historial actualizado correctamente.');
    }

    // Eliminar historial
    public function destroy(string $id)
    {
        $historial = Historial::findOrFail($id);
        $historial->delete();

        return redirect()->route('historial.index')->with('success', 'Historial eliminado correctamente.');
    }
}
