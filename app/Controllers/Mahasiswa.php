<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function __construct()
    {
        $this->Mahasiswa = new MahasiswaModel();
    }

    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa->getData();
        return view('mahasiswa/list', $data);
    }

    public function create()
    {
        return view('mahasiswa/create');
    }

    public function store()
    {
        $nama=$this->request->getVar('nama_mahasiswa');
        $tanggalLahir=$this->request->getVar('tanggal_lahir');
        $JenisKelamin=$this->request->getVar('jenis_kelamin');
        $programStudi=$this->request->getVar('program_studi');
        $alamat=$this->request->getVar('alamat');

        $data=[
            'nama_mahasiswa'=>$nama,
            'tanggal_lahir'=>$tanggalLahir,
            'jenis_kelamin'=>$JenisKelamin,
            'program_studi'=>$programStudi,
            'alamat'=>$alamat
        ];

        $this->Mahasiswa->save($data);
        return redirect()->to('/mahasiswa');

    }

    public function edit($id)
    {
        $data['mahasiswa'] = $this->Mahasiswa->find($id);
        return view('mahasiswa/update', $data);
    }

    public function update()
    {
        $nim = $this->request->getVar('nim');
        $nama = $this->request->getVar('nama_mahasiswa');
        $tanggalLahir = $this->request->getVar('tanggal_lahir');
        $JenisKelamin = $this->request->getVar('jenis_kelamin');
        $programStudi = $this->request->getVar('program_studi');
        $alamat = $this->request->getVar('alamat');

        $data = [
            'nim' => $nim,
            'nama_mahasiswa' => $nama,
            'tanggal_lahir' => $tanggalLahir,
            'jenis_kelamin' => $JenisKelamin,
            'program_studi' => $programStudi,
            'alamat' => $alamat
        ];

        $this->Mahasiswa->save($data);
        return redirect()->to('/mahasiswa');
    }
    
    public function delete($id)
    {
        $this->Mahasiswa->delete($id);
        return redirect()->to('/mahasiswa');
    }

}
