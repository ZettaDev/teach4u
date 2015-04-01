<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function index()
    {
        $data = data_basic($this);
        $this->load->view('templates/header',$data);
        $data['error'] = false;
        $this->load->view('login/index',$data);
        $this->load->view('templates/footer');
    }

    public function validate() {
        $username=$this->input->post('user');
        $password=$this->input->post('password');
        $result=$this->admin->login($username,$password);
        if($result)
            redirect($this->config->item('base_url').'admin.php/home', 'refresh');
        else
            redirect($this->config->item('base_url').'admin.php/login/error', 'refresh');
    }

    public function logout() {
        $newdata = array(
        'user_id'   =>'',
        'nickname'  => $rows->nickname,
        'logged_in' => FALSE,
        );
        $this->session->unset_userdata($newdata);
        $this->session->sess_destroy();
        redirect($this->config->item('base_url').'admin.php/login', 'refresh');
    }

    public function error() {
        $data = data_basic($this);
        $data['error'] = true;
        $this->load->view('templates/header',$data);
        $this->load->view('login/index',$data);
        $this->load->view('templates/footer');
    }
}
