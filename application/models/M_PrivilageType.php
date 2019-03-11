<?php
class M_PrivilageType extends CI_Model
{

	public function __construct()
	{
        parent::__construct();
	}

    public function getData()
	{
        $query = $this->db->query("CALL getPrivilageType()");

		$items = $query->result();

		return $items;
	}

	public function getDetails($id)
	{
        $query = $this->db->query("CALL getPrivilageTypeByID($id)");

		$items = $query->row();

		return $items;
	}

	public function crud($data)
	{
		$SQL = "CALL  p_crud_Privilage_type(".$data['action'].",
											".$data['privilage_type_id'].",
											".$this->db->escape($data['privilage_type_name']).",
											".$this->db->escape($data['privilage_type_description']).",
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
