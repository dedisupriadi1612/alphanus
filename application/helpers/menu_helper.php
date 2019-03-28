<?php
	function getMenuPrivilage($module_id)
	{
        $ci= & get_instance();


        $ci->load->model('m_menu','menu');

        $result = $ci->menu->getParentByPrivilage($module_id);
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