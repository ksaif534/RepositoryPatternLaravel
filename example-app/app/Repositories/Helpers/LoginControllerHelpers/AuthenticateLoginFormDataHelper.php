<?php

namespace App\Repositories\Helpers\LoginControllerHelpers;

use App\Interfaces\UserRepositoryInterface;

class AuthenticateLoginFormDataHelper{

    private UserRepositoryInterface $userRepo;

    public function __construct(UserRepositoryInterface $userRepo){
        $this->userRepo = $userRepo;
    }

    public function authenticateLoginFormData($request){
        $login      = $request->get('login');
        $password   = $request->get('password');
        $query      = $this->userRepo->fetchUserRecordByNameOrEmail($login);
        $col_name   = '';
        $col_value  = '';
        if($query){
            if(filter_var($login, FILTER_VALIDATE_EMAIL)){
                $col_name   = 'email';
                $col_value  = $query->email;
            }elseif(preg_match("/[a-zA-Z0-9]/",$login)){
                $col_name   = 'name';
                $col_value  = $query->name;
            }else{
                
            }
            $remember       = $request->has('remember') && $request->remember ? $request->remember : false;
            $credentials    = [
                $col_name   => $col_value,
                'password'  => $password
            ]; 
            if (Auth::attempt($credentials,$remember)) {
                return redirect()->route('repository-pattern.index');
            }else{
                return back();
            }
        }else{
            return back();
        }
    }
}