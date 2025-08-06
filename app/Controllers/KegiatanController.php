<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KegiatanModel;

class KegiatanController extends BaseController
{
    protected $KegiatanModel;
    public function __construct()
    {
        $this->KegiatanModel = new KegiatanModel();
    }
    public function index()
    {
        $data['kegiatan'] = $this->KegiatanModel->findAll();
        return view('kegiatan/index', $data);
    }
    public function tambah()
    {
        return view('kegiatan/tambah');
    }

    public function simpan()
    {

        $model = new KegiatanModel();

        $data = [
            'judul_kegiatan' => $this->request->getPost('judul_kegiatan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'lokasi' => $this->request->getPost('lokasi'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $model->insert($data);
        return redirect()->to('/kegiatan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $model = new KegiatanModel();
        $data['kegiatan'] = $model->find($id);

        return view('kegiatan/edit', $data);
    }

    public function update($id)
    {
        $model = new KegiatanModel();

        $data = [
            'judul_kegiatan' => $this->request->getPost('judul_kegiatan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'lokasi' => $this->request->getPost('lokasi'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $model->update($id, $data); //
        return redirect()->to('/kegiatan')->with('success', 'Data berhasil diupdate');
    }

    public function hapus($id)
    {
        // Panggil model
        $model = new KegiatanModel();

        // Cek dulu datanya ada atau nggak
        $data = $model->find($id);
        if (!$data) {
            return redirect()->to('/kegiatan')->with('error', 'Data tidak ditemukan');
        }

        // Hapus datanya
        $model->delete($id);

        // Redirect balik dengan pesan sukses
        return redirect()->to('/kegiatan')->with('success', 'Data berhasil dihapus');
    }
}