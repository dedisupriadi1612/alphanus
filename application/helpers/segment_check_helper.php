<?php
	function checkSegmentMenu($menu,$menu_id)
	{
        #$string = "123,456,78,000";
        if (strpos($menu, '/') !== false) {
            $str_arr = explode ("/", $menu);
            $menu = $str_arr[0];
        }


#print_r($str_arr);
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

    function checkSegmentMenuHome($menu,$menu_id)
	{
        $ci= & get_instance();

        if (strpos($menu, '/') !== false) {
            $str_arr = explode ("/", $menu);
            $menu = $str_arr[0];
        }

        $menu = strtolower($menu);
        $segment = strtolower($ci->uri->segment(1));

        if (empty($segment)){
            $segment="home";
        }

        $style = "nav-item ";
        if ($menu===$segment){
            $style = "nav-item active ";
        }

        $ci->load->model('m_menu','menu');



        $result = $ci->menu->fc_cekMenu($menu_id,$segment);
		#echo $result->out_code;
		#print_r($result);exit;

		if($result->out_code == 1)
		{
            $style = "nav-item active ";


        }

        $result = $ci->menu->fc_cekParentMenu($menu_id);
		#echo $result->out_code;
        #print_r($result);exit;


		if($result->out_code > 0)
		{
			$style .= " dropdown ";
		}


        return $style;
    }

    function checkTogle($menu_id)
	{
        $ci= & get_instance();

        $ci->load->model('m_menu','menu');

        $result = $ci->menu->fc_cekParentMenu($menu_id);
		#echo $result->out_code;
        #print_r($result);exit;

        $style = "";

		if($result->out_code > 0)
		{
			$style = "dropdown";
		}


        return $style;
    }

    function checkDropdownA($menu_id)
	{
        $ci= & get_instance();

        $ci->load->model('m_menu','menu');

        $result = $ci->menu->fc_cekParentMenu($menu_id);
		#echo $result->out_code;
        #print_r($result);exit;

        $style = "nav-link";

		if($result->out_code > 0)
		{
			$style = "nav-link dropdown-toggle";
		}


        return $style;
    }

    function checkOpenDiv($menu_id)
	{
        $ci= & get_instance();

        $ci->load->model('m_menu','menu');

        $result = $ci->menu->fc_cekParentMenu($menu_id);
		#echo $result->out_code;
        #print_r($result);exit;

        $style = "";

		if($result->out_code > 0)
		{
			$style = "<div class='dropdown-menu'>";
		}


        return $style;
    }

    function checkCloseDiv($menu_id)
	{
        $ci= & get_instance();

        $ci->load->model('m_menu','menu');

        $result = $ci->menu->fc_cekParentMenu($menu_id);
		#echo $result->out_code;
        #print_r($result);exit;

        $style = "";

		if($result->out_code > 0)
		{
			$style = "</div>";
		}


        return $style;
    }

    function checkActiveDropdown($menu)
	{
        $ci= & get_instance();


		#echo $result->out_code;
        #print_r($result);exit;

        $menu = strtolower($menu);
        $segment = strtolower($ci->uri->segment(1));



        $style = "dropdown-item";

		if($menu===$segment)
		{
			$style = "dropdown-item Active";
		}


        return $style;
    }

?>