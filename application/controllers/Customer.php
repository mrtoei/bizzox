<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->library('form_validation');
		$this->load->model('Customer_model');
		$this->load->database();
	}

	public function index()
	{
		$customers = $this->db->query("select * from xcustomer where enabled = 0");
		$data['customers'] = $customers->result_array();
		$this->load->view('customer/index',$data);
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
