<?php

namespace App\Http\CustomModels;

use Illuminate\Support\Collection;

class Restaurant
{
    private string $id;
    private string $name;
    private Location $location;
    private string $image_url;
    private string $review_count;
    private string $rating;
    private string $phone;
    private array $categories;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): Restaurant
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): Restaurant
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation(Location $location): Restaurant
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->image_url;
    }

    /**
     * @param string $image_url
     */
    public function setImageUrl(string $image_url): Restaurant
    {
        $this->image_url = $image_url;
        return $this;
    }

    /**
     * @return string
     */
    public function getReviewCount(): string
    {
        return $this->review_count;
    }

    /**
     * @param string $review_count
     */
    public function setReviewCount(string $review_count): Restaurant
    {
        $this->review_count = $review_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getRating(): string
    {
        return $this->rating;
    }

    /**
     * @param string $rating
     */
    public function setRating(string $rating): Restaurant
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): Restaurant
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return array
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param array $categories
     */
    public function setCategories(array $categories): Restaurant
    {
        $this->categories = $categories;
        return $this;
    }
    public function addCategory(Category $category): Restaurant
    {
        $this->categories[] = $category;
        return $this;
    }



}
