<?php

namespace App\Providers;
use View;
use App\user;
use App\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       //View::share('name' ,'Farid mia');
        View::composer('front-end.includes.header',function($view){
            $view->with('categories',Category::where('publication_status',1)->get());

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
