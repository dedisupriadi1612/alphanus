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





}
 ?>
