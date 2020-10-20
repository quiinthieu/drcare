<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function oralDiseases() {
        return view('admin.oral-diseases');
    }
    public function dentalDiseases() {
        return view('admin.dental-diseases');
    }
    public function oralDiseasesEdit($id) {
        return view('admin.disease-edit', ['id' => $id]);
    }
}
