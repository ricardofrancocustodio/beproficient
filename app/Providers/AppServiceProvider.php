<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\TestObserver;
use App\Test;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Test::observe(TestObserver::class);
    }

}
