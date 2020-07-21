<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->model('Product_model');
		$this->load->database();
	}

	public function index(){
		$per_page = 15;
		$total_rows =  $this->Product_model->getAllData();
		$config['base_url'] =base_url('product/index'); // ชี้หน้าเพจหลักที่จะใช้งานมาที่ customer
		$config['total_rows'] = $total_rows; // จำนวนข้อมูลทั้งหมด
		$config['per_page'] = $per_page; // จำนวนข้อมูลต่อหน้า

		$config['use_page_numbers'] = TRUE; // เพื่อให้เลขหน้าในลิงค์ถูกต้อง ให้เซตค่าส่วนนี้เป็น TRUE
		$config['num_links'] = 1;	
		$config["uri_segment"] = 3;
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close']  = '</span></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close']  = '</span></li>';
		
		$page = 0;
		if($this->uri->segment(3)){
			$page = $this->uri->segment(3);
			$start = ($page - 1) * $config["per_page"];
		}else{
			$start=$page;
		}
		
		$this->pagination->initialize($config);
		
		$this->PAGE['products'] = $this->Product_model->getPageData($start,$config['per_page']); // รายชื่อสมาชิกที่จะนำไปแสดงในหน้านั้น
		$this->PAGE['pagination'] = $this->pagination->create_links(); // เลขหน้า
		$this->load->view('product/index',$this->PAGE);
	}

	public function formProduct(){
		return $this->load->view('product/form');
	}

	public function insertProduct(){
		$date = date("Y-m-d H:i:s");
		$data =[
			'name'=> $this->input->post('name'),
			'description'=> $this->input->post('description'),
			'price_normal'=> $this->input->post('price_normal'),
			'price_sale'=> $this->input->post('price_sale'),
			'published'=> 0,
			'created_at'=> $date,
			'updated_at'=> $date,
		];
		return $this->Product_model->insertProduct($data);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
	}

	public function updateProduct(){
		$date = date("Y-m-d H:i:s");
		$id = $this->input->post('id');
		$data =[
			'name'=> $this->input->post('name'),
			'description'=> $this->input->post('description'),
			'price_normal'=> $this->input->post('price_normal'),
			'price_sale'=> $this->input->post('price_sale'),
			'updated_at'=> $date,
		];
		return $this->Product_model->updateProduct($id,$data);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
	}

	public function detailProduct(){
		$id = $this->input->post('id');
		$data['product'] = $this->Product_model->detailProduct($id);
		return $this->load->view('product/detail',$data);
	}

	public function editProduct(){
		$id = $this->input->post('id');
		$data['product'] = $this->Product_model->detailProduct($id);
		return $this->load->view('product/edit',$data);
	}
}
