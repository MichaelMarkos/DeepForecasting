<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		 if(!$this->session->userdata('idUser')){
    	$this->load->view('templates/header');
      $this->load->view('view/index');
			$this->load->view('templates/footer');

    }

    if($this->session->userdata('user_role') == 1){
			$this->load->view('templates/header');
			$this->load->view('admin/insert_data_company');
			$this->load->view('templates/footer');

    }
		if ($this->session->userdata('user_role') !=1) {
    	$this->load->view('templates/header');
      $this->load->view('view/index');
      $this->load->view('templates/footer');
    }

  }


  public function insert_company()
  {


		$this->form_validation->set_rules('company_name','CompanyName','required');
		$this->form_validation->set_rules('company_link','CompanyLink','required');
		$this->form_validation->set_rules('ticker_name','Ticker','required');
		//$this->form_validation->set_rules('company_img','company_img','required');

				if($this->form_validation->run()	=== FALSE)
				{

					$this->load->view('templates/header');
			    $this->load->view('admin/insert_data_company');
					$this->load->view('templates/footer');

				$this->session->set_flashdata('insert_company_failed','insert company failed , please try to insert again ');

				}else {
					//To upload File
					$config['upload_path']          = './asset/images/';
					$config['allowed_types']        = 'gif|jpg|png';
					$config['max_size']='4048';
					$config['max_width']='4080';
					$config['max_height']='4440';

					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('company_img'))
								{
									$error = array('error' => $this->upload->display_errors());
									$profile_image  ='no_image.png';
								}
								else {
									$data=  array('upload_data' => $this->upload->data() );
									$profile_image=$_FILES['company_img']['name'];

								}

								$this->admin_model->insert_company($profile_image);



					//set messege
					$this->session->set_flashdata('insert_company_successful','insert company successful ');


					//die('continue');

					 //redirect($this);
					 $this->load->view('templates/header');
					 $this->load->view('admin/insert_data_company');
					 $this->load->view('templates/footer');
				}
  }
}
