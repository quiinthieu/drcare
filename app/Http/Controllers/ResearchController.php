<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ResearchController extends Controller
{
    public function index()
    {
        $articles = Research::paginate(8);
        return view('admin.research', ['articles' => $articles]);
    }

    public function create()
    {
        return view('admin.research-create');
    }

    public function store(Request $request)
    {
        $research = new Research();
        $research->disease_type_id = $request->disease_type_id;
        $research->title = $request->title;
        $research->subtitle = $request->subtitle;
        $research->author = $request->author;
        $research->content = json_encode(array($request->get('content')), JSON_THROW_ON_ERROR);
        $research->published_at = Carbon::parse($request->published_at);

        $fileName = $request->thumbnail->getClientOriginalName();
        $path = $request->thumbnail->storeAs('drcare/research', $fileName, 'public');
        $research->thumbnail = 'storage/' . $path;
        $research->save();
        return Redirect::route('admin-research-index');
    }

    public function show(Research $research)
    {
        //
    }

    public function edit($id)
    {
        $article = Research::find($id);
        return view('admin.research-edit', ['article' => $article]);
    }

    public function update(Request $request, $id)
    {
        $research = Research::find($id);
        $research->disease_type_id = $request->disease_type_id;
        $research->title = $request->title;
        $research->subtitle = $request->subtitle;
        $research->author = $request->author;
        $research->content = json_encode(array($request->get('content')), JSON_THROW_ON_ERROR);
        $research->published_at = Carbon::parse($request->published_at);

        $fileName = $request->thumbnail->getClientOriginalName();
        $path = $request->thumbnail->storeAs('drcare/research', $fileName, 'public');
        $research->thumbnail = 'storage/' . $path;
        $research->save();
        return Redirect::route('admin-research-index');
    }

    public function destroy($id)
    {
        Research::destroy($id);
        return Redirect::route('admin-research-index');
    }
}
