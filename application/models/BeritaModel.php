<?php
class BeritaModel extends CI_Model {
    public function get_utama() {
        return $this->db->get_where('tb_berita', ['status' => 'publish'])->result();
    }

public function get_draft() {
    return $this->db->get_where('tb_berita', ['status' => 'draft'])->result();
}

public function ubah_status($id, $status) {
    $this->db->where('id_berita', $id);
    $this->db->update('tb_berita', ['status' => $status]);
}
    public function insert_data($data) { $this->db->insert('tb_berita', $data); }
    public function get_by_id($id) { return $this->db->get_where('tb_berita', ['id_berita' => $id])->row(); }
    public function update_data($where, $data) { $this->db->where($where); $this->db->update('tb_berita', $data); }
    public function delete_data($where) { $this->db->where($where); $this->db->delete('tb_berita'); }
}