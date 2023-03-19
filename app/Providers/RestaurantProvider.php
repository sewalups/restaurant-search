<?php

namespace App\Providers;

use App\Http\Restaurants\RapidApiRestaurantRepository;
use App\Http\Restaurants\RestaurantRepository;
use App\Http\Restaurants\YelpRestaurantRepository;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RestaurantProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(RestaurantRepository::class,YelpRestaurantRepository::class);
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

    public function provides()
    {
        return [RestaurantRepository::class];
    }
}
