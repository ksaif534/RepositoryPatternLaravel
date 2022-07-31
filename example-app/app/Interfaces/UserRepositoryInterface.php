<?php

namespace App\Interfaces;

interface UserRepositoryInterface{
    public function fetchUserRecordByNameOrEmail($login);
    public function storeRegistrationData($userName,$email,$password);
}