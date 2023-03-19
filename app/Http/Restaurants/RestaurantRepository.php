<?php

namespace App\Http\Restaurants;

use Illuminate\Support\Collection;

interface RestaurantRepository
{
    public function fetchByLocationAndTerm(string $location, string $term):Collection;
    public function fetchById(string $id):object;

}
