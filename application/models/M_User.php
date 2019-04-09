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

	public function getUserByUname($username)
	{
        $query = $this->db->query("CALL getUserByUname('$username') ");

		$items = $query->row();

		return $items;
	}

	public function getUser()
	{
        $query = $this->db->query("CALL getUser() ");

		$items = $query->result();

		return $items;
	}

	public function crud($data)
	{
		$SQL = "CALL  p_crud_user(
					   ".$data['action'].",
					   ".$data['user_id'].",
					   ".$this->db->escape($data['user_name']).",
					   ".$this->db->escape($data['user_password_old']).",
					   ".$this->db->escape($data['user_password']).",
					   ".$this->db->escape($data['password_komfir']).",
					   ".$this->db->escape($data['user_fullname']).",
					   ".$this->db->escape($data['user_gender']).",
					   ".$this->db->escape($data['user_email']).",
					   ".$this->db->escape($data['user_telp']).",
					   ".$this->db->escape($data['user_picture']).",
					   ".$this->db->escape($data['user_description']).",
					   ".$this->db->escape($data['user_token']).",
					   ".$this->db->escape($data['user_name']).",
					   @code,
					   @msg);";


        $this->db->trans_start();
            $this->db->query($SQL); // not need to get output
            $query = $this->db->query("SELECT @code as code,  @msg as msg");
        $this->db->trans_complete();

        $items = $query->row();

        return $items;
	}

	public function verifyAccount($token)
	{
        $this->db->select("SUBSTRING_INDEX(output,'|',1) AS out_code,
                                SUBSTRING_INDEX(output,'|',-1) AS out_msg");
		$this->db->from("(SELECT fc_cekVerfikasi ('$token') AS output ) z");
		$query = $this->db->get();

		//$items = $query->result();


		$item = $query->row();

		return $item;
	}

	public function createToken($data)
	{
		$SQL = "CALL  p_createToken(
					   ".$this->db->escape($data['user_email']).",
					   ".$this->db->escape($data['user_token']).",
					   @code,
					   @msg);";


        $this->db->trans_start();
            $this->db->query($SQL); // not need to get output
            $query = $this->db->query("SELECT @code as code,  @msg as msg");
        $this->db->trans_complete();

        $items = $query->row();

        return $items;
	}

	public function cekToken($token)
	{
        $this->db->select("SUBSTRING_INDEX(output,'|',1) AS out_code,
                                SUBSTRING_INDEX(output,'|',-1) AS out_msg");
		$this->db->from("(SELECT fc_cekToken ('$token') AS output ) z");
		$query = $this->db->get();

		//$items = $query->result();


		$item = $query->row();

		return $item;
	}


}
 ?>
