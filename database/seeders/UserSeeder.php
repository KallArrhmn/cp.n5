<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            // [
            //     'fullname' => 'Siswa',
            //     'username' => 'siswa',
            //     'email' => 'siswa@gmail.com',
            //     'password' => bcrypt('siswa123'),
            //     'role' => 'siswa'
            // ],
            [
                'fullname' => 'Guru',
                'username' => 'Guru',
                'email' => 'guru@gmail.com',
                'password' => bcrypt('guru123'),
                'role' => 'guru'
            ],
            [
                'fullname' => 'Kepala Sekolah',
                'username' => 'Kepsek',
                'email' => 'kepsek@gmail.com',
                'password' => bcrypt('kepsek123'),
                'role' => 'Kepala_Sekolah'
            ],
        ]);
    }
}