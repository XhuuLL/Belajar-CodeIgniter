<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaC extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('BeritaModel');
        if (!$this->session->userdata('id')) { redirect('Auth'); }
    }

    public function index() {
        $data['berita'] = $this->BeritaModel->get_utama();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/notif');
        $this->load->view('berita/utama', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/notif');
    $this->load->view('berita/tambah_berita');
    $this->load->view('templates/footer');
}

public function aksi_tambah() {
    $status = $this->input->post('status') ? $this->input->post('status') : 'publish';

    $data = [
        'judul'    => $this->input->post('judul'),
        'isi'      => $this->input->post('isi'),
        'kategori' => $this->input->post('kategori'),
        'tanggal'  => $this->input->post('tanggal'),
        'status'   => $status
    ];
    
    $this->BeritaModel->insert_data($data);
    $this->session->set_flashdata('success', 'Berita berhasil disimpan sebagai ' . $status);
    if($status == 'draft') {
        redirect('BeritaC/draft');
    } else {
        redirect('BeritaC/index');
    }
}

public function edit($id) {
    $data['berita'] = $this->BeritaModel->get_by_id($id);
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/notif');
    $this->load->view('berita/edit_berita', $data);
    $this->load->view('templates/footer');
}

public function aksi_edit() {
    $id = $this->input->post('id_berita');
    $berita_lama = $this->BeritaModel->get_by_id($id);

    $data = [
        'judul'    => $this->input->post('judul'),
        'isi'      => $this->input->post('isi'),
        'kategori' => $this->input->post('kategori'),
        'tanggal'  => $this->input->post('tanggal')
    ];

    $this->BeritaModel->update_data(['id_berita' => $id], $data);
    $this->session->set_flashdata('success', 'Perubahan berhasil disimpan!');
    if($berita_lama->status == 'draft') {
        redirect('BeritaC/draft');
    } else {
        redirect('BeritaC/index');
    }
}

public function hapus($id) {
    $this->BeritaModel->delete_data(['id_berita' => $id]);
    $this->session->set_flashdata('success', 'Berita berhasil dihapus!');
    redirect('BeritaC');
}

public function draft() {
    $data['berita'] = $this->BeritaModel->get_draft();
    
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/notif');
    $this->load->view('berita/draft', $data);
    $this->load->view('templates/footer');
}

public function publish($id) {
    $this->BeritaModel->ubah_status($id, 'publish');
    $this->session->set_flashdata('success', 'Berita berhasil dipublikasikan!');
    redirect('BeritaC/index');
}
}