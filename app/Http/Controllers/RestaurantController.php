<?php

namespace App\Http\Controllers;

use App\Events\RestaurantAdded;
use App\Events\RestaurantsAdded;
use App\Http\Restaurants\RestaurantRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class RestaurantController extends Controller
{

    //
    public function __construct(protected RestaurantRepository $repository)
    {

    }

    public function index(Request $request){
        Event::dispatch(new RestaurantsAdded($request));
        $key = $request->location.' '.$request->term;
        $restaurants = cache($key);
        return response($restaurants);
    }

    public function fetchById($id){
        Event::dispatch(new RestaurantAdded($id));
        $restaurant = cache($id);
        return response(['data' => $restaurant]);
    }
}
