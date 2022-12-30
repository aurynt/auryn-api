<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'firstName' => 'Ikhtiar',
            'lastName' => 'Azra',
            'nis' => 8036,
            'absen' => 11,
            'addres' => 'Tawangmangu',
            'hobby' => 'Nonton Anime',
            'dreams' => 'Penulis Novel',
            'class' => 'Xi Ra',
            'photo' => 'azra.png',
            'major' => 'Rpl',
            'gender' => 'Laki laki'
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('Student')->insert($data);
    }
}
