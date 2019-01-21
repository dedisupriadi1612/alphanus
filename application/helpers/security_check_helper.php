<?php 
	function check_login()
	{
		$ci= & get_instance();
		if ($ci->session->userdata('logged_in')=="") 
		{
			redirect('auth/logout');
		}
	}
?>