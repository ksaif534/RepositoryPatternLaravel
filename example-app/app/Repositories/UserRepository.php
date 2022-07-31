<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Hash;

class UserRepository implements UserRepositoryInterface{
    public function fetchUserRecordByNameOrEmail($login){
        return User::where('name',$login)
                        ->orWhere('email',$login)
                        ->first();
    }

    public function storeRegistrationData($userName,$email,$password){
        return User::firstOrCreate([
            'name'      => $userName,
            'email'     => $email,
            'password'  => Hash::make($password)
        ]);
    }
}