<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrivilageType extends CI_Controller {

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

		$this->load->view('admin/privilageType');
	}



	public function getData(){
		check_login();

		//echo $menu_parent;exit;

		$this->load->model('m_privilageType','privilageType');


		$result = $this->privilageType->getData();

		$data = array(
			'data' => $result
		);

		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');


		echo json_encode($data); exit;
	}

	public function getDetails(){
		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');

		check_login();

		$privilage_type_id=$_POST["privilage_type_id"];

		$this->load->model('m_privilageType','privilageType');

		$result = $this->privilageType->getDetails($privilage_type_id);




		echo json_encode($result); exit;
	}

	public function delete(){
		security();

		$action = 3; #Flag Delete
		$privilage_type_id=$_GET["privilage_type_id"];
		$privilage_type_name = NULL;
		$privilage_type_description = NULL;

		$data=array(	"action" => $action,
							"privilage_type_id"=>$privilage_type_id,
							"privilage_type_name"=>$privilage_type_name,
							"privilage_type_description"=>$privilage_type_description);

		$this->load->model('m_privilageType','privilageType');

		$result = $this->privilageType->crud($data);

		redirect(base_url('privilageType'));
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
		$privilage_type_name = $_POST["privilage_type_name"];
		$privilage_type_description = $_POST["privilage_type_description"];

		$data=array(	"action" => $action,
							"privilage_type_id"=>$privilage_type_id,
							"privilage_type_name"=>$privilage_type_name,
							"privilage_type_description"=>$privilage_type_description);

		$this->load->model('m_privilageType','privilageType');

		$result = $this->privilageType->crud($data);

		$result->surl = true;
		$result->surl_code = 1;

		echo json_encode($result); exit;
	}


}
