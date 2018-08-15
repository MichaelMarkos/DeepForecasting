<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

public $username;
public $password;
public $email;

  public function register($enc_password)
  {
    //User data array
        $data = array(
          'username' => $this->input->post('username'),
          'password' => $enc_password,
          'email' => $this->input->post('email')
        );
      //Insert User
      return $this->db->insert('user',$data);
  }

//get User

function get_user($id = FALSE){
  $this->load->database();

    if($id === FALSE)
    {
      $this->db->order_by('idUser','DESC');
      $query =  $this->db->get('user');
      return $query->result_array();
    }

  $query =$this->db->get_where('user',array('idUser'=>$id));
  return $query->row_array();

}

/*
foreach ($query->result() as $row)
{
        echo $row->title;
}
*/

//login user
  public function login($email,$password)
  {
    //validation_errors
    $this->db->where('email',$email);
    $this->db->where('password',$password);

    $result =$this->db->get('user');

    if($result->num_rows() == 1){
      return $result->row_array();
    }else {
      return false;
    }



  }


  //Update User
  public function update_uesr($profile_image)
  {
    $this->load->database();
    //User data array
        $data = array(
          'username' => $this->input->post('first_name'),
          'last_name' => $this->input->post('last_name'),
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'bio' => $this->input->post('bio'),
          'profile_image' =>$profile_image,
        );
        $this->db->where('idUser',$this->input->post('id'));
      //update User
      return $this->db->update('user',$data);
  }

  public function check_username_exists($username){
    $query = $this->db->get_where('user', array('username' => $username));

    if(empty($query->row_array())){
      return true;
    }else {
      return false;
    }
  }

  public function check_email_exists($email){
    $query = $this->db->get_where('user', array('email' => $email));

    if(empty($query->row_array())){
      return true;
    }else {
      return false;
    }
  }


}
