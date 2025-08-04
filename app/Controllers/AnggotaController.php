<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;

class AnggotaController extends BaseController
{
    protected $Modelanggota;

    public function __construct()
    {
        $this->Modelanggota = new AnggotaModel(); // Model langsung connect ke DB sesuai config
    }


    public function index()
    {
        $data['anggota'] = $this->Modelanggota->findAll();
        return view('anggota/index', $data);
    }

    public function tambah()
    {
        return view('anggota/tambah');
    }

    public function simpan()
    {
        $model = new AnggotaModel();

        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        ];

        $model->insert($data);
        return redirect()->to('/anggota');
    }

    public function edit($id)
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->find($id);
        return view('anggota/edit', $data);
    }

    public function update($id)
    {
        $model = new AnggotaModel();

        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        ];

        $model->update($id, $data);
        return redirect()->to('/anggota')->with('success', 'Data berhasil diupdate');
    }

    public function hapus($id)
    {
        $model = new AnggotaModel();

        $data = $model->find($id);
        if (!$data) {
            return redirect()->to('/anggota')->with('error', 'Data tidak ditemukan');
        }

        $model->delete($id);
        return redirect()->to('/anggota')->with('success', 'Data berhasil dihapus');
    }
}