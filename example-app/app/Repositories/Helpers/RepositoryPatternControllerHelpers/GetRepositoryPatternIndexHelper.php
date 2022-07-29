<?php

namespace App\Repositories\Helpers\RepositoryPatternControllerHelpers;

use App\Interfaces\RepositoryPatternRepositoryInterface;

class GetRepositoryPatternIndexHelper{

    protected $repositoryPatternRepo;

    public function __construct(RepositoryPatternRepositoryInterface $repositoryPatternRepo){
        $this->repositoryPatternRepo = $repositoryPatternRepo;
    }

    public function getRepoPatterns(){
        $repoPatterns = $this->repositoryPatternRepo->getAllRepositoryPatterns();
        return $repoPatterns;
    }
}