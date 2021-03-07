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

        // jika movie tidak ada di tabel
        if (empty($data['movie'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Movie ' . $slug . ' Tidak ditemukan.');
        }
        return view('movie/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Detail Movie',
            'validation' => \Config\Services::validation()

        ];
        return view('movie/create', $data);
    }

    public function save()
    {

        // cek validasi input
        if (!$this->validate([
            'judul' => [
                'rules'  => 'required|is_unique[movie.judul]',
                'errors' => [
                    'required' => '{field} movie harus diisi.',
                    'is_unique' => '{field} movie sudah terdaftar!'
                ]
            ],



            'poster' => 'required',
            'overview' => 'required',
            'kategori' => 'required',
            'tahun' => 'required|integer|exact_length[4]'

        ])) {
            //ambil pesan kesalahan
            $validation = \Config\Services::validation();
            // dd($validation);

            return redirect()->to('/movie/create')->withInput()->with('validation', $validation);
        }

        // dd($this->request->getVar());

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->movieModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'poster' => $this->request->getVar('poster'),
            'overview' => $this->request->getVar('overview'),
            'kategori' => $this->request->getVar('kategori'),
            'tahun' => $this->request->getVar('tahun'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/movie');
    }
}
