<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $diseases = Disease::all();
        return view('admin.diseases', ['diseases' => $diseases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.diseases-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $disease = Disease::create($request->except('_token'));
        $disease->save();
        return Redirect::route('admin-diseases-index')->with('message', 'Create Successfull !');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $disease = Disease::find($id);
        return view('admin.diseases-show', ['disease' => $disease]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $disease = Disease::find($id);
        return view('admin.diseases-edit', ['disease' => $disease]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $disease = Disease::find($id);
        $disease->update($request->except('_token'));
        return Redirect::route('admin-diseases-index')->with('message', 'Update Successfull !');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        Disease::destroy($id);
        return Redirect::route('admin-diseases-index')->with('message', 'Delete Successfull !');
    }
}
