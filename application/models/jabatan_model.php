<?php

class Jabatan_model extends CI_Model
{
    // fungsi untuk mengambil seluruh data dari table jabatan
    public function getAllDataJabatan()
    {
        return $this->db->get('jabatan')->result_array();
    }
    public function getAllJabatan()
    {
        return $this->db->get('jabatan')->result();
    }
    // mengambil satu data dari table jabatan
    public function addNewJabatan($data)
    {
        $this->db->insert('jabatan', $data);
    }
    // fungsi untuk merubah satu data dari tabel jabatan
    public function updateDataJabatan($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('jabatan');
    }
    //  fungsi untuk menghapus salah satu data
    public function deleteDataJabatan($id)
    {
        $this->db->delete('jabatan', ['id' => $id]);
    }
}
