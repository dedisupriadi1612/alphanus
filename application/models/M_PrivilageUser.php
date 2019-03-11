<?php
class M_PrivilageUser extends CI_Model
{

	public function __construct()
	{
        parent::__construct();
	}

    public function getData()
	{
		#exit;
        $query = $this->db->query("CALL getPrivilageUser()");

		$items = $query->result();



		return $items;
	}

	public function getDetails($id)
	{
        $query = $this->db->query("CALL getPrivilageUserByID($id)");

		$items = $query->row();

		return $items;
	}

	public function crud($data)
	{
		$SQL = "CALL  p_crud_privilage_user(".$data['action'].",
											".$data['privilage_user_id'].",
											".$this->db->escape($data['user_id']).",
											".$this->db->escape($data['privilage_type_id']).",
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
