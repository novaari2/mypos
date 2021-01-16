<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		//memanggil fungsi di helper untuk membatasi hak akses
		check_not_login();
		//load templating menggunakan helper
		$this->template->load('template', 'dashboard');
	}
}
