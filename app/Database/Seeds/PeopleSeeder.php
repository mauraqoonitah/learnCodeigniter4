<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PeopleSeeder extends Seeder
{
    // menjalankan atau mengisikan data kedalam tabel
    public function run()
    {
        $data = [
            [
                'nama' => 'Maura Qoonitah Putri',
                'alamat'    => 'Bintara 6',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama' => 'Adini',
                'alamat'    => 'Depok',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],

        ];

        // Using Query Builder
        $this->db->table('people')->insertBatch($data);

        // Simple Queries
        // $this->db->query("INSERT INTO people (nama, alamat) VALUES(:nama:, :alamat:)", $data);

    }
}
