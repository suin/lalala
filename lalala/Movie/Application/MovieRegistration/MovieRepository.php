<?php

declare(strict_types=1);

namespace Lalala\Movie\Application\MovieRegistration;

use Lalala\Movie\Domain\Movie;
use Lalala\Movie\Domain\MovieId;

interface MovieRepository
{
    /**
     * Generate the next identity for a Movie entity.
     */
    public function nextIdentity(): MovieId;

    /**
     * Add the given movie to this movies collection.
     */
    public function add(Movie $movie): void;
}
