<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LinkMenu extends CI_Controller {

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

		$this->load->view('admin/linkMenu');
	}



	public function getData(){
		check_login();
		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');

		$this->load->model('m_linkmenu','linkmenu');

		$result = $this->linkmenu->getData();

		$data = array(
			'data' => $result,
			'status' => true
		);

		echo json_encode($data); exit;
	}

	public function getDetails(){
		check_login();

		$detailLinkMenu_id=$_POST["detailLinkMenu_id"];

		$this->load->model('m_linkmenu','linkmenu');

		$result = $this->linkmenu->getDetails($detailLinkMenu_id);




		echo json_encode($result); exit;
	}


	public function delete(){

		security();

		$action = 3; #Flag Delete
		$detailLinkMenu_id=$_GET["detailLinkMenu_id"];
		$menu_id=NULL;
		$menu_url = NULL;

		$data=array(	"action" => $action,
							"detailLinkMenu_id"=>$detailLinkMenu_id,
							"menu_id"=>$menu_id,
							"link_menu"=>$menu_url);

		$this->load->model('m_linkmenu','linkmenu');

		$result = $this->linkmenu->crud($data);

		if($result->code <> 1)
		{
			$this->load->view('linkMenu',
				"<script>
					swal({
									type: 'error',
									title: 'Oops...',
									text: $result->msg
									})
				</script>"
			);
			return;
		}

		redirect(base_url('linkMenu'));
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
		$detailLinkMenu_id=$_POST["detailLinkMenu_id"];
		$menu_id = $_POST["menu_id"];
		$menu_url = $_POST["menu_url"];

		$data=array(	"action" => $action,
							"detailLinkMenu_id"=>$detailLinkMenu_id,
							"menu_id"=>$menu_id,
							"link_menu"=>$menu_url);

		$this->load->model('m_linkmenu','linkmenu');

		$result = $this->linkmenu->crud($data);

		$result->surl = true;
		$result->surl_code = 1;

		echo json_encode($result); exit;
	}


}
