<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // [
            //     'nim'           => '1234567890',
            //     'nama_mahasiswa' => 'John Doe',
            //     'tanggal_lahir' => '2000-01-01',
            //     'jenis_kelamin' => 'L',
            //     'program_studi' => 'Teknik Informatika',
            //     'alamat'        => 'Jl. Contoh Alamat No. 1',
            // ],
            // [
            //     'nim'           => '0987654321',
            //     'nama_mahasiswa' => 'Jane Smith',
            //     'tanggal_lahir' => '1999-05-15',
            //     'jenis_kelamin' => 'P',
            //     'program_studi' => 'Sistem Informasi',
            //     'alamat'        => 'Jl. Contoh Alamat No. 2',
            // ],
            // [
            //     'nim'           => '2042101817',
            //     'nama_mahasiswa' => 'Jan kon',
            //     'tanggal_lahir' => '1999-05-15',
            //     'jenis_kelamin' => 'P',
            //     'program_studi' => 'Sistem Informasi',
            //     'alamat'        => 'Jl. Contoh Alamat No. 2',
            // ],
            [
                'nim'           => '2373736623',
                'nama_mahasiswa' => 'rudal kon',
                'tanggal_lahir' => '1999-05-15',
                'jenis_kelamin' => 'P',
                'program_studi' => 'Sistem Informasi',
                'alamat'        => 'Jl. Contoh Alamat No. 2',
            ],
        ];
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
