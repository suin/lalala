<?php

declare(strict_types=1);

namespace Lalala\Movie\Adapter\Downstream\Laravel\Persistence;

use Lalala\Movie\Adapter\Downstream\Laravel\Persistence\Movie as MovieData;
use Lalala\Movie\Application\MovieRegistration\MovieRepository;
use Lalala\Movie\Domain\Movie;
use Lalala\Movie\Domain\MovieId;

final class LaravelMovieRepository implements MovieRepository
{
    public function nextIdentity(): MovieId
    {
        return new MovieId(\uniqid('movie-', true));
    }

    public function add(Movie $movie): void
    {
        $this->mapMovieEntityToMovieData($movie)->save();
    }

    private function mapMovieEntityToMovieData(Movie $movie): MovieData
    {
        $movieData = new MovieData();
        $movieData->movie_uuid = $movie->getMovieId()->getId();
        $movieData->title = $movie->getTitle()->getTitle();
        $movieData->screening_time =
            $movie->getScreeningTime()->getScreeningTime();
        return $movieData;
    }
}
