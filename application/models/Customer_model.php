<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer_model extends CI_Model {
	public function insert($data){
		$update = $this->db->insert('xcustomer',$data);
		if($update){
			$id =  $this->db->insert_id();
			Redirect(base_url("customer/detail?id=$id"), false);
		}
	}

	public function update($data,$id){
		$this->db->set($data);
		$this->db->where('id', $id);
		$update = $this->db->update('xcustomer',$data);
		if($update){
			Redirect(base_url("customer/detail?id=$id"), false);
		}
	}

	public function getUser($id){
		return $this->db->query("select * from xcustomer where id = $id")->row();
	}
}
