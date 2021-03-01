<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Belajar CI 4'

        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | Belajar CI 4'

        ];
        return view('pages/home', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | Belajar CI 4',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. bintara',
                    'kota' => 'bekasi'

                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. rawamawngun',
                    'kota' => 'jakarta'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
