<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comp_profile_model extends CI_Model {

      public function __construct()
      {
          parent::__construct();
      }

      public function get_company()
      {
        $query = $this->db->get('company');
        return $query->result();
      }

      public function get_company_one($id = FALSE)
      {
        if($id === FALSE)
        {
          $this->db->order_by('idCompany','DESC');
          $query =  $this->db->get('company');
          return $query->result_array();
        }
        $query =$this->db->get_where('company',array('idCompany'=>$id));
        return $query->row_array();

      }
}
