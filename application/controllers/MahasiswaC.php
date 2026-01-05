<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MahasiswaC extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel');
        $this->load->library('upload');
        if (!$this->session->userdata('id')) {
            redirect('Auth');
        }
    }

    public function index()
    {
        $data['mahasiswa'] = $this->MahasiswaModel->get_data();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/notif');
        $this->load->view('MahasiswaView', $data);
    }

    public function tambahmahasiswa()
    {
        $data['prodi'] = $this->MahasiswaModel->get_prodi();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/notif');
        $this->load->view('tambahmahasiswa', $data);
    }

    public function aksi_tambah()
    {
        $data = array(
            'nim'         => $this->input->post('nim'),
            'nama'        => $this->input->post('nama'),
            'jk'          => $this->input->post('jk'),          
            'id_prodi'    => $this->input->post('id_prodi'),    
            'semester'    => $this->input->post('semester'),    
            'alamat'      => $this->input->post('alamat'),
            'telp'        => $this->input->post('telp'),
            'email'       => $this->input->post('email'),
            'foto'        => 'default.jpg'
        );
        
        if ($_FILES['foto']['name']) { 
            $config['upload_path']   = FCPATH . 'public/img/mhs/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size']      = 2048; 

            $this->upload->initialize($config);

            if ($this->upload->do_upload('foto')) {
                $data['foto'] = $this->upload->data('file_name');
            } else {
                echo "Upload Gagal: " . $this->upload->display_errors(); die();
            }
        }

        $this->MahasiswaModel->input_data($data, 'tb_mhs');
        $this->session->set_flashdata('success', 'Mahasiswa berhasil ditambahkan!');
        redirect('MahasiswaC/index');
    }

    public function update()
    {
        $nim = $this->input->post('nim');
        
        $data = array(
            'nama'        => $this->input->post('nama'),
            'jk'          => $this->input->post('jk'),          
            'id_prodi'    => $this->input->post('id_prodi'),    
            'semester'    => $this->input->post('semester'),    
            'alamat'      => $this->input->post('alamat'),
            'telp'        => $this->input->post('telp'),
            'email'       => $this->input->post('email')
        );

        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path']   = FCPATH . 'public/img/mhs/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size']      = 2048;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('foto')) {
                $data['foto'] = $this->upload->data('file_name');
            }
        }

        $where = array('nim' => $nim);
        $this->MahasiswaModel->update_data($where, $data, 'tb_mhs');
        $this->session->set_flashdata('success', 'Data mahasiswa berhasil diperbarui!');
        redirect('MahasiswaC/index');
    }

    public function editmahasiswa($nim)
    {
        $data['mahasiswa'] = $this->MahasiswaModel->get_data_by_nim($nim); 
        $data['prodi'] = $this->MahasiswaModel->get_prodi();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/notif');
        $this->load->view('editmahasiswa', $data);
    }

    public function hapus($nim)
    {
        $where = array('nim' => $nim);
        $this->MahasiswaModel->hapus_data($where, 'tb_mhs');
        $this->session->set_flashdata('success', 'Data mahasiswa berhasil dihapus!');
        redirect('MahasiswaC/index');
    }

    public function detail($nim)
    {
        $data['detail'] = $this->MahasiswaModel->detail_data($nim);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar'); 
        $this->load->view('templates/notif');
        $this->load->view('detail', $data);
    }
}