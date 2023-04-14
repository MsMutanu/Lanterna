<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patients;

class PatientController extends Controller
{
    // Display a listing of the patients.
    public function index()
    {
        $patients = Patients::all();
        return view('admin.patients', compact('patients'));
    }

    // Show the form for creating a new patient.
    public function create()
    {
        return view('admin.patients.create');
    }

    // Store a newly created patient in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:patients,email',
            'phone' => 'required',
            'address' => 'required',
            
        ]);

        $patient = Patient::create($validatedData);
        return redirect()->route('admin.patients')->with('success', 'Patient has been created successfully.');
    }

    // Display the specified patient.
    public function show(Patient $patient)
    {
        return view('admin.patients.show', compact('patient'));
    }

    // Show the form for editing the specified patient.
    public function edit(Patient $patient)
    {
        return view('admin.patients.edit', compact('patient'));
    }

    // Update the specified patient in storage.
    public function update(Request $request, Patient $patient)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:patients,email,' . $patient->id,
            'phone' => 'required',
            'address' => 'required',
           
        ]);

        $patient->update($validatedData);
        return redirect()->route('admin.patients')->with('success', 'Patient has been updated successfully.');
    }

    // Remove the specified patient from storage.
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('admin.patients')->with('success', 'Patient has been deleted successfully.');
    }
}
