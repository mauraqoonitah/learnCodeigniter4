<?php

namespace App\Controllers;

use App\Models\PeopleModel;

class People extends BaseController
{
    protected $peopleModel;
    public function __construct()
    {
        $this->peopleModel = new PeopleModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar people',
            // 'people' => $this->peopleModel->findAll()
            'people' => $this->peopleModel->paginate(6, 'people'),
            'pager' => $this->peopleModel->pager
        ];


        return view('people/index', $data);
    }
}
