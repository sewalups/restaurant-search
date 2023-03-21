<?php

namespace App\Http\Restaurants;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class YelpRestaurantRepository implements RestaurantRepository
{

    public function fetchByLocationAndTerm(string $location, string $term): Collection
    {
        $response = Http::withToken(env("YELP_TOKEN"))->get(env('YELP_URL').'search',[
            'location' => $location,
            'term' => $term
        ]);
        $collection =  $response->collect("businesses");

        return $collection->map(function ($restaurant){
            return [
                "id"=> $restaurant['id'],
                "name" => $restaurant['name'],
                "location" => [
                    "address1" => $restaurant['location']['address1'],
                    "address2" => $restaurant['location']['address2'],
                    "city" => $restaurant['location']['city'],
                    "state" => $restaurant['location']['state'],
                    "zip" => $restaurant['location']['zip_code']
                ],
                "image_url" => $restaurant['image_url'],
                "review_count" => $restaurant['review_count'],
                "rating" => $restaurant['rating'],
                "phone" => $restaurant['phone'],
                "categories" => $restaurant['categories']
            ];
        });
    }

    public function fetchById(string $id): object
    {
        $response = Http::withToken(env("YELP_TOKEN"))->get(env('YELP_URL').$id);
        return $response->object();
    }
}
