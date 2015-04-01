<?php
/*
  Created on : 25-mar-2015
  Author     : Hideki
 */

if ( ! function_exists('data_basic'))
{
    function data_basic($obj)
    {
        $data['base_url'] = $obj->config->item('base_url');
        $data['resources'] = $data['base_url'].$obj->config->item('resources');
        return $data;
    }
}



?>
