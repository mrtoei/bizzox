<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product_model extends CI_Model {
	public function getPageData($page,$per_page){
		$products = $this->db->query("select * from xproduct where published = 0 order by created_at DESC limit $page, $per_page")->result_array();
		$output = '';
		$output .='<table class="table">
			<thead>
				<tr>
					<th scope="col">Name</th>
					<th scope="col">Description</th>
					<th scope="col">Price Normal</th>
					<th scope="col">Price Sale</th>
					<th scope="col">View</th>
					<th scope="col">Edit</th>
					<th scope="col">Delete</th>
				</tr>
			</thead>
			<tbody>';
			
			if(count($products)>0) {
				foreach ($products as $product) {
					$id = $product['id'];
				
					$output .='	<tr>
						<td>'.$product['name'].'</td>
						<td>'.$product['description'].'</td>
						<td>'.$product['price_normal'].'</td>
						<td>'.$product['price_sale'].'</td>
						<td>
							<a href="#" onclick="viewProduct('.$id.')"><i class="fas fa-eye"></i></a>
						</td>
						<td>
							<a href="#" onclick="editProduct('.$id.')"><i class="fas fa-pen"></i></a>
						</td>
						<td>
							<a href="#" onclick="deleteProduct('.$id.')"><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>';
				
				}
			}else{
				$output .='
					<tr>
						<td colspan="10" style="text-align: center;">No Data</td>
					</tr>
					';
			
			}
		
			$output .='
			</tbody>
		</table>';
		return $output;
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

	public function deleteProduct($id){
		$data = [
			'published'=> 1
		];
		$this->db->where('id',$id);
		$delete = $this->db->update('xproduct',$data);
		if($delete){
			$repsonse = [
				'status'=>200,
			];
			echo json_encode($repsonse);
		}
	}
}
