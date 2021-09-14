<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		// $this->form_validation->set_rules('fullnamename', 'Fullname', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == false) {
			# code...
			$data['title'] = "Login Page";
			$data['judul'] = "Login Page";

			$this->load->view('auth/header.php',$data);
			$this->load->view('auth/index');
			$this->load->view('auth/footer.php');
		} else {
			$this->_login();
			
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// select data dan simpan di variable $user
		$user = $this->db->get_where('user', ['username' => $username])->row_array();
		// pengecekan jika user ada
		if ($user) {
			# code...
			if ($user['is_active'] == 1) {
				# code...
				// cek password benar atau salah
				// cara dibawah tidak dianjurkan lbh baik menggunakan password_verify
				if (password_verify($password, $user['password'])) {
					# code...
					// menyimpan data didalam session
					$data = [
						'username' => $user['username'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					// cek role id
					if ($user['role_id'] == 1) {
						# code...
						// redirect('auth');
						// } elseif ($user['role_id'] == 2) {
						//     # code...
						//     redirect('user');
						redirect('admincontroller/');
					} else {
						# code...
						redirect('admincontroller/');
					}
				} else {
					var_dump(password_verify($password, $user['password']));
					die;
					$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
                   	Password salah!
                  </div>');
					redirect('auth');
				}
			} else {
				# code...
				$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
                Akun dengan username tersebut belum diaktivasi oleh admin utama!
              </div>');
				redirect('auth');
			}
		} else {
			# code...
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Akun dengan username tersebut tidak ditemukan!
          </div>');
			redirect('auth');
		}
	}

	public function registration()
	{
		// if ($this->session->userdata('username')) {
		//     # code...
		//     redirect('user');
		// }

		$this->form_validation->set_rules('fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {
			$data["judul"] = "Halaman Daftar";
			$this->load->view('auth/header.php', $data);
			$this->load->view('auth/registration.php');
			$this->load->view('auth/footer.php');
		} else {
			# code...

			$data = [
				'name' => htmlspecialchars($this->input->post('fullname', true)),
				// 'fullname' => htmlspecialchars($this->input->post('fullname', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => 3,
				'is_active' => 0,
				'date_created' => time()

			];

			// var_dump($data);
			// die;
            // echo'berhasil';

			// var_dump($data);
			// die;

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Selamat Akun Anda Telah Terdaftar Silahkan Masuk!
          </div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            you have been logout!
          </div>');
		redirect('auth');
	}
	public function blocked()
	{
		$data['title'] = 'Access Blocked';
		$this->load->view('auth/blocked', $data);
	}
}