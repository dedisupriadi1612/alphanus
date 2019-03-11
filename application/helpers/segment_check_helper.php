<?php
	function checkSegmentMenu($menu,$menu_id)
	{
        $ci= & get_instance();
        $menu = strtolower($menu);
        $segment = strtolower($ci->uri->segment(1));

        $style = "";
        if ($menu===$segment){
            $style = "active";
        }

        $ci->load->model('m_menu','menu');

        $result = $ci->menu->fc_cekMenu($menu_id,$segment);
		#echo $result->out_code;
		#print_r($result);exit;

		if($result->out_code == 1)
		{
			$style = "active";
		}


        return $style;
    }

    function getURL($menu)
	{
        $ci= & get_instance();
        $menu = strtolower($menu);

        $url = base_url($menu);
        if ($menu==="#" || $menu===""){
            $url = "javascript:void(0);";
        }

        return $url;
    }

    function checkTogleMenu($menu_id)
	{
        $ci= & get_instance();

        $ci->load->model('m_menu','menu');

        $result = $ci->menu->fc_cekParentMenu($menu_id);
		#echo $result->out_code;
        #print_r($result);exit;

        $style = "";

		if($result->out_code > 0)
		{
			$style = "menu-toggle";
		}


        return $style;
    }

    function checkOpenUL($menu_id)
	{
        $ci= & get_instance();

        $ci->load->model('m_menu','menu');

        $result = $ci->menu->fc_cekParentMenu($menu_id);
		#echo $result->out_code;
        #print_r($result);exit;

        $style = "";

		if($result->out_code > 0)
		{
			$style = "<ul class='ml-menu'>";
		}


        return $style;
    }

    function checkCloseUL($menu_id)
	{
        $ci= & get_instance();

        $ci->load->model('m_menu','menu');

        $result = $ci->menu->fc_cekParentMenu($menu_id);
		#echo $result->out_code;
        #print_r($result);exit;

        $style = "";

		if($result->out_code > 0)
		{
			$style = "</ul>";
		}


        return $style;
    }

?>