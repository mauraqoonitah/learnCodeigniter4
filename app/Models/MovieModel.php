<?php

namespace App\Models;

use CodeIgniter\Model;

class movieModel extends Model
{
    protected $table      = 'movie';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'poster', 'overview', 'kategori', 'tahun'];

    public function getMovie($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
