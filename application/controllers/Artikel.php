<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

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

		$this->load->view('admin/artikel');
    }

    public function editor(){
        security();

        $id  = $this->input->get("id");

        if ($id <= 0){

        }else{

        }

        $this->load->view('admin/editorArtikel');
    }

    public function uploads(){
		security();
        $data = $_FILES['upload'];
        //print_r($data);
        $name = $data['name'];

		try {
			//echo ($interactive_code);
			//print_r($data) ;
			//exit;
            $config['upload_path'] = './upload/artikel';
            $config['allowed_types'] = '*';
            $config['max_size'] = '10000000';
            $config['overwrite'] = TRUE;
            $file_id = date("YmdHis");
            //print_r ($ci->input->post('filename'));exit();
            $config['file_name'] = $name;//'doc_'.$file_id;

            $this->load->library('upload');
            $this->upload->initialize($config);

            if (!$this->upload->do_upload("upload")) {

                $error = $this->upload->display_errors();

                $result['fileName'] = 'ERROR';
                $result['uploaded'] = -1;
                $result['url'] = $error;


                echo json_encode($result); exit;
            }else{


                $result['fileName'] = $name;
                $result['uploaded'] = 1;
                $result['url'] = base_url()."upload/artikel/$name";

                echo json_encode($result); exit;
            }

        }catch(Exception $e) {

            $result['fileName'] = 'ERROR';
            $result['uploaded'] = -1;
            $result['url'] = $e->getMessage();

			echo json_encode($result); exit;
		}

		echo json_encode($result); exit;
    }

    public function getData(){
		check_login();

		//echo $menu_parent;exit;

		$this->load->model('m_artikel','artikel');


		$result = $this->artikel->getData();

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

		$article_id=$_POST["article_id"];

		$this->load->model('m_artikel','artikel');

		$result = $this->artikel->getDetails($article_id);



		// set text compatible IE7, IE8
		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');


		echo json_encode($result); exit;
	}

	public function delete(){
		security();

		$action = 3; #Flag Delete
		$article_id=$_GET["article_id"];
		$blog_type = NULL;
		$article_tittle = NULL;
		$article_text = NULL;
		$article_status = NULL;
		$message_admin = NULL;

		$data=array(	"action" => $action,
							"article_id"=>$article_id,
							"blog_type"=>$blog_type,
							"user_id"=>$user_id,
							"article_tittle"=>$article_tittle,
							"article_text"=>$article_text,
							"article_status"=>$article_status,
							"message_admin"=>$message_admin,
						);

		$this->load->model('m_artikel','artikel');

		$result = $this->artikel->crud($data);

		redirect(base_url('artikel'));
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
		$article_id=$_POST["article_id"];
		$blog_type = $_POST["blog_type"];
		$article_tittle = $_POST["article_tittle"];
		$article_text = $_POST["article_text"];
		$article_status = $_POST["article_status"];
		$message_admin = $_POST["message_admin"];

		$data=array(	"action" => $action,
							"article_id"=>$article_id,
							"blog_type"=>$blog_type,
							"article_tittle"=>$article_tittle,
							"article_text"=>$article_text,
							"article_status"=>$article_status,
							"message_admin"=>$message_admin,
						);

		$this->load->model('m_artikel','artikel');

		$result = $this->artikel->crud($data);

		$result->surl = true;
		$result->surl_code = 1;

		echo json_encode($result); exit;
	}
}
