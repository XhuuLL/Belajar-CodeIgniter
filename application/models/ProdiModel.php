<?php
class ProdiModel extends CI_Model {
    public function get_all() {
        return $this->db->get('tb_prodi')->result();
    }

    public function insert_data($data) {
        $this->db->insert('tb_prodi', $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where('tb_prodi', array('id_prodi' => $id))->row();
    }

    public function update_data($where, $data) {
        $this->db->where($where);
        $this->db->update('tb_prodi', $data);
    }

    public function delete_data($where) {
        $this->db->where($where);
        $this->db->delete('tb_prodi');
    }
}