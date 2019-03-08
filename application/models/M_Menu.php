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


}
 ?>
