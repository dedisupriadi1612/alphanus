<?php
class M_Artikel extends CI_Model
{

	public function __construct()
	{
        parent::__construct();
	}

    public function getData()
	{
        #exit;
        $user_id = $this->session->userdata('user_id');
        $query = $this->db->query("CALL getArtikel($user_id)");

		$items = $query->result();



		return $items;
	}

	public function getDetails($id)
	{
        $user_id = $this->session->userdata('user_id');
        $query = $this->db->query("CALL getArtikelByID($user_id,$id)");

		$items = $query->row();

		return $items;
	}

	public function crud($data)
	{
		$SQL = "CALL  p_crud_article(".$data['action'].",
											".$this->db->escape($data['article_id']).",
											".$this->db->escape($data['blog_type']).",
											".$this->db->escape($this->session->userdata('user_id')).",
											".$this->db->escape($data['article_tittle']).",
											".$this->db->escape($data['article_text']).",
											".$this->db->escape($data['article_status']).",
											".$this->db->escape($data['message_admin']).",
											".$this->db->escape($this->session->userdata('user_name')).",
											@code,
											@msg);";


        $this->db->trans_start();
            $this->db->query($SQL); // not need to get output
            $query = $this->db->query("SELECT @code as code,  @msg as msg");
        $this->db->trans_complete();

        $items = $query->row();

        return $items;
    }





}
 ?>
