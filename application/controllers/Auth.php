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

		if(empty($username) or empty($password))
		{
			$this->session->set_flashdata('error_message','Username Or Password Must Be Filled !!');
			redirect(base_url('auth/index'));
		}

		$sql = "select * from user where user_name= ? OR user_email = ?";
		$query= $this->db->query($sql,array($username,$username));
		$row=$query->row_array();

		$md5pass = md5(trim($password));
		if (strcmp($md5pass, $row['user_password']) != 0) {
			$this->session->set_flashdata('error_message','Username Or Password Is Wrong!!');
			redirect(base_url('auth/index'));
		}

		//set user session
		$userdata=array(
			'user_id' => $row['user_id'],
			'user_name' => $row['user_name'],
			'user_email' => $row['user_email'],
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
			'logged_in' => ''
			);

		$this->session->unset_userdata($userdata);
		$this->session->sess_destroy();

		redirect(base_url('auth/index'));
	}
}