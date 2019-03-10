<?php

declare(strict_types=1);

namespace Lalala\Movie\Application\MovieRegistration;

/**
 * The input port of the use-case that registers a given movie.
 */
interface MovieRegistrationInput
{
    /**
     * Register a given movie.
     */
    public function registerMovie(
        MovieData $movieData,
        MovieRegistrationOutput $output
    ): void;
}
