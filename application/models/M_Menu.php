<?php
class M_menu extends CI_Model
{
	private $menu_id;
	private $menu_tittle;
	private $menu_url;
	private $menu_icon;
	private $menu_description;
	private $menu_parent;
    private $menu_order;
	private $creation_date;
	private $creation_by;
	private $updated_date;
	private $updated_by;


	public function __construct()
	{
        parent::__construct();
	}



	public function getMenuByParent($menuParent)
	{
        $query = $this->db->query("CALL getMenuByParent($menuParent)");

		$items = $query->result();

		$query->next_result();
		$query->free_result();

		return $items;
    }

    public function getMenu()
	{
        $query = $this->db->query("CALL getMenu()");

		$items = $query->result();

		return $items;
	}

	public function getMenuById($menuID)
	{
        $query = $this->db->query("CALL getMenuByID($menuID)");

		$items = $query->row();

		return $items;
	}

	public function crudMenu($data)
	{
		$SQL = "CALL  p_crud_menu(".$data['action'].",
											".$data['menu_id'].",
											".$this->db->escape($data['menu_tittle']).",
											".$this->db->escape($data['menu_url']).",
											".$this->db->escape($data['menu_icon']).",
											".$this->db->escape($data['menu_description']).",
											".$this->db->escape($data['menu_parent']).",
											".$this->db->escape($data['menu_order']).",
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

	public function fc_cekMenu($menu_id,$menu_url)
	{
        $this->db->select("SUBSTRING_INDEX(output,'|',1) AS out_code");
		$this->db->from("(SELECT fc_cekMenu ($menu_id,'$menu_url') AS output ) z");
		$query = $this->db->get();

		//$items = $query->result();


		$item = $query->row();

		return $item;
	}

	public function fc_cekParentMenu($menu_id)
	{
        $this->db->select("SUBSTRING_INDEX(output,'|',1) AS out_code");
		$this->db->from("(SELECT fc_cekParentMenu ($menu_id) AS output ) z");
		$query = $this->db->get();

		//$items = $query->result();


		$item = $query->row();

		return $item;
	}

	public function getParentByPrivilage($module_id)
	{
        $user_id = $this->session->userdata('user_id');
		$query = $this->db->query("CALL getMenuParentByPrivilage($module_id,$user_id)");

		$items = $query->result();

		$query->next_result();
		$query->free_result();


		#$item = $query->row();

		return $items;
	}






}
 ?>
