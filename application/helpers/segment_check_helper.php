<?php
	function checkSegmentMenu($menu)
	{
        $ci= & get_instance();
        $menu = strtolower($menu);
        $segment = strtolower($ci->uri->segment(1));

        $style = "";
        if ($menu===$segment){
            $style = "active";
        }

        return $style;
	}
?>