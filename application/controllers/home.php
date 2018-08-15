<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
    }

  	public function index()
  	{
       $data['company'] = $this->comp_profile_model->get_company();
      	$this->load->view('templates/header');
        $this->load->view('company/home',$data);
  			$this->load->view('templates/footer');
   }





   public function search()
   {
         $this->form_validation->set_rules('query','Query','required');

         if($this->form_validation->run())
         {
             $query = $this->input->post('query');

         }else {
           return $this->index();
         }
   }

}
