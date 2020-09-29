<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DrCareController extends Controller
{
    public function research() {
        $articles = DB::table('research')->orderBy('published_at', 'desc')->paginate(6);

        return view('drcare.research', ['articles' => $articles]);
    }
}
