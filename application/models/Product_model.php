<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product_model extends CI_Model {
	public function getPageData($page,$per_page){
		$products = $this->db->query("select * from xproduct where published = 0 order by created_at DESC limit $page, $per_page");
		return $products->result_array();
	}

	public function getAllData(){
		$products = $this->db->query("select * from xproduct where published = 0");
		return $products->num_rows();
	}

	public function insertProduct($data){
		$insert = $this->db->insert('xproduct',$data);
		if($insert){
			$id =  $this->db->insert_id();
			$repsonse = [
				'status'=>200,
				'id'=>$id
			];
			echo json_encode($repsonse);
		}
	}

	public function updateProduct($id,$data){
		$this->db->set($data);
		$this->db->where('id',$id);
		$update = $this->db->update('xproduct',$data);
		if($update){
			$repsonse = [
				'status'=>200,
				'id'=>$id
			];
			echo json_encode($repsonse);
		}
	}

	public function detailProduct($id){
		$product = $this->db->query("select * from xproduct where id = $id");
		return $product->row();
	}
}
