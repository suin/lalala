<?php

declare(strict_types=1);

namespace Lalala\Movie\Adapter\Upstream\Laravel\Http;

use Illuminate\Contracts\View\View;
use Lalala\Movie\Application\MovieRegistration\MovieRegistrationOutput;

final class RegisteredMoviePresenter implements MovieRegistrationOutput
{
    /**
     * @var int
     */
    private $movieId;

    public function setRegisteredMovieId(string $movieId): void
    {
        $this->movieId = $movieId;
    }

    public function createView(): View
    {
        return view('movie', ['movieId' => $this->movieId]);
    }
}
