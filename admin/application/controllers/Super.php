<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Super_model');
	}
	
	public function index()

	{
		$this->load->view('s_login');
	}

	public function login(){

		$nic=$_POST['nic'];	
		$password=$_POST['password'];	
		$pin=$_POST['pin'];
		$rs=$this->Super_model->authenticate($nic,$password,$pin);
		
		if($rs!==false){
			$loggerUserID = $rs[0]->superAdminId;//0th row number|colummn name

			$whereArray2 = array('superAdminId'=>$loggerUserID);
           
            $loggerData1 = $this->Super_model->getData($tablename='superAdmin',$columns_arr = array(),$where_arr =$whereArray2);

            $name = $loggerData1[0]->superAdminId;           

            $the_session = array("loggername"=>$name);

            $this->session->set_userdata($the_session);

            $data['superAdminData'] = $this->Super_model->getData($tablename='superAdmin');        			
            		
			$this->load->view('s_dashboard',$data);
		}else{
			$this->load->view('smap');
		}

	}

	public function logout(){
		session_unset();
		redirect(base_url());
	}	
}
