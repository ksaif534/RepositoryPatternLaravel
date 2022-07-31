<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RepositoryPattern;
use Illuminate\Support\Facades\Auth;
//Helpers
use App\Repositories\Helpers\RepositoryPatternControllerHelpers\GetRepositoryPatternIndexHelper;
use App\Repositories\Helpers\RepositoryPatternControllerHelpers\StoreRepositoryPatternHelper;
use App\Repositories\Helpers\RepositoryPatternControllerHelpers\UpdateRepositoryPatternHelper;
use App\Repositories\Helpers\RepositoryPatternControllerHelpers\DestroyRepositoryPatternHelper;

class RepositoryPatternController extends Controller
{
    private GetRepositoryPatternIndexHelper $getRepositoryPatternHelper;
    private StoreRepositoryPatternHelper $storeRepositoryPatternHelper;
    private UpdateRepositoryPatternHelper $updateRepositoryPatternHelper;
    private DestroyRepositoryPatternHelper $destroyRepositoryPatternHelper;

    public function __construct(
        GetRepositoryPatternIndexHelper $getRepositoryPatternHelper, 
        StoreRepositoryPatternHelper $storeRepositoryPatternHelper, 
        UpdateRepositoryPatternHelper $updateRepositoryPatternHelper, 
        DestroyRepositoryPatternHelper $destroyRepositoryPatternHelper
        ){
        $this->getRepositoryPatternHelper       = $getRepositoryPatternHelper;
        $this->storeRepositoryPatternHelper     = $storeRepositoryPatternHelper;
        $this->updateRepositoryPatternHelper    = $updateRepositoryPatternHelper;
        $this->destroyRepositoryPatternHelper   = $destroyRepositoryPatternHelper;
    }

    public function index(){
        $repoPatterns = $this->getRepositoryPatternHelper->getRepoPatterns();
        return view('repository-pattern-index',compact('repoPatterns'));
    }

    public function create(){
        return view('repository-pattern-create');
    }

    public function store(Request $request){
        $this->storeRepositoryPatternHelper->storeRepoPatterns($request);
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
        $reqData        = array(
            'name'                  => $name,
            'description'           => $description,
            'repository_pattern'    => $repository_pattern
        );
        $this->updateRepositoryPatternHelper->updateRepoPatterns($reqData);
        return back();
    }

    public function destroy(Request $request,RepositoryPattern $repository_pattern){
        $this->destroyRepositoryPatternHelper->deleteRepoPattern($repository_pattern);
        return back();
    }
}
