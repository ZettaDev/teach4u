<?php

/*
  Created on : 25-mar-2015
  Author     : Hideki
 */

Class aux_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function list_islands($type){
        $query=$this->db->get("aux_islands");
        if($query->num_rows()>0) {
            $islas = "";
            switch ($type) {
                case "menu":
                    foreach($query->result() as $rows) {
                        $islas .= "<li><a href='activities/island/".str_replace(" ","-",$rows->description)."'>".$rows->description."</a></li>";
                    }
                    break;
                case "select":
                    foreach($query->result() as $rows) {
                        $islas .= "<option value='".str_replace(" ","-",$rows->description)."'>".$rows->description."</option>";
                    }
                    break;
                case "json":
                    foreach($query->result() as $rows) {
                        $islas[$rows->id] = $rows->description;
                    }
                    $islas = json_encode($islas);
                    break;
            }
            return $islas;
        }
        return false;
    }

    function list_townships($island,$type){
        $this->db->where('description',str_replace('-',' ',$island));
        $id=$this->db->get("aux_islands");
        $this->db->where('id_island',$id->row(0)->id);
        $query=$this->db->get("aux_townships");
        if($query->num_rows()>0) {
            $townships = "";
            switch ($type) {
                case "menu":
                    foreach($query->result() as $rows) {
                        $townships .= "<li><a href='activities/island/".str_replace(" ","-",$rows->description)."'>".$rows->description."</a></li>";
                    }
                    break;
                case "select":
                    foreach($query->result() as $rows) {
                        $islas .= "<option value='".str_replace(" ","-",$rows->description)."'>".$rows->description."</option>";
                    }
                    break;
                case "json":
                    foreach($query->result() as $rows) {
                        $townships[$rows->id] = $rows->description;
                    }
                    $townships = json_encode($townships);
                    break;
            }
            return $townships;
        }
        return false;
    }

}
?>
