<?php
class M_icon extends CI_Model
{
    private $icon_id;
    private $icon_name;
    private $icon_description;
	private $creation_date;
	private $creation_by;
	private $updated_date;
	private $updated_by;


	public function __construct()
	{
        parent::__construct();
	}

    public function getIcon()
	{
        $query = $this->db->query("CALL getIcon()");

		$items = $query->result();

		return $items;
	}

	public function getIconById($iconID)
	{
        $query = $this->db->query("CALL getIconByID($iconID)");

		$items = $query->row();

		return $items;
	}

	public function crudIcon($data)
	{
		$SQL = "CALL  p_crud_icon(".$data['action'].",
											".$data['icon_id'].",
											".$this->db->escape($data['icon_name']).",
											".$this->db->escape($data['icon_description']).",
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
