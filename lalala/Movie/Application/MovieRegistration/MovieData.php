<?php

declare(strict_types=1);

namespace Lalala\Movie\Application\MovieRegistration;

/**
 * A data structure of a move that is to be registered.
 */
final class MovieData
{
    /**
     * @var string
     */
    private $movieTitle;

    /**
     * @var int
     */
    private $screeningTime;

    public function __construct(
        string $movieTitle,
        int $screeningTime
    ) {
        $this->movieTitle = $movieTitle;
        $this->screeningTime = $screeningTime;
    }

    public function getMovieTitle(): string
    {
        return $this->movieTitle;
    }

    public function getScreeningTime(): int
    {
        return $this->screeningTime;
    }
}
