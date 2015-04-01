<?php

/*
  Created on : 25-mar-2015
  Author     : Hideki
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class api extends CI_Controller {

    public function islands() {
        echo $this->aux_model->list_islands('json');
    }

    public function townships($island) {
        print_r($this->aux_model->list_townships($island,'json'));
    }
}
