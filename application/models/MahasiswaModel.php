<?php
class MahasiswaModel extends CI_Model {
    public function get_data()
    {
        return $this->db->get('tb_mhs')->result();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function get_data_by_nim($nim = NULL)
    {
        $query = $this->db->get_where('tb_mhs', array('nim' => $nim));
        return $query->result();
    }
    public function detail_data($nim = NULL)
    {
        $query = $this->db->get_where('tb_mhs', array('nim' => $nim))->row();
        return $query;
    }
}

?>