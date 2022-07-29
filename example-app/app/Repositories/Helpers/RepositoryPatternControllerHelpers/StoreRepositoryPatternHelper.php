<?php

namespace App\Repositories\Helpers\RepositoryPatternControllerHelpers;

use App\Interfaces\RepositoryPatternRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class StoreRepositoryPatternHelper{

    protected RepositoryPatternRepositoryInterface $repositoryPatternRepo;

    public function __construct(RepositoryPatternRepositoryInterface $repositoryPatternRepo){
        $this->repositoryPatternRepo = $repositoryPatternRepo;
    }

    public function storeRepoPatterns($request){
        $name           = $request->get('repository_name');
        $description    = $request->get('repository_description');
        $this->repositoryPatternRepo->storeRepositoryPatternRecord($name,$description,Auth::user());
    }
}