<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function index()
	{
		$this->template->load('template', 'supplier/supplier_data');
	}

}

/* End of file Supplier.php */
/* Location: ./application/controllers/Supplier.php */