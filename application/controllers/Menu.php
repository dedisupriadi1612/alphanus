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

		//$this->load->model('m_menu','menu');

		//$result = $this->menu->getMenu();

		//$data = array(
			//'menus' => $result
		//);
		$this->load->view('admin/menu');

		//$this->load->view('admin/menu',$data);
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

		//print_r($result);exit;
		//$data = array(
			//'data' => $result
		//);

		// set text compatible IE7, IE8
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


}
