<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuperController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('SuperModel');
	}
	
	public function index(){
		$this->load->view('s_login');
	}

	public function login(){
		$nic=$_POST['nic'];	
		$password=$_POST['password'];

		$validSuperAdmin=$this->SuperModel->authenticate($nic,$password,'SuperAdmin');
		$validAreaAdmin=$this->SuperModel->authenticate($nic,$password,'AreaAdmin');
		
		if($validSuperAdmin!==false){
            $this->newSession($validSuperAdmin);
           	$this->loadSuperAdminRegistration();
		}else if($validAreaAdmin!==false){
			$this->newSession($valiAreaAdmin);
           	$this->loadSuperAdminRegistration();
		}else{
			//$data['superAdminData'] = $this->SuperModel->getData($tablename='SuperAdmin'); 
			//$this->load->view('s_dashboard',$data);
			redirect(base_url());			   
		}

	}

	public function logout(){
		session_unset();
		redirect(base_url());
	}

	public function newSession($result){
		$id = $result[0]->superAdminId; 
		$nic = $result[0]->nic;           
		$sessionVariableArray = array("loggerId"=>$id,"loggerName"=>$nic);

        $this->session->set_userdata($sessionVariableArray);
	}

	public function loadSuperAdminRegistration(){
    	$data['count']	=	$this->SuperModel->get_Count('superAdmin');
		$data['max']	=	$this->SuperModel->get_Max('superAdmin','superAdminId');
		$data['tableData'] = $this->SuperModel->getData($tablename='superAdmin');//data to the table
		$this->load->view('s_super_admin',$data);
    }	

	public function superAdmin(){
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

		$buttonValue=$_POST['formSubmitButton'];
		$where_array=array('superAdminId'=>$_POST['id']);

		if($buttonValue==1){
			$result=$this->SuperModel->insertData($tablename='superadmin',$superAdmin_array);
		}elseif ($buttonValue==1) {
			$result=$this->SuperModel->updateData($tablename='superadmin',$superAdmin_array,$where_array);
		}else{
			$result=$this->SuperModel->updateData($tablename='superadmin',$where_array);
		}

		redirect(base_url());
	}

	//...............................................................................................................................

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

		$result=$this->SuperModel->insertData($tablename='AreaAdmin',$data_array);

		$this->load->view('s_area_admin');
	}

	public function load($a=''){
      $this->load->view($a);
    }	

    public function loadAreaAdmin(){
      $data['superAdminData'] = $this->SuperModel->getData($tablename='AreaAdministrator'); 
	  $this->load->view('s_area_admin',$data); 
      
    }

    public function loadMap(){
		$this->load->view('s_map');
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

	    $data['UserDetailsone']=$this->SuperModel->selectRow($user);

		echo json_encode(array("data"=>$data));

	}


	public function deleteUser(){


		$formsubmit = $this->input->post('buttonForm');

		


		if($formsubmit=='delete'){

			$whr = array('superAdminId' =>$this->input->post('IndexN') );
			$this->SuperModel->deleteData('superAdmin',$whr);


			$data['superAdminData'] = $this->SuperModel->getData($tablename='superAdmin'); 

			$this->load->view('s_dashboard',$data);


		}
	
			
		if($formsubmit=='update'){


				
		

				$whr = array('superAdminId' => $this->input->post('IndexN') );
		
				

				$dataOne = array(
				'nic' => $this->input->post('FnameOne'),
				'telephone' => $this->input->post('LnameOne'),
				
				
				);
				$this->SuperModel->updateData('superAdmin',$dataOne, $whr);

				$data['superAdminData'] = $this->SuperModel->getData($tablename='superAdmin'); 
				$this->load->view('s_dashboard',$data);
				
		}


	

	}	
}
