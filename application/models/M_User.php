<?php
class M_user extends CI_Model
{
	private $user_id;
	private $user_name;
	private $user_password;
	private $user_actived;
	private $user_fullname;
	private $user_gender;
    private $user_email;
    private $user_telp;
    private $user_picture;
    private $user_background;
    private $user_description;
	private $creation_date;
	private $creation_by;
	private $updated_date;
	private $updated_by;


	public function __construct()
	{
        parent::__construct();
	}

	public function fc_login($username,$password)
	{
        $this->db->select("SUBSTRING_INDEX(output,'|',1) AS out_code,
                                SUBSTRING_INDEX(output,'|',-1) AS out_msg");
		$this->db->from("(SELECT fc_login ('$username','$password') AS output ) z");
		$query = $this->db->get();

		//$items = $query->result();


		$item = $query->row();

		return $item;
	}

	public function get_user($username)
	{
        $query = $this->db->query("CALL get_user('$username') ");

		$items = $query->row();

		return $items;
	}


}
 ?>
