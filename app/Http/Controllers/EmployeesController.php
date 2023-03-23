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
    /**
     * Show Method: 
     * This method will retrieve a single employee 
     * 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $employee = Employees::findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employees::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'national_id' => 'required',
            'gender' => 'required',
            'current_contract' => 'required',
            'role' => 'required'
        ]);

        $employee = Employees::findOrFail($id);
        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $employee = Employees::findOrFail($id);
        $employee-> delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
