<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		//memanggil fungsi di helper untuk membatasi hak akses
		check_already_login();
		$this->load->view('login');
	}

	//method proses login
	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login']))
		{
			$this->load->model('user_model');
			$query = $this->user_model->login($post);
			if ($query->num_rows() > 0){
				$row = $query->row();
				$params = [
							'userid' => $row->user_id,
							'level'	=> $row->level
					];
					$this->session->set_userdata($params);
					echo "<script>
							alert('Selamat, Login Berhasil');
						  	window.location='".site_url('dashboard')."';
						  </script>";
			} else {
				echo "<script>
							alert('Login Gagal, username atau password salah');
						  	window.location='".site_url('auth/login')."';
					   </script>";
			}
		}
	}


	public function logout()
	{
		$params = ['userid', 'level'];
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
// controller login