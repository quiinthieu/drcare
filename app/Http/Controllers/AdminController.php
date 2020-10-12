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
    public function bcBadges() {
        return view('admin.bc-badges');
    }
    public function bcBreadcrumbPagination() {
        return view('admin.bc-breadcrumb-pagination');
    }

    public function bcButton() {
        return view('admin.bc-button');
    }
    public function bcCard() {
        return view('admin.bc-card');
    }
    public function bcCarousel() {
        return view('admin.bc-carousel');
    }
    public function bcCollapse() {
        return view('admin.bc-collapse');
    }
    public function bcExtra() {
        return view('admin.bc-extra');
    }
    public function bcModal() {
        return view('admin.bc-modal');
    }
    public function bcProgress() {
        return view('admin.bc-progress');
    }
    public function bcSpinner() {
        return view('admin.bc-spinner');
    }
    public function bcTabs() {
        return view('admin.bc-tabs');
    }
    public function bcToasts() {
        return view('admin.bc-toasts');
    }
    public function bcTooltipPopover() {
        return view('admin.bc-tooltip-popover');
    }
    public function bcTypography() {
        return view('admin.bc-typography');
    }
    public function chartApex() {
        return view('admin.chart-apex');
    }
    public function formElements() {
        return view('admin.form-elements');
    }
    public function mapGoogle() {
        return view('admin.map-google');
    }
    public function samplePage() {
        return view('admin.sample-page');
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
    public function bcGrid() {
        return view('admin.bc-grid');
    }
    public function layoutVertical() {
        return view('admin.layout-vertical');
    }
    public function layoutHorizontal() {
        return view('admin.layout-horizontal');
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
