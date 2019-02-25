<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
    }
	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			redirect(base_url('dashboard'));
		}
		$this->load->view('login');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('m_user','user');

		$result = $this->user->fc_login($username,$password);
		//echo $result->out_code;
		//print_r($result);exit;

		if($result->out_code <> 1)
		{
			$this->session->set_flashdata('error_message',$result->out_msg);
			redirect(base_url('auth/index'));
		}

		$dataUser = $this->user->get_user($username);
		//echo $dataUser->user_name;
		//print_r($dataUser);exit;

		//set user session
		$userdata=array(
			'user_id' => $dataUser->user_id,
			'user_name' => $dataUser->user_name,
			'user_email' => $dataUser->user_email,
			'user_fullname' => $dataUser->user_fullname,
			'user_picture' => $dataUser->user_picture,
			'user_background' => $dataUser->user_background,
			'logged_in' => true
			);
		$this->session->set_userdata($userdata);
		//arahkan ke panel
		redirect(base_url('dashboard'));
	}

	public function loginHome()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('m_user','user');

		$result = $this->user->fc_login($username,$password);
		//echo $result->out_code;
		//print_r($result);exit;

		if($result->out_code <> 1)
		{
			$this->session->set_flashdata('error_message',$result->out_msg);
			redirect(base_url());
		}

		$dataUser = $this->user->get_user($username);
		//echo $dataUser->user_name;
		//print_r($dataUser);exit;

		//set user session
		$userdata=array(
			'user_id' => $dataUser->user_id,
			'user_name' => $dataUser->user_name,
			'user_email' => $dataUser->user_email,
			'user_fullname' => $dataUser->user_fullname,
			'user_picture' => $dataUser->user_picture,
			'user_background' => $dataUser->user_background,
			'logged_in' => true
			);
		$this->session->set_userdata($userdata);
		//arahkan ke panel
		redirect(base_url('dashboard'));
	}

	public function logout()
	{
		$userdata=array(
			'user_id' => '',
			'user_name' => '',
			'user_email' => '',
			'user_fullname' => '',
			'user_picture' => '',
			'user_background' => '',
			'logged_in' => false
			);

		$this->session->unset_userdata($userdata);
		$this->session->sess_destroy();

		redirect(base_url('home'));
	}
}