<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrivilageUser extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		security();

		$this->load->view('admin/privilageUser');

		//$this->load->view('admin/menu',$data);
	}



	public function getData(){
		check_login();

		//echo $menu_parent;exit;

		$this->load->model('m_privilageUser','privilageUser');


		$result = $this->privilageUser->getData();

		$data = array(
			'data' => $result
		);

		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');


		echo json_encode($data); exit;
	}

	public function getDetails(){
		check_login();

		$privilage_user_id=$_POST["privilage_user_id"];

		$this->load->model('m_privilageUser','privilageUser');

		$result = $this->privilageUser->getDetails($privilage_user_id);



		// set text compatible IE7, IE8
		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');


		echo json_encode($result); exit;
	}

	public function delete(){
		security();

		$action = 3; #Flag Delete
		$privilage_user_id=$_GET["privilage_user_id"];
		$privilage_type_id = NULL;
		$user_id = NULL;

		$data=array(	"action" => $action,
							"privilage_type_id"=>$privilage_type_id,
							"privilage_user_id"=>$privilage_user_id,
							"user_id"=>$user_id);

		$this->load->model('m_privilageUser','privilageUser');

		$result = $this->privilageUser->crud($data);

		redirect(base_url('privilageUser'));
	}

	public function createUpdate(){
		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');

		if (security_ajaxRequest() != 1){
			$result = array(
				'surl' => false,
				'surl_code' => security_ajaxRequest()
			);
			echo json_encode($result); exit;
		}

		$action = $_POST["action"];
		$privilage_type_id=$_POST["privilage_type_id"];
		$privilage_user_id = $_POST["privilage_user_id"];
		$user_id = $_POST["user_id"];

		$data=array(	"action" => $action,
							"privilage_type_id"=>$privilage_type_id,
							"privilage_user_id"=>$privilage_user_id,
							"user_id"=>$user_id);

		$this->load->model('m_privilageUser','privilageUser');

		$result = $this->privilageUser->crud($data);

		$result->surl = true;
		$result->surl_code = 1;

		echo json_encode($result); exit;
	}


}
