<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_DB_query_builder $db
 * @property M_Admin $M_Admin
 */
class Admin extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('M_Admin'); 
        if (!$this->session->userdata('id')) {
            redirect('Auth');
        }
    }

    public function index() {
        $data['total_mhs']    = $this->db->count_all('tb_mhs');
        $data['total_dosen']  = $this->db->count_all('tb_dosen');
        $data['total_prodi']  = $this->db->count_all('tb_prodi');
        $data['total_matkul'] = $this->db->count_all('tb_matkul');

        $data['chart_data'] = $this->M_Admin->get_statistik_mhs();

        $data['mhs_terbaru'] = $this->M_Admin->get_mhs_terbaru_dashboard(5);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('Dashboard', $data);
        $this->load->view('templates/footer');
    }
}