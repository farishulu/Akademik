<?php namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';

    protected $allowedFields = [
        'nim',
        'nama_mahasiswa',
        'tanggal_lahir',
        'jenis_kelamin',
        'program_studi',
        'alamat'
    ];
    public function getData()
    {
        return $this->findAll();
    }
}
