<?php

namespace App\Interfaces;

interface RepositoryPatternRepositoryInterface{
    public function getAllRepositoryPatterns();
    public function storeRepositoryPatternRecord($name,$description,$authUser);
    public function updateRepositoryPattern($repository,$name,$description);
    public function destroyRepositoryPattern($repository);
}