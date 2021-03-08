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
            'title' => 'Form Tambah Data Movie',
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
            'overview' => 'required',
            'kategori' => 'required',
            'tahun' => 'required|integer|exact_length[4]',
            'poster' => [
                'rules' => 'max_size[poster,1024]|is_image[poster]|mime_in[poster,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'is_image' => 'Bukan file tipe gambar.',
                    'mime_in' => 'Bukan file tipe gambar',
                    'max_size' => 'Ukuran gambar terlalu besar',
                ]

            ]

        ])) {
            //ambil pesan kesalahan
            return redirect()->to('/movie/create')->withInput();
        }
        // ambil gambar poster
        $filePoster = $this->request->getFile('poster');

        // cek jika gambar tidak diunggah
        if ($filePoster->getError() == 4) {
            $namaPoster = 'default.jpg';
        } else {
            // generate nama poster random
            $namaPoster = $filePoster->getRandomName();
            // pindahkan file ke folder img
            $filePoster->move('img',  $namaPoster);
        }
        // // ambil nama file poster yg diunggah
        // $namaPoster = $filePoster->getName();



        // dd($this->request->getVar());

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->movieModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'overview' => $this->request->getVar('overview'),
            'kategori' => $this->request->getVar('kategori'),
            'tahun' => $this->request->getVar('tahun'),
            'poster' => $namaPoster
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/movie');
    }

    public function delete($id)
    {
        // cari gambar poster berdasarkan id
        $movie = $this->movieModel->find($id);

        // cek jika file gambarnya default.jpg
        if ($movie['poster'] != 'default.jpg') {
            // hapus gambar
            unlink('img/' . $movie['poster']);
        }
        $this->movieModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/movie');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Movie',
            'validation' => \Config\Services::validation(),
            'movie' => $this->movieModel->getMovie($slug)

        ];
        return view('movie/edit', $data);
    }

    public function update($id)
    {

        //cek judul 
        $movieOld = $this->movieModel->getMovie($this->request->getVar('slug'));
        if ($movieOld['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[movie.judul]';
        }

        // cek validasi input
        if (!$this->validate([
            'judul' => [
                'rules'  => $rule_judul,
                'errors' => [
                    'required' => '{field} movie harus diisi.',
                    'is_unique' => '{field} movie sudah terdaftar!'
                ]
            ],

            'overview' => 'required',
            'kategori' => 'required',
            'tahun' => 'required|integer|exact_length[4]',
            'poster' => [
                'rules' => 'max_size[poster,1024]|is_image[poster]|mime_in[poster,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'is_image' => 'Bukan file tipe gambar.',
                    'mime_in' => 'Bukan file tipe gambar',
                    'max_size' => 'Ukuran gambar terlalu besar',
                ]

            ]

        ])) {
            //ambil pesan kesalahan
            // $validation = \Config\Services::validation();
            // return redirect()->to('/movie/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('/movie/edit/' . $this->request->getVar('slug'))->withInput();
        }


        // ambil nama file poster
        $filePoster = $this->request->getFile('poster');

        // cek gambar apkaah tetap gambar lama
        if ($filePoster->getError() == 4) {
            $namaPoster = $this->request->getVar('posterLama');
        } else {
            // generate nama file random
            $namaPoster = $filePoster->getRandomName();
            // pindahkan gambar 
            $filePoster->move('img', $namaPoster);
            // hapus file yang lama
            unlink('img/' . $this->request->getVar('posterLama'));
        }



        // dd($this->request->getVar());

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->movieModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'overview' => $this->request->getVar('overview'),
            'kategori' => $this->request->getVar('kategori'),
            'tahun' => $this->request->getVar('tahun'),
            'poster' => $namaPoster,
        ]);


        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/movie');
    }
}
