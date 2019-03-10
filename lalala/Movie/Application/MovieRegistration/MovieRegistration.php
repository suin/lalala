<?php

declare(strict_types=1);

namespace Lalala\Movie\Application\MovieRegistration;

use Lalala\Movie\Domain\Movie;
use Lalala\Movie\Domain\MovieTitle;
use Lalala\Movie\Domain\ScreeningTime;

/**
 * A use-case interactor that registers a movie.
 */
final class MovieRegistration implements MovieRegistrationInput
{
    /**
     * @var MovieRepository
     */
    private $movieRepository;

    public function __construct(MovieRepository $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function registerMovie(
        MovieData $movieData,
        MovieRegistrationOutput $output
    ): void {
        $movieEntity = $this->mapMovieDataToMovieEntity($movieData);
        $this->movieRepository->add($movieEntity);
        $output->setRegisteredMovieId($movieEntity->getMovieId()->getId());
    }

    private function mapMovieDataToMovieEntity(MovieData $movieData): Movie
    {
        return new Movie(
            $this->movieRepository->nextIdentity(),
            new MovieTitle($movieData->getMovieTitle()),
            new ScreeningTime($movieData->getScreeningTime())
        );
    }
}
