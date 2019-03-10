<?php

declare(strict_types=1);

namespace Lalala\Movie\Application\MovieRegistration;

/**
 * The output port of the use-case that registers a given movie.
 */
interface MovieRegistrationOutput
{
    /**
     * Set the move ID that has been registered.
     */
    public function setRegisteredMovieId(string $movieId): void;
}
