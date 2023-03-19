<?php

namespace App\Listeners;

use App\Events\RestaurantsAdded;
use App\Http\Restaurants\RestaurantRepository;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Cache;

class RestaurantsCacheListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(protected RestaurantRepository $repository)
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param RestaurantsAdded $event
     * @return void
     */
    public function handle(RestaurantsAdded $event)
    {
        $key = $event->request->location.' '.$event->request->term;
        //
        if(!Cache::has($key)){
            Cache::put($key, $this->repository->fetchByLocationAndTerm($event->request->location, $event->request->term),now()->addMinutes(5));
        }

    }
}
