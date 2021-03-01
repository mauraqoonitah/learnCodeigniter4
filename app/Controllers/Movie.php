<?php

namespace App\Controllers;

use App\Models\movieModel;

class Movie extends BaseController
{
    protected $movieModel;
    public function __construct()
    {
        $this->movieModel = new MovieModel();
    }
    public function index()
    {
        $movie = $this->movieModel->findAll();
        // dd($movie);

        $data = [
            'title' => 'Daftar movie',
            'movie' => $movie
        ];


        return view('movie/index', $data);
    }
}
