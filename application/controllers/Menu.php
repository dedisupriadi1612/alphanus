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

		$this->load->model('m_menu','menu');

		$result = $this->menu->getMenu();

		$data = array(
			'menus' => $result
		);

		$this->load->view('admin/menu',$data);
	}

	public function getDetailFromParent()
	{
		check_login();

		$id=$_POST["id"];

		//echo $id;exit;

		$this->load->model('m_menu','menu');

		$result = $this->menu->getDetailMenu('parent',$id);

		$status= 'OK';
		$data =  array('status' => $status,
						'data'=>$result,
						'csrfName' => $this->security->get_csrf_token_name(),
                		'csrfHash' => $this->security->get_csrf_hash()
						);

		// set text compatible IE7, IE8
		header('Content-type: text/plain'); 
		// set json non IE
		header('Content-type: application/json'); 
		

		echo json_encode($data); exit;
	}

	public function getDetail()
	{
		check_login();

		$id=$_POST["id"];

		//echo $id;exit;

		$this->load->model('m_menu','menu');

		$result = $this->menu->getDetailMenu('menu',$id);

		$status= 'OK';
		$data =  array('status' => $status,
						'data'=>$result,
						'csrfName' => $this->security->get_csrf_token_name(),
                		'csrfHash' => $this->security->get_csrf_hash()
						);

		// set text compatible IE7, IE8
		header('Content-type: text/plain'); 
		// set json non IE
		header('Content-type: application/json'); 
		

		echo json_encode($data); exit;
	}

	public function action()
	{
		check_login();
		
		$action=$_POST["action"];
		$parent_id=$_POST["parent_id"];
		// $linkMenu=$_POST["linkMenu"];
		// $iconMenu=$_POST["iconMenu"];
		// $menuDescription=$_POST["menuDescription"];

		//echo $id;exit;

		$this->load->model('m_menu','menu');
		

		if ($action==2){
			$this->menu->update($id);
		}else{
			$this->menu->create();
		}

		$status= 'OK';
		$data =  array('status' => $status,
						'data'=>null,//$result,
						'csrfName' => $this->security->get_csrf_token_name(),
                		'csrfHash' => $this->security->get_csrf_hash()
						);

		// set text compatible IE7, IE8
		header('Content-type: text/plain'); 
		// set json non IE
		header('Content-type: application/json'); 
		

		echo json_encode($data); exit;
	}

	public function generateToken()
	{
		check_login();
		
		
		$data =  array('status' => 'OK',
						'data'=>null,//$result,
						'csrfName' => $this->security->get_csrf_token_name(),
                		'csrfHash' => $this->security->get_csrf_hash()
						);

		// set text compatible IE7, IE8
		header('Content-type: text/plain'); 
		// set json non IE
		header('Content-type: application/json'); 
		

		echo json_encode($data); exit;
	}
}
