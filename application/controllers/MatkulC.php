<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MatkulC extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(['MatkulModel', 'ProdiModel']);
        if (!$this->session->userdata('id')) { redirect('Auth'); }
    }

    public function index() {
        $data['matkul'] = $this->MatkulModel->get_all();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/notif');
        $this->load->view('akademik/matkul', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['prodi'] = $this->ProdiModel->get_all();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('akademik/tambah_matkul', $data);
        $this->load->view('templates/footer');
    }

    public function aksi_tambah() {
        $data = [
            'kode_matkul' => $this->input->post('kode_matkul'),
            'nama_matkul' => $this->input->post('nama_matkul'),
            'sks'         => $this->input->post('sks'),
            'semester'    => $this->input->post('semester'),
            'id_prodi'    => $this->input->post('id_prodi')
        ];
        $this->MatkulModel->insert_data($data);
        $this->session->set_flashdata('success', 'Mata Kuliah berhasil ditambah!');
        redirect('MatkulC');
    }

    public function edit($id) {
    // Ambil data matkul berdasarkan ID dan semua data prodi
    $data['matkul'] = $this->MatkulModel->get_by_id($id);
    $data['prodi']  = $this->ProdiModel->get_all();

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/notif');
    $this->load->view('akademik/edit_matkul', $data);
    $this->load->view('templates/footer');
}

public function aksi_edit() {
    $id = $this->input->post('id_matkul');
    $data = [
        'kode_matkul' => $this->input->post('kode_matkul'),
        'nama_matkul' => $this->input->post('nama_matkul'),
        'sks'         => $this->input->post('sks'),
        'semester'    => $this->input->post('semester'),
        'id_prodi'    => $this->input->post('id_prodi')
    ];

    $this->MatkulModel->update_data(['id_matkul' => $id], $data);
    $this->session->set_flashdata('success', 'Data Mata Kuliah berhasil diperbarui!');
    redirect('MatkulC');
}

    public function hapus($id) {
        $this->MatkulModel->delete_data(['id_matkul' => $id]);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('MatkulC');
    }
}