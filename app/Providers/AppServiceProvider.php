<?php

namespace App\Providers;

use App\Models\Team;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer('partials.activeusers', function ($view) {
        //     $view->with('activeusers', User::activeusers());
        // });

        //$teamsWithNews = Team::has('news')->get();
        
        view()->composer('partials.sidebar', function($view){
            $view->with('teamsWithNews', Team::has('news')->get());
        });
    }
}
