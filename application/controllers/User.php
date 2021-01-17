<?php

class User extends CI_Controller 
{
	public function index()
	{
		check_not_login();

		$this->load->model('user_model');
		$data['row'] = $this->user_model->get();

		$this->template->load('template', 'user/user_data', $data);
	}

	public function add()
	{
		//form_validation
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullname', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('passwordconfirm', 'Konfirmasi Password', 'required|matches[password]',
			array('matches' => '%s  tidak sesuai dengan Password')
			);
		$this->form_validation->set_rules('level', 'level', 'required');

		$this->form_validation->set_message('required', '%s silahkan isi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '{field} ini sudah ada, silahkan pilih yang lain');

		if ($this->form_validation->run() == FALSE)
		{
			$this->template->load('template', 'user/user_form_add');
		}
		else 
		{

		}

		
	}

	public function edit()
	{
		$this->template->load('template', 'user/user_form_edit');
	}
}
