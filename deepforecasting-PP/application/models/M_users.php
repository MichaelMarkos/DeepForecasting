<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model {

public $username;
public $password;
public $email;

  function set_data($username,$password,$email)
  {
    $this->username=$username;
    $this->password=$password;
    $this->email=$email;
  }


  function get_all(){
    $this->load->database();
  return $this->db->get('user');
  }

  function insert_user()
  {
    $this->load->database();
    return $this->db->insert('user',$this);
  }

  function update_user($id)
  {
      $this->load->database();
      return $this->db->update('user', $this ,array('idUser'=>$id));
  }

  function delete_user($id)
  {
      $this->load->database();
      return $this->db->delete('user',array('idUser'=>$id));
  }
}
