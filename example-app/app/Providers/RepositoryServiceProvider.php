<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//Interfaces
use App\Interfaces\UserRepositoryInterface;
use App\Interfaces\RepositoryPatternRepositoryInterface;
//Repositories
use App\Repositories\UserRepository;
use App\Repositories\RepositoryPatternRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(RepositoryPatternRepositoryInterface::class, RepositoryPatternRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
