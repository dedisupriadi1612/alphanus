<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelasInteractive extends CI_Controller {

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
		$this->load->view('admin/kelasInteractive');

		//$this->load->view('admin/menu',$data);
	}



	public function getData(){
		check_login();

		//echo $menu_parent;exit;

		$this->load->model('m_kelasInteractive','kelasInteractive');


		$result = $this->kelasInteractive->getData();

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

		$interactive_id=$_POST["interactive_id"];

		$this->load->model('m_kelasInteractive','kelasInteractive');

		$result = $this->kelasInteractive->getDetails($interactive_id);



		// set text compatible IE7, IE8
		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');


		echo json_encode($result); exit;
	}

	public function delete(){
		check_login();

		$action = 3; #Flag Delete
		$interactive_id=$_GET["interactive_id"];
		$interactive_lang = NULL;
		$interactive_code = NULL;
		$interactive_mode = NULL;
		$interactive_execute = NULL;
		$interactive_image = NULL;
		$interactive_desc = NULL;




		$this->load->model('m_kelasInteractive','kelasInteractive');

		$result = $this->kelasInteractive->getDetails($interactive_id);

		$this->load->helper('file');

		$path ="./upload/interactive/$result->interactive_image";


		unlink($path);




		$data=array(	"action" => $action,
							"interactive_id"=>$interactive_id,
							"interactive_code"=>$interactive_code,
							"interactive_lang"=>$interactive_lang,
							"interactive_mode"=>$interactive_mode,
							"interactive_execute"=>$interactive_execute,
							"interactive_image"=>$interactive_image,
							"interactive_desc"=>$interactive_desc,
						);



		$result = $this->kelasInteractive->crud($data);

		redirect(base_url('kelasInteractive'));
	}

	public function createUpdate(){

		check_login();

		//print_r($_FILES);exit;


		$action = $_POST["action"] ;
		$interactive_id    =$_POST["interactive_id"] ;
		$interactive_lang =$_POST["interactive_lang"] ;
		$interactive_code =  $_POST["interactive_code"] ;
		$interactive_mode =  $_POST["interactive_mode"] ;
		$interactive_execute =  $_POST["interactive_execute"] ;
		$interactive_image =  $interactive_lang.'_'.$_FILES["interactive_image"]["name"];//$_POST["interactive_image"] ;
		$interactive_desc =  $_POST["interactive_desc"] ;

		$data=array(	"action" => $action,
							"interactive_id"=>$interactive_id,
							"interactive_code"=>$interactive_code,
							"interactive_lang"=>$interactive_lang,
							"interactive_mode"=>$interactive_mode,
							"interactive_execute"=>$interactive_execute,
							"interactive_image"=>$interactive_image,
							"interactive_desc"=>$interactive_desc,
						);

		try {
			//echo ($interactive_code);
			//print_r($data) ;
			//exit;
            $config['upload_path'] = './upload/interactive';
            $config['allowed_types'] = '*';
            $config['max_size'] = '10000000';
            $config['overwrite'] = TRUE;
            $file_id = date("YmdHis");
            //print_r ($ci->input->post('filename'));exit();
            $config['file_name'] = $interactive_image;//'doc_'.$file_id;

            $this->load->library('upload');
            $this->upload->initialize($config);

            if (!$this->upload->do_upload("interactive_image")) {

                $error = $this->upload->display_errors();
                $result['success'] = false;
                $result['message'] = $error;

                echo json_encode($result);
                exit;
            }else{

                //chmod
				//$data = $this->upload->data();
				//$file_name =   $upload_data['file_name'];
                // Do Upload


				$this->load->model('m_kelasInteractive','kelasInteractive');

				$result = $this->kelasInteractive->crud($data);




            }

        }catch(Exception $e) {
            $result['success'] = false;
            $result['message'] = $e->getMessage();
        }

		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');

		echo json_encode($result); exit;
	}


}
