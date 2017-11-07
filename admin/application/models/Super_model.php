<?php

class Super_model extends CI_Model{

	public function authenticate($nic,$password,$pin){
		$this->db->where('nic',$nic);
		$this->db->where('password',$password);
		$this->db->where('pin',$pin);
		$rs=$this->db->get('SuperAdmin');

		if($rs->num_rows()==1){
			$user=$rs->result_array()[0];
			$columnArray=array('superAdminId','nic');
			$data=$this->getData($tablename='SuperAdmin',$columns_arr=$columnArray,$where_arr=$user);
			return $data;			
		}else{
			return false;
		}
	}

	public function getData($tablename = '', $columns_arr = array(), $where_arr = array(), $limit = 0, $offset = 0, $orderby = array()) {


		$limit = ($limit == 0) ? Null : $limit;

        if (!empty($columns_arr)) {
            $this->db->select(implode(',', $columns_arr), FALSE);
        }

        if ($tablename == '') {
            return array();
        } else {
            $this->db->from($tablename);

            if (!empty($where_arr)) {
                $this->db->where($where_arr);
            }

            if ($limit > 0 AND $offset > 0) {
                $this->db->limit($limit, $offset);
            } elseif ($limit > 0 AND $offset == 0) {
                $this->db->limit($limit);
            }

            if (count($orderby) > 0) {
                $orderbyString = '';
                var_dump($orderby);
                foreach ($orderby as $orderclause) {

                    $orderbyString .= $orderclause["field"] . ' ' . $orderclause["order"] . ', ';
                }
                if (strlen($orderbyString) > 2) {
                    $orderbyString = substr($orderbyString, 0, strlen($orderbyString) - 2);
					var_dump($orderbyString);
                }
                $this->db->order_by($orderbyString);
            }

            $query = $this->db->get();
            return $query->result();
        }
    }
}
