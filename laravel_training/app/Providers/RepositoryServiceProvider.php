<?php

namespace App\Providers;

use App\Interfaces\TaskRepositoryInterface;
use App\Repositories\TaskRepository;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TaskRepositoryInterface::class, TaskRepository::class);
        $this->app->bind(userRepositoryInterface::class, UserRepository::class);
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
