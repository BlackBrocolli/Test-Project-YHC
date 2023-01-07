<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\ViewMahasiswaModel;
use App\Models\ProdiModel;

class Home extends BaseController
{
    public function index()
    {

        if (session()->get('logged_in') == false) { // jika belum login
            return redirect()->to('/login'); // kembali ke login
        }

        $mahasiswa = new ViewMahasiswaModel();
        $data['mahasiswa'] = $mahasiswa->orderBy('nrp', 'asc')->findAll();

        $data['title'] = 'Mahasiswa';
        return view('home', $data);
    }

    public function view_tambah()
    {
        $prodi = new ProdiModel();
        $data['prodi'] = $prodi->orderBy('id_prodi', 'asc')->findAll();

        $data['title'] = 'Tambah Mahasiswa';
        return view('tambah_mahasiswa', $data);
    }

    public function createmahasiswa()
    {
        $mahasiswa = new MahasiswaModel();

        $result = $mahasiswa->insert([
            'nrp' => $this->request->getPost("nrp"),
            'nama_mahasiswa' => $this->request->getPost("nama_mahasiswa"),
            'id_prodi' => $this->request->getPost("select_prodi"),
            'semester' => $this->request->getPost("semester"),
            'kelas' => $this->request->getPost("select_kelas"),
            'tahun_angkatan' => $this->request->getPost("angkatan"),
        ]);

        return redirect()->to("/home")
            ->with('info', 'Berhasil menambahkan data');
    }

    public function editmahasiswa($nrp)
    {
        $data['title'] = 'Edit Mahasiswa';
        $mahasiswa = new MahasiswaModel();
        $data['edit'] = $mahasiswa->find($nrp);
        $prodi = new ProdiModel();
        $data['prodi'] = $prodi->orderBy('id_prodi', 'asc')->findAll();

        return view('update_mahasiswa', $data);
    }

    public function updatemahasiswa($nrp)
    {
        $mahasiswa = new MahasiswaModel();

        $result = $mahasiswa->update($nrp, [
            'nama_mahasiswa' => $this->request->getPost("nama_mahasiswa"),
            'id_prodi' => $this->request->getPost("select_prodi"),
            'semester' => $this->request->getPost("semester"),
            'kelas' => $this->request->getPost("select_kelas"),
            'tahun_angkatan' => $this->request->getPost("angkatan"),
        ]);

        return redirect()->to('/home')
            ->with('info', 'Berhasil mengupdate data');
    }
}
