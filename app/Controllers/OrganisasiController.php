<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrganisasiModel;

class OrganisasiController extends BaseController
{
    protected $OrganisasiModel;
    public function __construct()
    {
        $this->OrganisasiModel = new OrganisasiModel();
    }
    public function index()
    {
        $data['organisasi'] = $this->OrganisasiModel->findAll();
        return view('organisasi/index', $data);
    }
    public function tambah()
    {
        return view('organisasi/tambah');
    }

    public function simpan()
    {
        $model = new OrganisasiModel(); 

        $data = [
            'kode' => $this->request->getPost('kode'),
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $model->insert($data);
        return redirect()->to('/organisasi')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $model = new OrganisasiModel();
        $data['organisasi'] = $model->find($id);

        return view('organisasi/edit', $data);
    }

    public function update($id)
    {
        $model = new OrganisasiModel();

        $data = [
            'kode' => $this->request->getPost('kode'),
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $model->update($id, $data); //
        return redirect()->to('/organisasi')->with('success', 'Data berhasil diupdate');
    }

    public function hapus($id)
    {
        // Panggil model
    $model = new OrganisasiModel();

    // Cek dulu datanya ada atau nggak
    $data = $model->find($id);
    if (!$data) {
        return redirect()->to('/organisasi')->with('error', 'Data tidak ditemukan');
    }

    // Hapus datanya
    $model->delete($id);

    // Redirect balik dengan pesan sukses
    return redirect()->to('/organisasi')->with('success', 'Data berhasil dihapus');
    }
}