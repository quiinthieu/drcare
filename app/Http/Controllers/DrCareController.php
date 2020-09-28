<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DrCareController extends Controller
{
    public function research() {
        $articles = DB::table('research')->paginate(6);
        return view('drcare.research', ['articles' => $articles]);
    }
}
