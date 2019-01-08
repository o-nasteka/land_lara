<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Response;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
//        Blade::directive('myDir', function ($var){
//            return "<h1>New Derictive - $var</h1>";
//        });

        Response::macro('myRes', function ($value){
            return Response::make($value);
        });

        // dump SQL Query
        DB::listen(function ($query) {
            dump($query->sql);
            dump($query->bindings);
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
