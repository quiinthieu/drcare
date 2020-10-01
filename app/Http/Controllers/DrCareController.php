<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Research;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DrCareController extends Controller
{
    public function index() {
        return view('drcare.index');
    }
    public function about() {
        return view('drcare.about');
    }
    public function research() {
        $articles = DB::table('research')->orderBy('published_at', 'desc')->paginate(6);

        return view('drcare.research', ['articles' => $articles]);
    }
    public function doctor() {
        $doctors = Doctor::all();
        return view('drcare.doctor', ['doctors' => $doctors]);
    }
    public function product() {
        return view('drcare.product');
    }
}
