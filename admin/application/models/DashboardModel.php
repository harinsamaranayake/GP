<?php

class DashboardModel extends CI_Model{
	public function superRegister(){
		$data=array(
			'superAdminId'=> $this->input->post('id',TRUE),
		);

		return $this->db->insert('SuperAdmin',$data);
	}
}
