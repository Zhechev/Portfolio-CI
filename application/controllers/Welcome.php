<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
	    $this->load->model('admin/Setting_Model');
	    $data['contacts'] = $this->Setting_Model->get('contacts');

		$this->load->view('catalog/home', $data);
	}
}
