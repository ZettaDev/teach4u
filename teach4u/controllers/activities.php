<?php

/*
  Created on : 25-mar-2015
  Author     : Hideki
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class activities extends CI_Controller {

    public function index(){

    }

    public function island($isla) {
        $data = data_basic($this);
        $data['islands_menu'] = $this->aux_model->list_islands('menu');
        load_view($this,'templates/header',$data);
        load_view($this,'templates/menu',$data);
        echo "Isla seleccionada: " . $isla;
        load_view($this,'templates/modals',$data);
        load_view($this,'templates/footer',$data);
    }

    public function search(){
        $data = data_basic($this);
        $data['islands_menu'] = $this->aux_model->list_islands('menu');
        load_view($this,'templates/header',$data);
        load_view($this,'templates/menu',$data);
        echo "Isla seleccionada: " . $this->input->post('lugar');
        echo "Municipio seleccionada: " . $this->input->post('isla');
        echo "Campo busqueda seleccionada: " . $this->input->post('comunidad');
        echo "Categoria seleccionada: " . $this->input->post('categoria');
        load_view($this,'templates/modals',$data);
        load_view($this,'templates/footer',$data);
    }
}
