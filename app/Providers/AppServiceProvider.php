<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Lalala\Movie\Adapter\Downstream\Laravel\Persistence\LaravelMovieRepository;
use Lalala\Movie\Application\MovieRegistration\MovieRegistration;
use Lalala\Movie\Application\MovieRegistration\MovieRegistrationInput;
use Lalala\Movie\Application\MovieRegistration\MovieRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            MovieRegistrationInput::class,
            MovieRegistration::class
        );
        $this->app->bind(
            MovieRepository::class,
            LaravelMovieRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
