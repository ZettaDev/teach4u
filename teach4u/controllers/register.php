<?php

/*
  Created on : 26-mar-2015
  Author     : Hideki
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

    public function index() {
        $data = data_basic($this);
        $data['islands_select'] = $this->aux_model->list_islands('select');
        $data['islands_menu'] = $this->aux_model->list_islands('menu');
        load_view($this,'templates/header',$data);
        load_view($this,'register/menu',$data);
        load_view($this,'registro',$data);
        load_view($this,'templates/modals',$data);
        load_view($this,'templates/footer',$data);
    }

}
