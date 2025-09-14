<?php

namespace App\Http\Controllers;

use App\Models\HrEmployee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = HrEmployee::all();
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:hr_employees',
        ]);

        HrEmployee::create($request->all());

        return redirect()->route('employee.index')->with('success', 'Empleado creado correctamente.');
    }

    public function edit(HrEmployee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, HrEmployee $employee)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:hr_employees,email,' . $employee->id,
        ]);

        $employee->update($request->all());

        return redirect()->route('employee.index')->with('success', 'Empleado actualizado correctamente.');
    }

    public function destroy(HrEmployee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'Empleado eliminado correctamente.');
    }
}
