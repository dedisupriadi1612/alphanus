<?php
class M_KelasInteractive extends CI_Model
{

	public function __construct()
	{
        parent::__construct();
	}

    public function getData()
	{
        $query = $this->db->query("CALL getInteractive()");

		$items = $query->result();

		$query->next_result();
		$query->free_result();

		return $items;
	}

	public function getDetails($id)
	{
        $query = $this->db->query("CALL getInteractiveById($id)");

		$items = $query->row();

		$query->next_result();
		$query->free_result();

		return $items;
	}

	public function crud($data)
	{
		$SQL = "CALL  p_crud_interactive(".$data['action'].",
											".$data['interactive_id'].",
											".$this->db->escape($data['interactive_lang']).",
											".$this->db->escape($data['interactive_code']).",
											".$this->db->escape($data['interactive_mode']).",
											".$this->db->escape($data['interactive_execute']).",
											".$this->db->escape($data['interactive_image']).",
											".$this->db->escape($data['interactive_desc']).",
											".$this->db->escape($this->session->userdata('user_name')).",
											@code,
											@msg);";


        $this->db->trans_start();
            $this->db->query($SQL); // not need to get output
            $query = $this->db->query("SELECT @code as code,  @msg as msg");
        $this->db->trans_complete();

		$items = $query->row();

		// $query->next_result();
		// $query->free_result();

        return $items;
    }





}
 ?>
