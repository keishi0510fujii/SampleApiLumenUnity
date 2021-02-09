<?php

namespace App\Providers;

use App\Infrastructures\Eloquent\GetUserAbilityRepository;
use App\Repositories\IGetUserAbilityRepository;
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
        $this->app->singleton(IGetUserAbilityRepository::class, function($app){
            return new GetUserAbilityRepository();
        });
    }
}
