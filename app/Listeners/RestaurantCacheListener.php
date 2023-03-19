<?php

namespace App\Listeners;

use App\Events\RestaurantAdded;
use App\Http\Restaurants\RestaurantRepository;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Cache;

class RestaurantCacheListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(RestaurantAdded $event)
    {
        //
        if(!Cache::has($event->id)){
            Cache::put($event->id, $this->repository->fetchById($event->id), now()->addMinutes(5));
        }
    }
}
