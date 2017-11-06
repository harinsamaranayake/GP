<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		$this->load->view('sregister');
	}

	public function sregister()
	{
		$this->load->model('DashboardModel');
		$isReg=$this->DashboardModel->superRegister();

		if($isReg){
			$this->session->set_flashdata('msg','Registration Successful');
			redirect('Dashboard/index');
		}else{
			$this->session->set_flashdata('msg','Registration Unsuccessful');
			redirect('Dashboard/index');
		}
	}

	public function registerAccount()
	{
		$this->form_validation->set_rules('lname','display','required');
		$this->form_validation->set_message('lname','username_check');

		if($this->form_validation->run()==FALSE){
			$this->load->view('sdashboard');
		}		
	}
}
