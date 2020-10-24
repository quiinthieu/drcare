<?php

namespace App\Http\Controllers;

use App\Models\Research;
use App\Models\DiseaseType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class ResearchController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->get('filter');
        $status = $request->get('status');
        if(isset($filter)&&isset($status)){
            if($filter = $request->get('filter') =='all'){       
                $status = $request->get('status');
                $articles = DB::table('research')->where('status', $status )->paginate(8);    
                $types = DiseaseType::all();
                return view('admin.research', ['articles' => $articles,'types' => $types,'status'=> $status]);
            }
            else{
                $filter = $request->get('filter');
                $status = $request->get('status');
                $articles = DB::table('research')->where([
                    ['disease_type_id', $filter],
                    ['status', $status]
                ])->paginate(8);    
                $types = DiseaseType::all();
                return view('admin.research', ['articles' => $articles,'types' => $types,'filter'=> $filter,'status'=> $status]);
            }    
        }
      
        $articles = Research::paginate(8);
        $types = DiseaseType::all();
        return view('admin.research', ['articles' => $articles,'types' => $types]);
    }
    

    public function create()
    {
        return view('admin.research-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:50',
            'author'=>'required|max:50',
            'subtitle'=>'required|max:50',
            'thumbnail'=>'required|image|mimes:jpeg,jpg,png',
           ]); 
        $research = new Research();
        ($request->status)  ?  $research->status = 1 : $research->status = 0 ;
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
        return Redirect::route('admin-research-index')->with('message', 'Create Successfull !');
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
        $request->validate([
            'title'=>'required|max:50',
            'author'=>'required|max:50',
            'subtitle'=>'required|max:100',
            'thumbnail'=>'image|mimes:jpeg,jpg,png',
           ]); 
        
        $research = Research::find($id);

        ($request->status)  ?  $research->status = 1 : $research->status = 0 ;
 
        $research->disease_type_id = $request->disease_type_id;
        $research->title = $request->title;
        $research->subtitle = $request->subtitle;
        $research->author = $request->author;
        $research->content = json_encode(array($request->get('content')), JSON_THROW_ON_ERROR);
        $research->published_at = Carbon::parse($request->published_at);

        if ($request->hasFile('thumbnail')) {
            $fileName = $request->thumbnail->getClientOriginalName();
            $path = $request->thumbnail->storeAs('drcare/research', $fileName, 'public');
            $research->thumbnail = 'storage/' . $path;
        }
        $research->save();
        return Redirect::route('admin-research-index')->with('message', 'Update Successfull !');
    }

    public function destroy($id)
    {
        Research::destroy($id);
        return Redirect::route('admin-research-index')->with('message', 'Delete Successfull !');
    }
}
