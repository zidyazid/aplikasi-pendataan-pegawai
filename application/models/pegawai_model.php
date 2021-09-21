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

    public function pegawaShipJabatan()
    {
        $query = "SELECT nama , nip, tanggal_lahir, tempat_lahir, jenis_kelamin, jabatan
                  FROM data_pegawai 
                  JOIN jabatan ON data_pegawai.Id_jabatan = jabatan.id
                  ORDER BY data_pegawai.id
                 ";
        return $query;
    }

    public function addNewPegawai()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nip' => $this->input->post('nip'),
            'id_jabatan' => $this->input->post('jabatan'),
            'tanggal_lahir' => $this->input->post('tgl_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'jenis_kelamin' => $this->input->post('jenkel'),
            'agama' => $this->input->post('agama'),
            'status_pernikahan' => $this->input->post('status_nikah'),
            'jumlah_anak' => $this->input->post('jml_anak'),
            'alamat' => $this->input->post('alamat'),
            'nomor_telpon' => $this->input->post('no_hp'),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
            'gaji_pokok' => $this->input->post('gaji_pokok'),
        ];

        $this->db->insert('data_pegawai', $data);
    }
    public function UbahPegawai($id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nip' => $this->input->post('nip'),
            'id_jabatan' => $this->input->post('jabatan'),
            'tanggal_lahir' => $this->input->post('tgl_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'jenis_kelamin' => $this->input->post('jenkel'),
            'agama' => $this->input->post('agama'),
            'status_pernikahan' => $this->input->post('status_nikah'),
            'jumlah_anak' => $this->input->post('jml_anak'),
            'alamat' => $this->input->post('alamat'),
            'nomor_telpon' => $this->input->post('no_hp'),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
            'gaji_pokok' => $this->input->post('gaji_pokok'),
        ];
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('data_pegawai');
    }
}
