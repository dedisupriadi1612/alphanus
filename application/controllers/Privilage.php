<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privilage extends CI_Controller {

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
		check_login();

		//$this->load->model('m_menu','menu');

		//$result = $this->menu->getMenu();

		//$data = array(
			//'menus' => $result
		//);
		$this->load->view('admin/privilage');

		//$this->load->view('admin/menu',$data);
	}



	public function getData(){
		check_login();

		#echo "0";exit;

		$this->load->model('m_privilage','privilage');



		$result = $this->privilage->getData();

		#echo "0";exit;

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

		$privilage_id=$_POST["privilage_id"];

		$this->load->model('m_privilage','privilage');

		$result = $this->privilage->getDetails($privilage_id);



		// set text compatible IE7, IE8
		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');


		echo json_encode($result); exit;
	}

	public function delete(){
		check_login();

		$action = 3; #Flag Delete
		$privilage_id=$_GET["privilage_id"];
		$privilage_type_id = NULL;
		$menu_id = NULL;
		$module_id = NULL;

		$data=array(	"action" => $action,
							"privilage_id"=>$privilage_id,
							"privilage_type_id"=>$privilage_type_id,
							"menu_id"=>$menu_id,
							"module_id"=>$module_id);

		$this->load->model('m_privilage','privilage');

		$result = $this->privilage->crud($data);

		redirect(base_url('privilage'));
	}

	public function createUpdate(){
		check_login();

		$action = $_POST["action"];
		$privilage_id= $_POST["privilage_id"];
		$privilage_type_id = $_POST["privilage_type_id"];
		$menu_id = $_POST["menu_id"];
		$module_id = $_POST["module_id"];

		$data=array(	"action" => $action,
							"privilage_id"=>$privilage_id,
							"privilage_type_id"=>$privilage_type_id,
							"menu_id"=>$menu_id,
							"module_id"=>$module_id);

		$this->load->model('m_privilage','privilage');

		$result = $this->privilage->crud($data);

		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');

		echo json_encode($result); exit;
	}


}
