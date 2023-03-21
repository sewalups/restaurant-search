# Restaurant Search Backend Application
This is a backend application leveraging Yelp Api to offer 2 endpoints for listing restaurants by location and term and retrieving a restaurant
by a yelp id

## Installation
After cloning this application, you can use your terminal to move to its directory
```ssh
cd ./restaurant-search
```
Assuming you have PHP and Composer installed on your local machine, you then proceed to install all composer dependencies
```ssh
composer install
```
After the dependencies have been installed, make sure you rename the ``.env.example`` file to ``.env``. This is to make
sure  that all environment variables have been set. especially look out for the ``YELP_TOKEN`` and the ``YELP_URL`` variables
as they are very vital for this application.

After installing the composer dependencies, you can then run tests at this point if you so with using the following artisan command

```ssh
php artisan test
```
After that has been that, you can then proceed to serve the application on your local machine using the following command
```ssh
php artisan serve
```
Chances are high that it will default serve the application at ``http://127.0.0.1:8000``

> Note: you can then proceed to wire up the front end with this endpoint as its ``baseUrl``

## Prerequisites
- PHP
- Composer

#### Author
Sewalu Mukasa Steven
