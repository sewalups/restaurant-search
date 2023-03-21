<?php

namespace App\Http\Controllers;

use App\Events\RestaurantAdded;
use App\Events\RestaurantsAdded;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Event;

class RestaurantController extends Controller
{

    public function index(Request $request): Response{
        Event::dispatch(new RestaurantsAdded($request));
        $key = $request->location.' '.$request->term;
        $restaurants = cache($key);
        return response($restaurants);
    }

    public function fetchById($id):Response{
        Event::dispatch(new RestaurantAdded($id));
        $restaurant = cache($id);
        return response(['data' => $restaurant]);
    }
}
