<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Mostrar lista de empleados.
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Mostrar formulario de creación.
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Guardar un empleado nuevo.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:empleados,email',
            'telefono' => 'nullable|string|max:20',
            'cargo' => 'nullable|string|max:100',
            'salario' => 'nullable|numeric',
        ]);

        Empleado::create($request->all());

        return redirect()->route('empleados.index')
                         ->with('success', 'Empleado creado correctamente.');
    }

    /**
     * Mostrar un empleado.
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    /**
     * Mostrar formulario de edición.
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Actualizar un empleado.
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:empleados,email,' . $empleado->id,
            'telefono' => 'nullable|string|max:20',
            'cargo' => 'nullable|string|max:100',
            'salario' => 'nullable|numeric',
        ]);

        $empleado->update($request->all());

        return redirect()->route('empleados.index')
                         ->with('success', 'Empleado actualizado correctamente.');
    }

    /**
     * Eliminar un empleado.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()->route('empleados.index')
                         ->with('success', 'Empleado eliminado correctamente.');
    }
}
