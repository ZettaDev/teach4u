<?php

/*
  Created on : 25-mar-2015
  Author     : Hideki
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function index() {
        $data = data_basic($this);
        $data['islands_menu'] = $this->aux_model->list_islands('menu');
        $data['islands_select'] = $this->aux_model->list_islands('select');
        load_view($this,'templates/header',$data);
        load_view($this,'templates/menu',$data);
        load_view($this,'home',$data);
        load_view($this,'templates/modals',$data);
        load_view($this,'templates/footer',$data);
    }

    public function help() {

    }

    public function contact() {

    }

}
