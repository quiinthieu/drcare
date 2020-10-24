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

        $request->validate([
            'name'=>'required|max:50',
            'photo'=>'required|mimes:jpeg,jpg,png'
           ]);
           $doctor = new Doctor();
           ($request->status)  ?  $doctor->status = 1 : $doctor->status = 0 ;
           $doctor->doctor_type_id= $request->doctor_type_id ;
           $doctor->name= $request->name ;

            $fileName = $request->photo->getClientOriginalName();
            $path = $request->photo->storeAs('drcare/doctors', $fileName, 'public');
            $request->photo = 'storage/' . $path;
            $doctor->photo = $request->photo ;
     /*     Doctor::create($request->except('_token')); */
             $doctor->save();
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
        $request->validate([
            'name'=>'required|max:50',
            'photo'=>'mimes:jpeg,jpg,png'
           ]);
        $doctor = Doctor::find($id);
        ($request->status)  ?  $doctor->status = 1 : $doctor->status = 0 ;
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
