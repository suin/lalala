<?php

declare(strict_types=1);

namespace Lalala\Movie\Adapter\Upstream\Laravel\Http;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Lalala\Movie\Application\MovieRegistration\MovieData;
use Lalala\Movie\Application\MovieRegistration\MovieRegistrationInput;

final class MovieController extends Controller
{
    /**
     * @var MovieRegistrationInput
     */
    private $movieRegistration;

    public function __construct(MovieRegistrationInput $movieRegistration)
    {
        $this->movieRegistration = $movieRegistration;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = new MovieData('アナと雪の女王', 109);
        $view = new RegisteredMoviePresenter();
        $this->movieRegistration->registerMovie($movie, $view);
        return $view->createView();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $result = $this->controller->register(
//            $request->input('name'),
//            $request->input('screeningTime'),
//        );


        return view('movie');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
