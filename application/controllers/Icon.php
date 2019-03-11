<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Icon extends CI_Controller {

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
		$this->load->view('admin/icon');

		//$this->load->view('admin/menu',$data);
	}



	public function getIcon(){
		check_login();

		//echo $menu_parent;exit;

		$this->load->model('m_icon','icon');


		$result = $this->icon->getIcon();

		$data = array(
			'data' => $result
		);

		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');


		echo json_encode($data); exit;
	}

	public function getIconDetails(){
		check_login();

		$icon_id=$_POST["icon_id"];

		$this->load->model('m_icon','icon');

		$result = $this->icon->getIconById($icon_id);



		// set text compatible IE7, IE8
		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');


		echo json_encode($result); exit;
	}

	public function delete(){
		check_login();

		$action = 3; #Flag Delete
		$icon_id=$_GET["icon_id"];
		$icon_name = NULL;
		$icon_description = NULL;

		$data=array(	"action" => $action,
							"icon_id"=>$icon_id,
							"icon_name"=>$icon_name,
							"icon_description"=>$icon_description);

		$this->load->model('m_icon','icon');

		$result = $this->icon->crudIcon($data);

		redirect(base_url('icon'));
	}

	public function createUpdate(){
		check_login();

		$action = $_POST["action"];
		$icon_id=$_POST["icon_id"];
		$icon_name = $_POST["icon_name"];
		$icon_description = $_POST["icon_description"];

		$data=array(	"action" => $action,
							"icon_id"=>$icon_id,
							"icon_name"=>$icon_name,
							"icon_description"=>$icon_description);

		$this->load->model('m_icon','icon');

		$result = $this->icon->crudIcon($data);

		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');

		echo json_encode($result); exit;
	}


}
