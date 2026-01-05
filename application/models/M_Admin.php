<?php
class M_Admin extends CI_Model {

    public function get_mhs_terbaru_dashboard($limit) {
        $this->db->select('tb_mhs.*, tb_prodi.nama_prodi');
        $this->db->from('tb_mhs');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi = tb_mhs.id_prodi', 'left');
        $this->db->order_by('tb_mhs.nim', 'DESC');
        $this->db->limit($limit);
        return $this->db->get()->result();
    }

    public function get_mhs_limit($limit) {
        return $this->get_mhs_terbaru_dashboard($limit);
    }

    public function get_statistik_mhs() {
        $this->db->select('tb_prodi.nama_prodi, COUNT(tb_mhs.id) as total');
        $this->db->from('tb_mhs');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi = tb_mhs.id_prodi');
        $this->db->group_by('tb_mhs.id_prodi');
        return $this->db->get()->result();
    }
}