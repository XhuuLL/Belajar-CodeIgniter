<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalC extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(['JadwalModel', 'MatkulModel', 'UserModel']);
        if (!$this->session->userdata('id')) { redirect('Auth'); }
    }

    public function index() {
        $data['jadwal'] = $this->JadwalModel->get_all();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/notif');
        $this->load->view('akademik/jadwal', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['matkul'] = $this->MatkulModel->get_all();
        $data['dosen'] = $this->JadwalModel->get_dosen();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('akademik/tambah_jadwal', $data);
        $this->load->view('templates/footer');
    }

    public function aksi_tambah() {
        $data = [
            'id_matkul'   => $this->input->post('id_matkul'),
            'nidn'        => $this->input->post('nidn'),
            'hari'        => $this->input->post('hari'),
            'jam_mulai'   => $this->input->post('jam_mulai'),
            'jam_selesai' => $this->input->post('jam_selesai'),
            'ruangan'     => $this->input->post('ruangan')
        ];
        $this->JadwalModel->insert_data($data);
        $this->session->set_flashdata('success', 'Jadwal berhasil ditambahkan!');
        redirect('JadwalC');
    }

    public function edit($id) {
        $data['jadwal'] = $this->JadwalModel->get_by_id($id);
        $data['matkul'] = $this->MatkulModel->get_all();
        $data['dosen'] = $this->JadwalModel->get_dosen();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('akademik/edit_jadwal', $data);
        $this->load->view('templates/footer');
    }

    public function aksi_edit() {
        $id = $this->input->post('id_jadwal');
        $data = [
            'id_matkul'   => $this->input->post('id_matkul'),
            'nidn'        => $this->input->post('nidn'),
            'hari'        => $this->input->post('hari'),
            'jam_mulai'   => $this->input->post('jam_mulai'),
            'jam_selesai' => $this->input->post('jam_selesai'),
            'ruangan'     => $this->input->post('ruangan')
        ];
        $this->JadwalModel->update_data(['id_jadwal' => $id], $data);
        $this->session->set_flashdata('success', 'Jadwal berhasil diperbarui!');
        redirect('JadwalC');
    }

    public function hapus($id) {
        $this->JadwalModel->delete_data(['id_jadwal' => $id]);
        $this->session->set_flashdata('success', 'Jadwal berhasil dihapus!');
        redirect('JadwalC');
    }
}