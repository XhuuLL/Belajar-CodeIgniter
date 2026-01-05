<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgramStudiC extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ProdiModel');
        if (!$this->session->userdata('id')) {
            redirect('Auth');
        }
    }

    public function index() {
        $data['prodi'] = $this->ProdiModel->get_all();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/notif');
        $this->load->view('akademik/prodi', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/notif');
        $this->load->view('akademik/tambah_prodi'); 
        
        $this->load->view('templates/footer');
    }
    public function aksi_tambah() {
        $data = array(
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi'),
            'jenjang'    => $this->input->post('jenjang')
        );
        $this->ProdiModel->insert_data($data);
        $this->session->set_flashdata('success', 'Program Studi berhasil ditambah!');
        redirect('ProgramStudiC');
    }

    public function edit($id) {
        $data['prodi'] = $this->ProdiModel->get_by_id($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/notif');
        $this->load->view('akademik/edit_prodi', $data);
        $this->load->view('templates/footer');
    }

    public function aksi_edit() {
        $id = $this->input->post('id_prodi');
        $data = array(
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi'),
            'jenjang'    => $this->input->post('jenjang')
        );
        $this->ProdiModel->update_data(array('id_prodi' => $id), $data);
        $this->session->set_flashdata('success', 'Data Prodi berhasil diperbarui!');
        redirect('ProgramStudiC');
    }

    public function hapus($id) {
        $this->ProdiModel->delete_data(array('id_prodi' => $id));
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('ProgramStudiC');
    }
}