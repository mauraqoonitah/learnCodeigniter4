<?php

namespace App\Models;

use CodeIgniter\Model;

class PeopleModel extends Model
{
    protected $table      = 'people';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'alamat'];

    public function search($keyword)
    {
        return $this->table('people')->like('nama', $keyword)->orLike('alamat', $keyword);
    }
}
