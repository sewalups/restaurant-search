<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RestaurantResourceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response_on_accessing_all_restaurants_by_supplied_location_and_term()
    {
        $location = "New York";
        $term = "pizza";
        $response = $this->get('/api/restaurants?location='.$location.'&term='.$term);

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_response_on_accessing_a_single_restaurant_by_yelp_id()
    {
        $id = "n601y41nOORUePsM7KsuaA"; //not a very efficient way of doing this, coz i cannot mock it since am not using internal state for this app
        $response = $this->get('/api/restaurants/'.$id);

        $response->assertStatus(200);
    }
}
