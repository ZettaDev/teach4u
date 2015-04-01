<?php
/*
  Created on : 15-feb-2015
  Author     : Hideki
 */

Class admin extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function login($username,$password) {
        $this->db->where("nickname",$username);
        $this->db->where("password",$this->encrypt->decode($password));
        $query=$this->db->get("t4u_users");
        if($query->num_rows()>0) {
            foreach($query->result() as $rows) {
                //add all data to session
                $newdata = array(
                  'user_id'  => $rows->id,
                  'nickname'  => $rows->nickname,
                  'logged_in'  => TRUE,
                );
            }
            $this->session->set_userdata($newdata);
            return true;
        }
        return false;
    }
}
?>
