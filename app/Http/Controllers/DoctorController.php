<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::paginate(8);
        return view('admin.doctors', ['doctors' => $doctors]);
    }

    public function create()
    {
        return view('admin.doctors-create');
    }

    public function store(Request $request)
    {
        $fileName = $request->photo->getClientOriginalName();
        $path = $request->photo->storeAs('drcare/doctors', $fileName, 'public');
        $request->photo = 'storage/' . $path;
        Doctor::create($request->except('_token'));
        return Redirect::route('admin-doctors-index');
    }

    public function show(Doctor $doctor)
    {

    }

    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('admin.doctors-edit', ['doctor' => $doctor]);
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        if ($request->hasFile('photo')) {
            $fileName = $request->photo->getClientOriginalName();
            $path = $request->photo->storeAs('drcare/doctors', $fileName, 'public');
            $doctor->update(['photo' => 'storage/' . $path]);
        }
        $doctor->update($request->except('_token', 'photo'));
        return Redirect::route('admin-doctors-index');
    }

    public function destroy($id)
    {
        Doctor::destroy($id);
        return Redirect::route('admin-doctors-index');
    }
}
