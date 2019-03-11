<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

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

		$this->load->view('admin/menu');
	}

	public function getMenuByParent(){
		check_login();

		$menu_parent=$_POST["menu_parent"];

		$this->load->model('m_menu','menu');

		$result = $this->menu->getMenuByParent($menu_parent);

		$data = array(
			'data' => $result
		);

		// set text compatible IE7, IE8
		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');


		echo json_encode($data); exit;
	}

	public function getMenu(){
		check_login();

		//echo $menu_parent;exit;

		$this->load->model('m_menu','menu');

		$result = $this->menu->getMenu();

		array_push($result,array( 	  "id"=> "0",
            								"parent" => "#",
											"text" => "List Menu",
											"state"=> array("opened" => true )
						));

		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');


		echo json_encode($result); exit;
	}

	public function getMenuDetails(){
		check_login();

		$menu_id=$_POST["menu_id"];

		$this->load->model('m_menu','menu');

		$result = $this->menu->getMenuById($menu_id);



		// set text compatible IE7, IE8
		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');


		echo json_encode($result); exit;
	}


	public function delete(){
		check_login();

		$action = 3; #Flag Delete
		$menu_id=$_GET["menu_id"];
		$menu_tittle = NULL;
		$menu_url = NULL;
		$menu_icon = NULL;
		$menu_description = NULL;
		$menu_parent = 0 ;
		$menu_order = 0;

		$data=array(	"action" => $action,
							"menu_id"=>$menu_id,
							"menu_tittle"=>$menu_tittle,
							"menu_url"=>$menu_url,
							"menu_icon"=>$menu_icon,
							"menu_description"=>$menu_description,
							"menu_parent"=>$menu_parent,
							"menu_order"=>$menu_order);

		$this->load->model('m_menu','menu');

		$result = $this->menu->crudMenu($data);

		#header('Content-type: text/plain');
		// set json non IE
		#header('Content-type: application/json');

		#echo json_encode($result); exit;
		#$this->load->view('admin/menu',$result);
		redirect(base_url('menu'));
	}

	public function createUpdate(){
		check_login();

		$action = $_POST["action"];
		$menu_id=$_POST["menu_id"];
		$menu_tittle = $_POST["menu_tittle"];
		$menu_url = $_POST["menu_url"];
		$menu_icon = $_POST["menu_icon"];
		$menu_description = $_POST["menu_description"];
		$menu_parent = $_POST["menu_parent"];
		$menu_order = $_POST["menu_order"];

		$data=array(	"action" => $action,
							"menu_id"=>$menu_id,
							"menu_tittle"=>$menu_tittle,
							"menu_url"=>$menu_url,
							"menu_icon"=>$menu_icon,
							"menu_description"=>$menu_description,
							"menu_parent"=>$menu_parent,
							"menu_order"=>$menu_order);

		$this->load->model('m_menu','menu');

		$result = $this->menu->crudMenu($data);

		#if ($result->code == 1){
		#	redirect(base_url('menu'));
		#}

		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');

		echo json_encode($result); exit;
		#$this->session->set_flashdata('error_message',$result->out_msg);
		#redirect(base_url('menu'));
	}


}
