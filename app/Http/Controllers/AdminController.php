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
    public function bcalert() {
        return view('admin.bcalert');
    }
    public function bcbadges() {
        return view('admin.bcbadges');
    }
    public function bcbreadcrumbpagination() {
        return view('admin.bcbreadcrumbpagination');
    }

    public function bcbutton() {
        return view('admin.bcbutton');
    }
    public function bccard() {
        return view('admin.bccard');
    }
    public function bccarousel() {
        return view('admin.bccarousel');
    }
}
