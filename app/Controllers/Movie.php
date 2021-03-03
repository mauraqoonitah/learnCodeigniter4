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
        // $movie = $this->movieModel->findAll();
        // dd($movie);

        $data = [
            'title' => 'Daftar movie',
            'movie' => $this->movieModel->getMovie()
        ];


        return view('movie/index', $data);
    }

    public function detail($slug)
    {
        // $movie = $this->movieModel->where(['slug' => $slug])->first();
        // echo $slug;

        // $movie = $this->movieModel->getMovie($slug);
        // dd($movie);

        $data = [
            'title' => 'Detail Movie',
            'movie' => $this->movieModel->getMovie($slug)
        ];
        return view('movie/detail', $data);
    }
}
