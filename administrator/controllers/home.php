<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function index()
    {
        if($this->session->userdata('logged_in')) {
            $data = data_basic($this);
            $this->load->view('templates/header',$data);
            $this->load->view('templates/menu',$data);
            $this->load->view('home/index');
            $this->load->view('templates/footer',$data);
        } else {
            redirect($this->config->item('base_url').'admin.php/login', 'refresh');
        }
    }
}
