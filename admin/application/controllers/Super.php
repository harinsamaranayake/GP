<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super extends CI_Controller {
	
	public function index()
	{
		$this->load->view('s_login');
	}	
}
