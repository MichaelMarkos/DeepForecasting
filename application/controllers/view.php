<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {


			public function index()
			{
		    $this->load->view('templates/header');
		    $this->load->view('view/index');
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
