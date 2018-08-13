<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	public function index()
	{

		if($this->session->userdata('idUser')){
			return  redirect('view');
		}
		$this->load->view('templates\header_reg_log');
		$this->load->view('users\login_signup');

	}

// Register User
	public function register(){
		$data['title']='Sign Up';

		$this->form_validation->set_rules('username','UserName','required|callback_username_check');
		$this->form_validation->set_rules('email','Email','required|callback_email_check');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('password2','ConfirmPassword','matches[password]');


		if($this->form_validation->run()	=== FALSE)
		{
			if($this->session->userdata('idUser')){
				return  redirect('view');
			}
			$this->load->view('templates\header_reg_log');
			$this->load->view('users\login_signup',$data);

		}else {
			//die('continue');
			//Encrypt password
			$enc_password=md5($this->input->post('password'));

			$this->user_model->register($enc_password);
			//set messege
			$this->session->set_flashdata('user_registered','you are now registered and can log in');
			redirect('view');
		}

	}

	// login User
		public function login(){
			$data['title']='login';

			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');


			if($this->form_validation->run()	=== FALSE)
			{
				if($this->session->userdata('idUser')){
					return  redirect('view');
				}
				$this->load->view('templates\header_reg_log');
				$this->load->view('users\login_signup',$data);

			}else {
							//Get username
							$email =$this->input->post('email');
							//Get and encrypt the password
							$password =md5($this->input->post('password'));

							//login user
							$result = $this->user_model->login($email,$password);
							$user_id=$result['idUser'];
							$username=$result['username'];
							$user_role=$result['user_role_id'];

									if($user_id)
									{
										//create session
										$user_data = array(
											'idUser' => $user_id,
											'email'	=>  $email,
										 	'username'=>$username,
											'user_role'=>$user_role,
											'logged_in'=>true

										);

													if($user_role == 1){

														$this->session->set_userdata($user_data);
														//set messege
														$this->session->set_flashdata('user_loggedin','you are now loggedin');
														redirect('admin/index');

													}else {
														$this->session->set_userdata($user_data);
														//set messege
														$this->session->set_flashdata('user_loggedin','you are now loggedin');
														redirect('home');

													}


									}else {
										//set messege
										$this->session->set_flashdata('login_failed','login is invalid');
										redirect('users/login');
									}

			}

		}



	 public function logout(){
		 //unset user_data
		 $this->session->unset_userdata('logged_in');
		 $this->session->unset_userdata('idUser');
		 $this->session->unset_userdata('username');

		 //set messege
		 $this->session->set_flashdata('user_loggedout','you are now loggedout');

		 redirect('users');
	 }

// //Edit profile                  // cheeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeck again
// 	 public function edit($id){
//
// 		 $data['user']=$this->user_model->get_user($id);
//
// 		 if(empty($data['user'])){
// 			error_404();
// 		 }
//
// 		 $data['title']='Edit Profile';
//
//
// 				 if($this->session->userdata('idUser')){
//
// 						 $this->load->view('templates\header');
// 						 $this->load->view('users\edit',$data);
// 						 $this->load->view('templates\footer');
// 			 }else {
// 							 //To upload File
// 							 $config = [
// 								 'upload_path' 		=> './uploads',
// 								 'allowed_types'	=> 'gif|jpg|png|jpeg'
// 							 ];
//
// 							 $this->load->library('upload',$config);
// 							//  $config['upload_path']='./asset/images/posts';
// 							//  $config['allowed_types']='gif|jpg|png';
// 							//  $config['max_size']='4048';
// 							//  $config['max_width']='4080';
// 							//  $config['max_height']='4440';
//
// 							 $checkupload=$this->upload->do_upload();
// 							 if(!$checkupload)
// 							 {
// 								 $errors= array('error' => $this->upload->display_errors());
// 								 echo $errors;
// 								 $post_image  ='noimage.jpg';
// 							 }
// 							 else {
// 								 $data=  array('upload_data' => $this->upload->data() );
// 								 $post_image=$_FILES['userfile']['name'];
//
// 							 }
//
//
// 				 return  redirect('view');
// 			 }
// 	 }

	 //Edit profile                  // cheeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeck again
	 	 public function edit($id){

	 		 $data['user']=$this->user_model->get_user($id);

	 		 if(empty($data['user'])){
	 			error_404();
	 		 }

	 		 $data['title']='Edit Profile';



			 $this->form_validation->set_rules('first_name','first_name','required');
	 		 $this->form_validation->set_rules('email','Email','required');

			 if($this->form_validation->run() === FALSE)
			 {
					$this->load->view('templates\header');
					$this->load->view('users\edit',$data);
					 $this->load->view('templates\footer');
			 }else {

				 //To upload File
				 $config['upload_path']          = './asset/images/upload_photo/';
				 $config['allowed_types']        = 'gif|jpg|png';
				 $config['max_size']='4048';
				 $config['max_width']='4080';
				 $config['max_height']='4440';

				 $this->load->library('upload', $config);

				 if ( ! $this->upload->do_upload('userfile'))
							 {
								 $error = array('error' => $this->upload->display_errors());
								 $profile_image  ='no_image.png';
							 }
							 else {
								 $data=  array('upload_data' => $this->upload->data() );
								 $profile_image=$_FILES['userfile']['name'];

							 }

				 //To set messege by Session
				 $this->session->set_flashdata('profile_edited','Your profile has been edited ');

				// $this->post_model->set_post($profile_image);
				 $this->user_model->update_uesr($profile_image);
				 return  redirect('view');
			 }

	 	 }
//user Update
public function update(){
	$this->user_model->update_uesr();
	redirect('view');

}



	public function username_check($username)
		{
			$this->form_validation->set_message('username_check', 'The {field} is taken,please choose a different one');
						if ($this->user_model->check_username_exists($username))
						{
										return true;
						}
						else
						{
										return FALSE;
						}
		}


		public function email_check($email)
			{
				$this->form_validation->set_message('email_check', 'The {field} is taken,please choose a different one');
							if ($this->user_model->check_email_exists($email))
							{
											return true;
							}
							else
							{
											return FALSE;
							}
			}

		//Check if email exists
		// public function check_email_exists($email){
		// 		$this->form_validation->set_messege('check_email_exists','That email is taken,please choose a different one');
		// 		if($this->user_model->check_email_exists($email)){
		// 			return true;
		// 		}else {
		// 			return false;
		// 		}
		// 	}




	/*
	$this->load->model('M_signin_signup');
	$query  =  $this->M_signin_signup->get_all()->result();

	echo json_encode($query);
	*/
/*
	public function insert()
	 {
	$this->load->model('M_signin_signup');
	$this->M_signin_signup->set_data("mohab","333","mohab@gmail.com");
	echo $this->M_signin_signup->insert_user();
	}

	public function update()
	 {
	$this->load->model('M_signin_signup');
 	$this->M_signin_signup->set_data("mohab","333","mohab@gmail.com");
	echo $this->M_signin_signup->update_user(3);
	}

	public function delete()
	 {
	$this->load->model('M_signin_signup');
	echo $this->M_signin_signup->delete_user(3);
	}
*/
}
