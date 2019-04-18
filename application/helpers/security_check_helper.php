<?php
	function check_login()
	{
		$ci= & get_instance();
		if ($ci->session->userdata('logged_in')=="")
		{
			redirect('auth/logout');
		}
	}

	function isLogin()
	{
		$ci= & get_instance();
		if ($ci->session->userdata('logged_in')=="")
		{
			return false;
		}
		return true;
	}

	function check_privilage()
	{
		$ci= & get_instance();
		$segment1 = strtolower($ci->uri->segment(1));
		$segment2 = strtolower($ci->uri->segment(2));

		$ci->load->model('m_privilage','privilage');

		$segment = $segment1;
		if (!empty($segment2)){
			$segment = $segment1.'/'.$segment2;
		}

		$result = $ci->privilage->fc_cekPrivilage($segment);

		if($result->out_code < 1)
		{
			//redirect(base_url('NotFound'));
			return false;
		}
		return true;
	}

	function check_isLogin()
	{
		$ci= & get_instance();
		if ($ci->session->userdata('logged_in')=="")
		{
			return false;
		}
		return true;
	}

	function security(){
		if(!check_isLogin()){
			redirect(base_url('auth/logout'));
			return false;
		}

		if(!check_privilage()){
			redirect(base_url('auth/notFound'));
			return false;
		}

		return true;

	}

	function security_ajaxRequest(){
		if(!check_isLogin()){
			return -1;
		}

		if(!check_privilage()){
			return -2;
		}

		return 1;
	}
?>