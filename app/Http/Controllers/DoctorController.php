<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\DoctorType;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->get('filter');
        if(isset($filter)){
            if($filter = $request->get('filter') =='Select All'){
                $doctors = Doctor::paginate(8);
                $types = DoctorType::all();
                return view('admin.doctors', ['doctors' => $doctors,'types' => $types]);
            }
            else{
                $filter = $request->get('filter');
                $doctors = DB::table('doctors')->where('doctor_type_id', $filter)->paginate(8);    
                $types = DoctorType::all();
                return view('admin.doctors', ['doctors' => $doctors,'types' => $types,'filter'=> $filter]);
            }
        }
        $doctors = Doctor::paginate(8);
        $types = DoctorType::all();
        return view('admin.doctors', ['doctors' => $doctors,'types' => $types]);
    }
/* 
    public function filter(Request $request)
    {
        if($filter = $request->get('filter') =='Select All'){
            $doctors = Doctor::paginate(8);
            $types = DoctorType::all();
            return view('admin.doctors', ['doctors' => $doctors,'types' => $types]);
        }
        else{
            $filter = $request->get('filter');
            $doctors = DB::table('doctors')->where('doctor_type_id', $filter)->paginate(8);    
            $types = DoctorType::all();
            return view('admin.doctors', ['doctors' => $doctors,'types' => $types,'filter'=> $filter]);
        }
    }
 */

    public function create()
    {
        return view('admin.doctors-create');
    }

    public function store(Request $request)
    {

     /*    $request->validate([
            'title'=>'required|max:255',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png',
            'category'=>'required',
            'tags'=>'required|array'
           ],[
            'category.required'=>'Please select a category.',
            'tags.required'=>'Please select atlest one tag.'
           ]); */

        $fileName = $request->photo->getClientOriginalName();
        $path = $request->photo->storeAs('drcare/doctors', $fileName, 'public');
        $request->photo = 'storage/' . $path;
        Doctor::create($request->except('_token'));
        return Redirect::route('admin-doctors-index')->with('message', 'Create Successfull !');
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
        return Redirect::route('admin-doctors-index')->with('message', 'Update Successfull !');
    }

    public function destroy($id)
    {
        Doctor::destroy($id);
        return Redirect::route('admin-doctors-index')->with('message', 'Delete Successfull !');
    }
}
