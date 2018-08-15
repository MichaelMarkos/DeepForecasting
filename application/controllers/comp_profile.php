<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comp_profile extends CI_Controller {


	public function index()
	{

    	$this->load->view('templates/header');
      $this->load->view('company/comp_profile');
			$this->load->view('templates/footer');
 	}

	public function company_info($company_id)
	{
		$data['company'] = $this->comp_profile_model->get_company_one($company_id);
			$this->load->view('templates/header');
			$this->load->view('company/comp_profile',$data);
			$this->load->view('templates/footer');
	}

}
