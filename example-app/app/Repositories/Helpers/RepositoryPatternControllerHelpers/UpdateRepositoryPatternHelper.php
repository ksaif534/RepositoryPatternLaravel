<?php

namespace App\Repositories\Helpers\RepositoryPatternControllerHelpers;

use App\Interfaces\RepositoryPatternRepositoryInterface;

class UpdateRepositoryPatternHelper{

    private RepositoryPatternRepositoryInterface $repositoryPatternRepo;

    public function __construct(RepositoryPatternRepositoryInterface $repositoryPatternRepo){
        $this->repositoryPatternRepo = $repositoryPatternRepo;
    }

    public function updateRepoPatterns($input){
        $this->repositoryPatternRepo->updateRepositoryPattern($input['repository_pattern'],$input['name'],$input['description']);
    }
}