<?php
class JadwalModel extends CI_Model {
    public function get_all() {
        $this->db->select('tb_jadwal.*, tb_matkul.nama_matkul, tb_matkul.sks, tb_dosen.nama as nama_dosen, tb_prodi.nama_prodi');
        $this->db->from('tb_jadwal');
        $this->db->join('tb_matkul', 'tb_matkul.id_matkul = tb_jadwal.id_matkul');
        $this->db->join('tb_dosen', 'tb_dosen.nidn = tb_jadwal.nidn');
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi = tb_matkul.id_prodi');
        $this->db->order_field = 'tb_jadwal.hari, tb_jadwal.jam_mulai';
        return $this->db->get()->result();
    }
    public function get_dosen() {
    return $this->db->get('tb_dosen')->result();
}

    public function insert_data($data) { $this->db->insert('tb_jadwal', $data); }
    public function get_by_id($id) { return $this->db->get_where('tb_jadwal', ['id_jadwal' => $id])->row(); }
    public function update_data($where, $data) { $this->db->where($where); $this->db->update('tb_jadwal', $data); }
    public function delete_data($where) { $this->db->where($where); $this->db->delete('tb_jadwal'); }
}