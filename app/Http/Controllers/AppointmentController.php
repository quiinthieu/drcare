<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('admin.appointments', ['appointments' => $appointments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('drcare.appointment');
    }

    /**
     * Store a newly created resource in storage.
     *
     */

    public function store(Request $request)
    {
        $appointment = new Appointment();
        $appointment->first_name = $request->get('first_name');
        $appointment->last_name = $request->get('last_name');
        $appointment->setServiceTypeId($request->get('service_type_id'));
        $appointment->phone = $request->get('phone');
        $appointment->setDate($request->get('date'));
        $appointment->setTime($request->get('time'));
        $appointment->message = $request->get('message');
        $appointment->save();
        return view('drcare.booking-result', ['appointment' => $appointment]);
    }

    public function show($id)
    {
        $appointment = Appointment::find($id);
        return view('admin.appointments-show', ['appointment' => $appointment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $appointment = Appointment::find($id);
        return view('admin.appointments-edit', ['appointment' => $appointment]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $appointment = Appointment::find($id);
        $appointment->first_name = $request->get('first_name');
        $appointment->last_name = $request->get('last_name');
        $appointment->setServiceTypeId($request->get('service_type_id'));
        $appointment->phone = $request->get('phone');
        $appointment->setDate($request->get('date'));
        $appointment->setTime($request->get('time'));
        $appointment->message = $request->get('message');
        $appointment->save();
        return Redirect::route('admin-appointments-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        Appointment::destroy($id);
        return Redirect::route('admin-appointments-index');
    }

}
