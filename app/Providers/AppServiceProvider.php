<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
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
        $data = Http::get('http://api.openweathermap.org/data/2.5/weather?lat=15.8436&lon=-96.3267&units=metric&appid=61e7dde1d463ac25a4d7e1a0fdaa2dc8');
        $weather = $data ->json();
        view()->share('weather', $weather);
        
    }


    
}
