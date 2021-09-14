<?php

class Gaji_model extends CI_Model
{
    // fungsi untuk mengambil seluruh data dari table gaji
    public function getAllDataGaji()
    {
        return $this->db->get('gaji')->result_array();
    }
    // mengambil satu data dari table gaji
    public function addNewGaji($data)
    {
        $this->db->insert('gaji', $data);
    }
    // fungsi untuk merubah satu data dari tabel gaji
    public function updateDataGaji($id, $data)
    {
        $this->db->set($data);
        $this->db->where('id', ['id' => $id]);
        $this->db->update('gaji');
    }
    //  fungsi untuk menghapus salah satu data
    public function deleteDataGaji($id)
    {
        $this->db->delete('gaji', ['id' => $id]);
    }
}
