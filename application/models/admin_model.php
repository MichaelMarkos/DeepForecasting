<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


  public function insert_company($profile_image)
  {
    $this->load->database();
    //User data array
    $data = array(
      'company_name' => $this->input->post('company_name'),
      'company_link' => $this->input->post('company_link'),
	  'ticker' => $this->input->post('ticker_name'),
      'company_img' => $profile_image,
      'company_desc' =>$this->input->post('company_desc'),
    );
      //Insert User
      return $this->db->insert('company',$data);
  }

}
