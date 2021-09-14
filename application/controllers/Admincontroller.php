<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admincontroller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pegawai_model', 'Pegawai_model');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['judul'] = "Admin Page";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // $data['menu'] = $this->db->get_where('user_sub_menu', ['role_id' => $this->session->userdata('role_id')])->row_array();
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        // $this->load->view('komponen/topnav', $data);
        $this->load->view('admin/index', $data);
        // $this->load->view('komponen/footer', $data);
    }

    public function data_pegawai()
    {
        $data['getAllPegawai'] = $this->Pegawai_model->allData();
        $data['title'] = "Data Pegawai";
        $data['judul'] = "Data Pegawai";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // $data['menu'] = $this->db->get_where('user_sub_menu', ['role_id' => $this->session->userdata('role_id')])->row_array();
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        // $this->load->view('komponen/topnav', $data);
        $this->load->view('admin/data_pegawai', $data);
        // $this->load->view('komponen/footer', $data);
    }
    public function data_gaji()
    {
        $data['title'] = "Data Gaji";
        $data['judul'] = "Data Gaji";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // $data['menu'] = $this->db->get_where('user_sub_menu', ['role_id' => $this->session->userdata('role_id')])->row_array();
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        // $this->load->view('komponen/topnav', $data);
        $this->load->view('admin/data_gaji', $data);
        // $this->load->view('komponen/footer', $data);
    }
}
