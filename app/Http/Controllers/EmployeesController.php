<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employees::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:employees,email',
            'national_id' => 'required|unique:employees,national_id',
            'gender' => 'required',
            'current_contract' => 'required',
            'role' => 'required'
        ]);

        $employee = Employees::create($validatedData);
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function show(Employees $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employees $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employees $employee)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'national_id' => 'required|unique:employees,national_id,' . $employee->id,
            'gender' => 'required',
            'current_contract' => 'required',
            'role' => 'required'
        ]);

        $employee->update($validatedData);
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employees $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
