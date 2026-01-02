<?php

class UserModel extends CI_Model {

    // Fungsi untuk mengecek login (sudah ada)
    public function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    // TAMBAHKAN INI: Fungsi untuk menyimpan data registrasi
    public function simpan_data($table, $data)
    {
        return $this->db->insert($table, $data);
    }
}