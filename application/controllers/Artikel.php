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
		check_login();

		$this->load->view('admin/artikel');
    }

    public function editor(){
        check_login();

        $id  = $this->input->get("id");

        if ($id <= 0){

        }else{

        }

        $this->load->view('admin/editorArtikel');
    }

    public function uploads(){

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
}
