<?php 
class M_menu extends CI_Model
{
	private $menu_name;
	private $menu_link;
	private $menu_icon;
	private $menu_description;
	private $menu_level;
	private $parent_id;
	private $menu_order;
	private $creation_date;
	private $creation_by;
	private $updated_date;
	private $updated_by;


	public function __construct()
	{
        parent::__construct();	
	}

	public function getMenu()
	{
		$this->db->select('*');
		$this->db->from('menus');
		$this->db->order_by("menu_order", "asc");
		$query = $this->db->get();
		
		$items = $query->result();
		

		//$item = $query->row();

		return $items;
	}

	public function getDetailMenu($key,$id)
	{
		$this->db->select('*');
		$this->db->from('menus');
		if ($key == "parent"){
			$this->db->where('parent_id='.$id);
		}else{
			$this->db->where('menu_id='.$id);
		}
		
		$this->db->order_by("updated_date", "desc");

		$query = $this->db->get();
		$items = $query->result();
		//$item = $query->row();

		return $items;
	}

	public function create()
	{
		
		$this->menu_name = $this->input->post('namaMenu');
		$this->menu_link = $this->input->post('linkMenu');
		$this->menu_icon = $this->input->post('iconMenu');
		$this->menu_description = $this->input->post('menuDescription');
		$this->parent_id = $this->input->post('parent_id');

		$data = $this->getDetailMenu('parent',$this->parent_id);
		echo $data[0]["menu_id"];
		print_r($data);
		exit;
		$this->db->insert('menus',$this);
	}

	public function update($id)
	{
		$this->menu_name = $this->input->post('namaMenu');
		$this->menu_link = $this->input->post('linkMenu');
		$this->menu_icon = $this->input->post('iconMenu');
		$this->menu_description = $this->input->post('menuDescription');
		$this->parent_id = $this->input->post('parent_id');
		$this->db->update('menus',$this,array('menu_id'=>$id));
	}
	public function delete($id)
	{
		$this->db->delete('menus',array('menu_id'=>$id));
	}
	
}
 ?>
