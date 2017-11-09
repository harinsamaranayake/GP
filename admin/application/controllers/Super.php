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
			$this->load->view('s_home');
		}

	}

	public function logout(){
		session_unset();
		redirect(base_url());
	}

	public function loadMap(){
		$this->load->view('s_map');
	}	

	public function addSuperAdmin(){
		$superAdmin_array=array(
			
			'nic'=>$_POST['nic'],
			'telephone'=>$_POST['telephone'],
			'mobile'=>$_POST['mobile'],
			'email'=>$_POST['email'],
			'password'=>$_POST['password'],
			'pin'=>$_POST['pin'],
			'resetCode'=>$_POST['resetCode'],
			'creator'=>$_POST['createdBy'],
		);

		$result=$this->Super_model->insertData($tablename='superadmin',$superAdmin_array);

		redirect(base_url());
	}

	public function addAreaAdmin(){
		$data_array=array(
			
			'nic'=>$_POST['nic'],
			'firstname'=>$_POST['firstName'],
			'middlename'=>$_POST['middleName'],
			'lastname'=>$_POST['lastName'],
			'telephone'=>$_POST['telephone'],
			'mobile'=>$_POST['mobile'],
			'email'=>$_POST['email'],
			'password'=>$_POST['password'],
			'pin'=>$_POST['pin'],
			'resetCode'=>$_POST['resetCode'],
			// 'areaId'=>$_POST['area'],
			// 'superAdminId'=>$_POST['createdBy'],
		);

		$result=$this->Super_model->insertData($tablename='AreaAdmin',$data_array);

		$this->load->view('s_area_admin');
	}

	public function load($a=''){
      $this->load->view($a);
    }

	public function loadSuperAdmin(){
      $this->load->view('s_super_admin');
    }

    public function loadAreaAdmin(){
      $this->load->view('s_area_admin');
    }

    public function loadHome(){
      $this->load->view('s_home');
    } 

    public function loadRates(){
      $this->load->view('s_rates');
    }

    public function searhUser(){

		$user = $_GET['strUser'];

		//$whr = array('IndexNumber' => $user, );

	    $data['UserDetailsone']=$this->Super_model->selectRow($user);

		echo json_encode(array("data"=>$data));

	}


	public function deleteUser(){


		$formsubmit = $this->input->post('buttonForm');

		


		if($formsubmit=='delete'){

			$whr = array('superAdminId' =>$this->input->post('IndexN') );
			$this->Super_model->deleteData('superAdmin',$whr);


			$data['superAdminData'] = $this->Super_model->getData($tablename='superAdmin'); 

			$this->load->view('s_dashboard',$data);


		}
	
			
		if($formsubmit=='update'){


				
		

				$whr = array('superAdminId' => $this->input->post('IndexN') );
		
				

				$dataOne = array(
				'nic' => $this->input->post('FnameOne'),
				'telephone' => $this->input->post('LnameOne'),
				
				
				);
				$this->Super_model->updateData('superAdmin',$dataOne, $whr);

				$data['superAdminData'] = $this->Super_model->getData($tablename='superAdmin'); 
				$this->load->view('s_dashboard',$data);
				
		}


	

	}	
}
