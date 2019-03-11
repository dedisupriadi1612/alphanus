<?php
	function getMenuAdmin()
	{
        $ci= & get_instance();


        $ci->load->model('m_menu','menu');

        $result = $ci->menu->getParentByPrivilage(1);
		#echo $result->out_code;
        #print_r($result);exit;

        return $result;
    }

    function getMenuDetailAdmin($menu_parent)
	{
        $ci= & get_instance();


        $ci->load->model('m_menu','menu');

        $result = $ci->menu->getMenuByParent($menu_parent);
		#echo $result->out_code;
        #print_r($result);exit;

        return $result;
    }


?>