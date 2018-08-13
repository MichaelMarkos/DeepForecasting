<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {


			public function index()
			{
		    $this->load->view('templates/header');
		    $this->load->view('view/index');
		    $this->load->view('templates/footer');

				// if(!$this->session->userdata('idUser')){
				// 	return redirect('admin/company_data');
				// }elseif ($this->session->userdata('user_role') !=1) {
				// 	$this->load->view('templates/header');
			  //   $this->load->view('view/index');
			  //   $this->load->view('templates/footer');
				// }else {
				// 	return redirect('admin/company_data');
				// }

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
