<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employees::all();
        return view('admin.employees', compact('employees'));
    }

    public function create()
    {
        return view('admin.employees.create');
    }

    public function store(Request $request)
    {
        // Validate input fields
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:employees,email',
            'phone' => 'required|string',
           'role' => 'required|string',
        ]);

        // Create new employee
        $employee = Employees::create($validatedData);

        // Redirect to employee index page with success message
        return redirect()->route('admin.employees')->with('success', 'Employee created successfully.');
    }

    public function show(Employees $employee)
    {
        return view('admin.employees.show', compact('employee'));
    }

    public function edit(Employees $employee)
    {
        return view('admin.employees.edit', compact('employee'));
    }

    public function update(Request $request, Employees $employee)
    {
        // Validate input fields
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:employees,email,' . $employee->id,
            'phone' => 'required|string',
            'role' => 'required|string',
        ]);

        // Update employee
        $employee->update($validatedData);

        // Redirect to employee index page with success message
        return redirect()->route('admin.employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employees $employee)
    {
        // Delete employee
        $employee->delete();

        // Redirect to employee index page with success message
        return redirect()->route('admin.employees')->with('success', 'Employee deleted successfully.');
    }
}
