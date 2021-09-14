<?php

class Pegawai_model extends CI_Model
{
    public function allData()
    {
        return $this->db->get('data_pegawai')->result_array();
    }
    public function oneData($id)
    {
        return $this->db->get_where('data_pegawai', ['id' => $id])->result_array();
    }
}
