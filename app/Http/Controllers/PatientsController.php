<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class PatientsController extends Controller
{
    /**
     * Index Method:
     * This method will retrieve a list of all patients
     *  from the Patients model and 
     * pass it to the view for display.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $patients = Patients::all();
    return view('patients.index',compact('patients'));
}


    /**
     * Create Method:
     * This method will pass an empty patients object to the view 
     * for creating a new patient.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $patients = new Patients();
    return view('patients.create', compact('patients'));
}

    /**
     * Store Method:
     * This method will handle the form submission for creating a new patient,
     *  validate the input,
     *  store the new patient to the database,
     *  and redirect to the index page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $this->validate($request, [
        'first_name' => 'required',
        'second_name' => 'required',
        'address' => 'required',
        'date_of_birth' => 'required',
        'phone' => 'required',
        'emergency_phone' => 'required',
        'email' => 'required',
    ]);

    Patients::create($request->all());

    return redirect()->route('patients.index');
}


    /**
     * Show Method: 
     * This method will retrieve a single patient 
     * from the Patients model based on the id passed in the route 
     * and pass it to the view for display.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $patient = Patients::findOrFail($id);
    return view('patients.show', compact('patient'));
}


    /**
     * Edit Method:
     *  This method will retrieve a single patient 
     * from the Patients model based on the id passed in the route 
     * and pass it to the view for editing.

     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $patient = Patients::findOrFail($id);
    return view('patients.edit', compact('patient'));
}


    /**
     * Update Method: This method will handle the form submission for updating an existing patient, 
     * validate the input,
     *  update the patient in the database, 
     * and redirect to the index page
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $this->validate($request, [
        'first_name' => 'required',
        'last_name' => 'required',
        'patient_number' => 'required',
        'date_of_birth' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'email' => 'required',
    ]);

    $patients = Patients::findOrFail($id);
    $patients->update($request->all());

    Session::flash('message', 'Patient updated successfully.');
    return redirect()->route('patients.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $user = Patients::findOrFail($id);
    $user->delete();
    Session::flash('message', 'Patient deleted successfully.');


    return redirect()->route('patients.index');
    
}

}
