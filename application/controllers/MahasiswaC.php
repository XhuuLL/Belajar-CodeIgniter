<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MahasiswaC extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel');
        $this->load->library('upload');
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
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/notif');
        $this->load->view('tambahmahasiswa');
    }
public function aksi_tambah()
    {
        $nim     = $this->input->post('nim');
        $nama    = $this->input->post('nama');
        $alamat  = $this->input->post('alamat');
        $telepon = $this->input->post('telp');
        $email   = $this->input->post('email');
        
        $foto = 'default.jpg'; 
        
        if ($_FILES['foto']['name']) { 
            $config['upload_path']   = FCPATH . 'public/img/mhs/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size']      = 2048; 

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal: " . $this->upload->display_errors(); die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nim'    => $nim,
            'nama'   => $nama,
            'alamat' => $alamat,
            'telp'   => $telepon,
            'email'  => $email,
            'foto'   => $foto
        );

        $this->MahasiswaModel->input_data($data, 'tb_mhs');
        redirect('MahasiswaC/index');
    }

    public function update()
    {
        $nim     = $this->input->post('nim');
        $nama    = $this->input->post('nama');
        $alamat  = $this->input->post('alamat');
        $telepon = $this->input->post('telp');
        $email   = $this->input->post('email');

        $data = array(
            'nama'   => $nama,
            'alamat' => $alamat,
            'telp'   => $telepon,
            'email'  => $email
        );

        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path']   = FCPATH . 'public/img/mhs/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size']      = 2048;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('foto')) {
                $foto_baru = $this->upload->data('file_name');
                $data['foto'] = $foto_baru;
            } else {
                echo "Upload Gagal: " . $this->upload->display_errors(); die();
            }
        }

        $where = array('nim' => $nim);
        $this->MahasiswaModel->update_data($where, $data, 'tb_mhs');
        redirect('MahasiswaC/index');
    }

    public function hapus($nim)
    {
        $where = array('nim' => $nim);
        $this->MahasiswaModel->hapus_data($where, 'tb_mhs');
        redirect('MahasiswaC/index');
    }

    public function editmahasiswa($nim)
    {
        $data['mahasiswa'] = $this->MahasiswaModel->get_data_by_nim($nim); 

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/notif');
        $this->load->view('editmahasiswa', $data);
    }

    public function detail($nim)
    {
        $detail = $this->MahasiswaModel->detail_data($nim);
        $data['detail'] = $detail;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar'); 
        $this->load->view('templates/notif');
        $this->load->view('detail', $data);
    }
}