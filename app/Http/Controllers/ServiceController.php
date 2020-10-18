<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services', ['services' => $services]);
    }

    public function create()
    {
        return view('admin.services-create');
    }

    public function store(Request $request)
    {
        Service::create($request->except('_token'));
        return Redirect::route('admin-services-index');
    }

    public function show(Service $service)
    {
        //
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.services-edit', ['service' => $service]);
    }

    public function update(Request $request, $id)
    {
        Service::find($id)->update($request->except('_token'));
        return Redirect::route('admin-services-index');
    }

    public function destroy($id)
    {
        Service::destroy($id);
        return Redirect::route('admin-services-index');
    }
}
