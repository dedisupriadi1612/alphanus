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
		$SQL = "CALL  p_crud_Privilage(".$data['action'].",
											".$this->db->escape($data['privilage_id']).",
											".$this->db->escape($data['privilage_type_id']).",
											".$this->db->escape($data['menu_id']).",
											".$this->db->escape($data['module_id']).",
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
