<?php
class M_LinkMenu extends CI_Model
{

	public function __construct()
	{
        parent::__construct();
	}

    public function getData()
	{
		#exit;
        $query = $this->db->query("CALL getDetailLinkMenu()");

		$items = $query->result();



		return $items;
	}

	public function getDetails($id)
	{
        $query = $this->db->query("CALL getDetailLinkMenuByID($id)");

		$items = $query->row();

		return $items;
	}

	public function crud($data)
	{
		$SQL = "CALL  p_crud_linkMenu(".$data['action'].",
											".$this->db->escape($data['detailLinkMenu_id']).",
											".$this->db->escape($data['menu_id']).",
											".$this->db->escape($data['link_menu']).",
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
