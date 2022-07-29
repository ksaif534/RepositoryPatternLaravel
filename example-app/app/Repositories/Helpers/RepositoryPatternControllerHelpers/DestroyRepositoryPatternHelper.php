<?php

namespace App\Repositories\Helpers\RepositoryPatternControllerHelpers;

use App\Interfaces\RepositoryPatternRepositoryInterface;

class DestroyRepositoryPatternHelper{

    private RepositoryPatternRepositoryInterface $repositoryPatternRepo;

    public function __construct(RepositoryPatternRepositoryInterface $repositoryPatternRepo){
        $this->repositoryPatternRepo = $repositoryPatternRepo;
    }

    public function deleteRepoPattern($repository){
        return $this->repositoryPatternRepo->destroyRepositoryPattern($repository);
    }
}