<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	public function registerview()
	{
		$this->load->view('registration');
		
	}

	public function register(){

		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('cName', 'Candidate Name', 'required');
        $this->form_validation->set_rules('fname', 'Father name', 'required');
        $this->form_validation->set_rules('mname', 'Mother name', 'required');
        $this->form_validation->set_rules('emailId', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('district', 'District', 'required');
        $this->form_validation->set_rules('pin', 'Zip', 'trim|required|min_length[6]|max_length[6]');
        $this->form_validation->set_rules('mobileNo', 'Mobile number', 'trim|required|min_length[10]|max_length[10]');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('registration');
        }
        else
        {

			$data=array(
				'candidate_name'=>$_POST['cName'],
				'father_name'=>$_POST['fname'],
				'mother_name'=>$_POST['mname'],
				'address'=>$_POST['address'],
				'district'=>$_POST['district'],
				'pin'=>$_POST['pin'],
				'mobile_no'=>$_POST['mobileNo'],
				'email'=>$_POST['emailId'],
			);

			$this->load->model('queries');
			if($this->queries->add($data)){
				//echo "Registered Succesfully";
				$this->get_user();
			}
			else{
				echo "Registration failed";
			}
		}
	}

	public function get_user(){

		$this->load->model('queries');
		$data['data'] = $this->queries->getuser();
		$this->load->view('showdata', $data);
	}

	public function delete(){
		$this->load->model('queries');
		$id = $this->input->get('id');
		if($this->queries->deleteuser($id)){
			$data['data'] = $this->queries->getuser();
			$this->load->view('showdata', $data);
		}
	}

	public function edit(){
		$id = $this->input->get('id');
		$this->load->model('queries');
		$data['data'] = $this->queries->getuserbyid($id);
		$this->load->view('registration', $data);
	}

	public function updateuser(){
		$id = $this->input->post('id');
		$candidate_name = $this->input->post('cName');
		$father_name = $this->input->post('fname');
		$mother_name = $this->input->post('mname');
		$address = $this->input->post('address');
		$district = $this->input->post('district');
		$pin = $this->input->post('pin');
		$mobile_no = $this->input->post('mobileNo');
		$email = $this->input->post('emailId');

		
		$data = array('candidate_name'=>$candidate_name,
					'father_name'=>$father_name,
					'mother_name'=>$mother_name,
					'address'=>$address,
					'district'=>$district,
					'pin'=>$pin,
					'mobile_no'=>$mobile_no,
					'email'=>$email);

		$this->load->model('queries');
		if($this->queries->updateuserbyid($data,$id)){
			$data['data'] = $this->queries->getuser();
			$this->load->view('showdata', $data);
		}
	}
}
