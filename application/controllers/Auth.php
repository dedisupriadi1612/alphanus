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
		if ($this->session->userdata('logged_in')) {
			redirect(base_url('dashboard'));
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');



		$this->load->model('m_user','user');

		$result = $this->user->fc_login($username,$password);
		//echo $result->out_code;
		//print_r($result);exit;

		if($result->out_code <> 1)
		{
			$this->load->view('login',
                array('error_messages' => $result->out_msg)
			);
			return;
		}

		$dataUser = $this->user->getUserByUname($username);
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
		if ($this->session->userdata('logged_in')) {
			redirect(base_url('dashboard'));
		}

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

		$dataUser = $this->user->getUserByUname($username);
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

	public function register()
	{
		if ($this->session->userdata('logged_in')) {
			redirect(base_url('dashboard'));
		}
		$this->load->view('register');
	}



	public function send_email($data,$type){
		if ($this->session->userdata('logged_in')) {
			redirect(base_url('dashboard'));
		}

		$config = [
               'protocol'  => 'smtp',
               'smtp_host' => 'ssl://smtp.googlemail.com',
               'smtp_user' => 'contact.alphanus@gmail.com',
               'smtp_pass' => 'bandung30',
			   'smtp_port' => 465,
			   'mailtype'  => 'html',
               'charset'   => 'utf-8',
			   'newline'   => "\r\n"

           ];

		// Load library email dan konfigurasinya

		$this->load->library('email', $config);
		$this->email->initialize($config);



        // Email dan nama pengirim
        $this->email->from('contact.alphanus@gmail.com', 'Alphanus');

        // Email penerima
        $this->email->to($data['user_email']); // Ganti dengan email tujuan kamu

		if($type === 'verify'){
			$this->email->subject('Account Verification');
			// Isi email
			$this->email->message('Click this link to verify your account : <a href = "'.base_url().'auth/verify?token='.$data['user_token'].'"> Activate</a>');
		}elseif($type === 'forget'){
			$this->email->subject('Change Password');
			// Isi email
			$this->email->message('Click this link to verify your account : <a href = "'.base_url().'auth/changePass?token='.$data['user_token'].'">Change Password</a>');
		}
        // Subject email


        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
           // echo 'Sukses! email berhasil dikirim.';
        } else {
			//echo 'Error! email tidak dapat dikirim.';
			echo $this->email->print_debugger();
			die;
        }
	}

	public function signUp()
	{
		if ($this->session->userdata('logged_in')) {
			redirect(base_url('dashboard'));
		}

		$token = str_replace( '+', '-',base64_encode(random_bytes(32)));
		$milliseconds = md5(round(microtime(true) * 1000));

		$token = $token.$milliseconds;

		$token = str_replace('+','-',$token);

		$action  = $_POST["action"];
		$user_id = $_POST["user_id"];
		$user_name = $_POST["user_name"];
		$user_password_old = NULL;
		$user_password = $_POST["user_password"];
		$password_komfir = $_POST["password_komfir"];
		$user_fullname = NULL;
		$user_gender = NULL;
		$user_email = $_POST["user_email"];
		$user_telp = NULL;
		$user_picture = NULL;
		$user_description = NULL;
		$user_token = $token;
		$type = 'verify';

		$data=array(	"action" => $action,
							"user_id"=>$user_id,
							"user_name"=>$user_name,
							"user_password_old"=>$user_password_old,
							"user_password"=>$user_password,
							"password_komfir"=>$password_komfir,
							"user_fullname"=>$user_fullname,
							"user_gender"=>$user_gender,
							"user_email"=>$user_email,
							"user_telp"=>$user_telp,
							"user_picture"=>$user_picture,
							"user_description"=>$user_description,
							"user_token"=>$user_token
						);

		$this->load->model('m_user','user');

		$result = $this->user->crud($data);

		if($result->code <> 1)
		{
			$this->load->view('register',
                array('error_messages' => $result->msg)
			);
			return;
		}else{
			$this->send_email($data,$type);
			$this->load->view('register',
                array('sukses_messages' => $result->msg)
			);
			return;
		}


		redirect(base_url('auth/register'));



	}

	public function forgetPassword()
	{
		if ($this->session->userdata('logged_in')) {
			redirect(base_url('dashboard'));
		}
		$this->load->view('forgetPassword');
		return;
	}

	public function otp()
	{
		if ($this->session->userdata('logged_in')) {
			redirect(base_url('dashboard'));
		}
		$this->load->view('createOTP');
		return;
	}

	public function createOTP(){
		if ($this->session->userdata('logged_in')) {
			redirect(base_url('dashboard'));
		}

		$token = str_replace( '+', '-',base64_encode(random_bytes(32)));
		$milliseconds = md5(round(microtime(true) * 1000));

		$token = $token.$milliseconds;

		$token = str_replace('+','-',$token);

		$user_email = $_POST["user_email"];
		$user_token = $token;
		$type = $_POST["type"];

		$data=array(	"user_email"=>$user_email,
							"user_token"=>$user_token
						);

		$this->load->model('m_user','user');

		$result = $this->user->createToken($data);
		if($result->code <> 1)
		{
			$this->load->view('createOTP',
                array('error_messages' => $result->msg)
			);
			return;
		}else{
			$this->send_email($data,$type);
			$this->load->view('login',
                array('sukses_messages' => $result->msg)
			);
			return;
		}
		return;
	}

	public function verify()
	{
		if ($this->session->userdata('logged_in')) {
			redirect(base_url('dashboard'));
		}

		$token  = $this->input->get("token");//$_GET["token"];

		$this->load->model('m_user','user');

		$result = $this->user->verifyAccount($token);

		//print_r($result);die;


		if($result->out_code == '-1')
		{
			$this->load->view('404',
                array('error_messages' => $result->out_msg)
			);
			return;
		}elseif($result->out_code == '-2'){
			$messages = $result->out_msg;

			$messages = $messages." <a style='color:black;' href = '".base_url('auth/otp')."'><u>Dapatkan Token Yang Baru</u></a>";

			$this->load->view('login',
                array('error_messages' => $messages)
			);
			return;
		}

		$this->load->view('login',
			array('sukses_messages' => 'Account Sudah Terverfikasi, Silahkan Login')
		);
		return;

	}

	public function changePass(){
		if ($this->session->userdata('logged_in')) {
			redirect(base_url('dashboard'));
		}

		$token  = $this->input->get("token");//$_GET["token"];

		$this->load->model('m_user','user');



		$result = $this->user->cekToken($token);

		if($result->out_code == '-1')
		{
			$this->load->view('404',
                array('error_messages' => $result->out_msg)
			);
			return;
		}elseif($result->out_code == '-2'){
			$messages = $result->out_msg;

			$messages = $messages." <a style='color:black;' href = '".base_url('auth/otp')."'><u>Dapatkan Token Yang Baru</u></a>";

			$this->load->view('login',
                array('error_messages' => $messages)
			);
			return;
		}else{
			//echo $token;die;
			$this->load->view('changePassword',
								array('user_token'=> $token)
			);
			return;
		}
	}

	public function changePassword()
	{
		if ($this->session->userdata('logged_in')) {
			redirect(base_url('dashboard'));
		}

		$action  = $_POST["action"];
		$user_id = $_POST["user_id"];
		$user_name = NULL;
		$user_password_old = NULL;
		$user_password = $_POST["user_password"];
		$password_komfir = $_POST["password_komfir"];
		$user_fullname = NULL;
		$user_gender = NULL;
		$user_email = NULL;
		$user_telp = NULL;
		$user_picture = NULL;
		$user_description = NULL;
		$user_token = $_POST["user_token"];

		$data=array(	"action" => $action,
							"user_id"=>$user_id,
							"user_name"=>$user_name,
							"user_password_old"=>$user_password_old,
							"user_password"=>$user_password,
							"password_komfir"=>$password_komfir,
							"user_fullname"=>$user_fullname,
							"user_gender"=>$user_gender,
							"user_email"=>$user_email,
							"user_telp"=>$user_telp,
							"user_picture"=>$user_picture,
							"user_description"=>$user_description,
							"user_token"=>$user_token
						);

		$this->load->model('m_user','user');

		$result = $this->user->crud($data);

		if($result->code <> 1)
		{
			$this->load->view('changePassword',
                array('error_messages' => $result->msg)
			);
			return;
		}else{
			$this->load->view('login',
				array('sukses_messages' => 'Password Sudah Berhasil Di Rubah Silahkan Login')
			);
			return;
		}
	}

	public function notFound()
	{
		$this->load->view('404',array('error_messages' => 'Anda Tidak Mempunyai Akses Untuk Halaman Ini'));
	}

	public function notFound404()
	{


		$this->load->view('404',array('error_messages' => 'Halaman Tidak Ada'));
	}



}