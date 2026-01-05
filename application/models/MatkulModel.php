<?php
class MatkulModel extends CI_Model {
    public function get_all() {
        $this->db->select('tb_matkul.*, tb_prodi.nama_prodi');
        $this->db->from('tb_matkul');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi = tb_matkul.id_prodi');
        return $this->db->get()->result();
    }

    public function insert_data($data) {
        $this->db->insert('tb_matkul', $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where('tb_matkul', array('id_matkul' => $id))->row();
    }

    public function update_data($where, $data) {
        $this->db->where($where);
        $this->db->update('tb_matkul', $data);
    }

    public function delete_data($where) {
        $this->db->where($where);
        $this->db->delete('tb_matkul');
    }
}