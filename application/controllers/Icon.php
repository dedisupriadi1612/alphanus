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
		$this->load->view('admin/menu');

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


}
