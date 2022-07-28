<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RepositoryPattern;
use Illuminate\Support\Facades\Auth;

class RepositoryPatternController extends Controller
{
    public function index(){
        $repoPatterns = RepositoryPattern::all();
        return view('repository-pattern-index',compact('repoPatterns'));
    }

    public function create(){
        return view('repository-pattern-create');
    }

    public function store(Request $request){
        $name           = $request->get('repository_name');
        $description    = $request->get('repository_description');
        RepositoryPattern::firstOrCreate([
            'name' => $name,
            'description' => $description,
            'user_id' => Auth::user()->id
        ]);
        return back();
    }

    public function show(RepositoryPattern $repository_pattern){
        return view('repository-pattern-show',compact('repository_pattern'));
    }

    public function edit(RepositoryPattern $repository_pattern){
        return view('repository-pattern-edit',compact('repository_pattern'));
    }

    public function update(Request $request,RepositoryPattern $repository_pattern){
        $name           = $request->get('repository_name');
        $description    = $request->get('repository_description');
        RepositoryPattern::where('id',$repository_pattern->id)->update([
            'name'          => $name,
            'description'   => $description
        ]);
        return back();
    }

    public function destroy(Request $request,RepositoryPattern $repository_pattern){
        RepositoryPattern::where('id',$repository_pattern->id)->delete();
        return back();
    }
}
