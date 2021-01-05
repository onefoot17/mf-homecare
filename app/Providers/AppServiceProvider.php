<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Services
         */
        $this->app->bind('App\Services\Users\Contracts\UserServiceInterface', 'App\Services\Users\UserService');
        $this->app->bind('App\Services\Users\Contracts\CertnServiceInterface', 'App\Services\Users\CertnService');

        /**
         * Repositories
         */
        $this->app->bind('App\Repositories\Users\Contracts\UserRepositoryInterface', 'App\Repositories\Users\UserRepository');
        $this->app->bind('App\Repositories\Users\Contracts\SettingRepositoryInterface', 'App\Repositories\Users\SettingRepository');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
