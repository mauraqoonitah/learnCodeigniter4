<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PeopleSeeder extends Seeder
{
    // menjalankan atau mengisikan data kedalam tabel
    public function run()
    {
        $data = [
            'nama' => 'Maura Qoonitah Putri',
            'alamat'    => 'Bintara 6'
        ];

        // Simple Queries
        $this->db->query("INSERT INTO people (nama, alamat) VALUES(:nama:, :alamat:)", $data);

        // // Using Query Builder
        // $this->db->table('users')->insert($data);
    }
}
