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
    private GetRepositoryPatternIndexHelper $getRepositoryPatternRepo;
    private StoreRepositoryPatternHelper $storeRepositoryPatternRepo;
    private UpdateRepositoryPatternHelper $updateRepositoryPatternRepo;
    private DestroyRepositoryPatternHelper $destroyRepositoryPatternRepo;

    public function __construct(GetRepositoryPatternIndexHelper $getRepositoryPatternRepo, StoreRepositoryPatternHelper $storeRepositoryPatternRepo, UpdateRepositoryPatternHelper $updateRepositoryPatternRepo, DestroyRepositoryPatternHelper $destroyRepositoryPatternRepo){
        $this->getRepositoryPatternRepo = $getRepositoryPatternRepo;
        $this->storeRepositoryPatternRepo = $storeRepositoryPatternRepo;
        $this->updateRepositoryPatternRepo = $updateRepositoryPatternRepo;
        $this->destroyRepositoryPatternRepo = $destroyRepositoryPatternRepo;
    }

    public function index(){
        $repoPatterns = $this->getRepositoryPatternRepo->getRepoPatterns();
        return view('repository-pattern-index',compact('repoPatterns'));
    }

    public function create(){
        return view('repository-pattern-create');
    }

    public function store(Request $request){
        $this->storeRepositoryPatternRepo->storeRepoPatterns($request);
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
        $this->updateRepositoryPatternRepo->updateRepoPatterns($reqData);
        return back();
    }

    public function destroy(Request $request,RepositoryPattern $repository_pattern){
        $this->destroyRepositoryPatternRepo->deleteRepoPattern($repository_pattern);
        return back();
    }
}
