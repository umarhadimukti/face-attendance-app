<?php

namespace App\Providers;

use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryImplement;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerRepositories();
    }

    public function registerRepositories(): void
    {
        $this->app->bind(UserRepository::class, UserRepositoryImplement::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }


}
