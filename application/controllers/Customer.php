<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->model('Customer_model');
		$this->load->database();
	}

	public function index()
	{
		
		$per_page = 15;
		$total_rows =  $this->Customer_model->getAllData();
		$config['base_url'] =base_url('customer/index'); // ชี้หน้าเพจหลักที่จะใช้งานมาที่ customer
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
		
		$this->PAGE['customers'] = $this->Customer_model->getPageData($start,$config['per_page']); // รายชื่อสมาชิกที่จะนำไปแสดงในหน้านั้น
		$this->PAGE['pagination'] = $this->pagination->create_links(); // เลขหน้า
		$this->load->view('customer/index',$this->PAGE);// ส่งข้อมูลออกไปที่ customer/index
	}

	public function form(){
		$this->form_validation->set_rules('first_name', 'Firstname', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Lastname', 'trim|required');
		$date = date('Y-m-d H:i:s');
		if ($this->form_validation->run() == TRUE)
		{
			$data = [
					'gender'=>$this->input->post('gender'),
					'first_name'=>$this->input->post('first_name'),
					'last_name'=>$this->input->post('last_name'),
					'email'=>$this->input->post('email'),
					'phone'=>$this->input->post('phone'),
					'fax'=>$this->input->post('fax'),
					'country_code'=>$this->input->post('country_code'),
					'enabled'=> 0,
					'created_at'=>$date,
					'updated_at'=>$date,
				];
				return $this->Customer_model->insert($data);
			
		}else{
			$this->load->view('customer/form');
		}
	}


	public function detail(){
		$id = $this->input->get('id');
		$data['customer'] = $this->Customer_model->getUser($id);
		$this->load->view('customer/detail',$data);
	}

	public function edit(){
		$id = $this->input->get('id');
		$data['customer'] = $this->Customer_model->getUser($id);
		$this->load->view('customer/edit',$data);
	}

	public function update(){
		$date = date('Y-m-d H:i:s');
		$id = $this->input->post('id');
		$data = [
			'gender'=>$this->input->post('gender'),
			'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			'email'=>$this->input->post('email'),
			'phone'=>$this->input->post('phone'),
			'fax'=>$this->input->post('fax'),
			'country_code'=>$this->input->post('country_code'),
			'updated_at'=>$date,
		];
		return $this->Customer_model->update($data,$id);
		
	}	
		

	public function delete(){
		$id = $this->input->get('id');
		$this->db->set('enabled', 1);
		$this->db->where('id', $id);
		$delete = $this->db->update('xcustomer');
		if($delete){
			Redirect(base_url("customer"), false);
		}
	}
}
