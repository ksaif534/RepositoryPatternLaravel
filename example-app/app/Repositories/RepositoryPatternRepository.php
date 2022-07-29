<?php

namespace App\Repositories;

use App\Interfaces\RepositoryPatternRepositoryInterface;
use App\Models\RepositoryPattern;

class RepositoryPatternRepository implements RepositoryPatternRepositoryInterface{
    
    public function getAllRepositoryPatterns(){
        return RepositoryPattern::all();
    }

    public function storeRepositoryPatternRecord($name,$description,$authUser){
        return RepositoryPattern::firstOrCreate([
            'name' => $name,
            'description' => $description,
            'user_id' => $authUser->id
        ]);
    }

    public function updateRepositoryPattern($repository,$name,$description){
        return RepositoryPattern::where('id',$repository->id)->update([
            'name'          => $name,
            'description'   => $description
        ]);
    }

    public function destroyRepositoryPattern($repository){
        return RepositoryPattern::where('id',$repository->id)->delete();
    }
}