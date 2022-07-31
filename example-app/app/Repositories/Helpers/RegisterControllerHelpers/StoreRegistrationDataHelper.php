<?php

namespace App\Repositories\Helpers\RegisterControllerHelpers;

use App\Interfaces\UserRepositoryInterface;

class StoreRegistrationDataHelper{

    private UserRepositoryInterface $userRepo;

    public function __construct(UserRepositoryInterface $userRepo){
        $this->userRepo = $userRepo;
    }

    public function storeRegData($request){
        $userName   = $request->get('name');
        $email      = $request->get('email');
        $password   = $request->get('password');
        $this->userRepo->storeRegistrationData($userName,$email,$password);
    }
}