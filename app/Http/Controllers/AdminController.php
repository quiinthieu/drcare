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
    public function bcAlert() {
        return view('admin.bc-alert');
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
    public function bccollapse() {
        return view('admin.bccollapse');
    }
    public function bcextra() {
        return view('admin.bcextra');
    }
    public function bcmodal() {
        return view('admin.bcmodal');
    }
    public function bcprogress() {
        return view('admin.bcprogress');
    }
    public function bcspinner() {
        return view('admin.bcspinner');
    }
    public function bctabs() {
        return view('admin.bctabs');
    }
    public function bctoasts() {
        return view('admin.bctoasts');
    }
    public function bctooltippopover() {
        return view('admin.bctooltippopover');
    }
    public function bctypography() {
        return view('admin.bctypography');
    }
    public function chartapex() {
        return view('admin.chartapex');
    }
    public function formelements() {
        return view('admin.formelements');
    }
    public function mapgoogle() {
        return view('admin.mapgoogle');
    }
    public function samplepage() {
        return view('admin.samplepage');
    }
    public function authSignin() {
        return view('admin.auth-signin');
    }
    public function authSignup() {
        return view('admin.auth-signup');
    }
    public function tblBootstrap() {
        return view('admin.tbl-bootstrap');
    }
}
