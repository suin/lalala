<?php

declare(strict_types=1);

namespace Lalala\Movie\Domain;

class Movie
{
    /**
     * @var MovieId
     */
    private $movieId;

    /**
     * @var MovieTitle
     */
    private $title;

    /**
     * @var ScreeningTime
     */
    private $screeningTime;

    public function __construct(
        MovieId $movieId,
        MovieTitle $title,
        ScreeningTime $screeningTime
    ) {

        $this->movieId = $movieId;
        $this->title = $title;
        $this->screeningTime = $screeningTime;
    }

    public function getMovieId(): MovieId
    {
        return $this->movieId;
    }

    public function getTitle(): MovieTitle
    {
        return $this->title;
    }

    public function getScreeningTime(): ScreeningTime
    {
        return $this->screeningTime;
    }
}
