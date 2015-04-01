<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class table extends CI_Controller {

    public function activities()
    {
        if($this->session->userdata('logged_in')) {
            $data = data_basic($this);
            // generamos automaticamente la tabla
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');
            $crud->set_table('t4u_activities');
            $crud->set_subject('t4u_activities');
            $output = $crud->render();
            $data['js_files'] = $output->js_files;
            $data['css_files'] = $output->css_files;
            $table['table'] = $output->output;
            // codigo automatico
            $this->load->view('table/header',$data);
            $this->load->view('templates/menu',$data);
            $this->load->view('table/index',$table);
            $this->load->view('templates/footer',$data);
        } else {
            redirect($this->config->item('base_url').'admin.php/login', 'refresh');
        }
    }

    public function comments()
    {
        if($this->session->userdata('logged_in')) {
            $data = data_basic($this);
            // generamos automaticamente la tabla
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');
            $crud->set_table('t4u_comments');
            $crud->set_subject('t4u_comments');
            $output = $crud->render();
            $data['js_files'] = $output->js_files;
            $data['css_files'] = $output->css_files;
            $table['table'] = $output->output;
            // codigo automatico
            $this->load->view('table/header',$data);
            $this->load->view('templates/menu',$data);
            $this->load->view('table/index',$table);
            $this->load->view('templates/footer',$data);
        } else {
            redirect($this->config->item('base_url').'admin.php/login', 'refresh');
        }
    }

    public function resources()
    {
        if($this->session->userdata('logged_in')) {
            $data = data_basic($this);
            // generamos automaticamente la tabla
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');
            $crud->set_table('t4u_resources');
            $crud->set_subject('t4u_resources');
            $output = $crud->render();
            $data['js_files'] = $output->js_files;
            $data['css_files'] = $output->css_files;
            $table['table'] = $output->output;
            // codigo automatico
            $this->load->view('table/header',$data);
            $this->load->view('templates/menu',$data);
            $this->load->view('table/index',$table);
            $this->load->view('templates/footer',$data);
        } else {
            redirect($this->config->item('base_url').'admin.php/login', 'refresh');
        }
    }

    public function users()
    {
        if($this->session->userdata('logged_in')) {
            $data = data_basic($this);
            // generamos automaticamente la tabla
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');
            $crud->set_table('t4u_users');
            $crud->set_subject('t4u_users');
            $output = $crud->render();
            $data['js_files'] = $output->js_files;
            $data['css_files'] = $output->css_files;
            $table['table'] = $output->output;
            // codigo automatico
            $this->load->view('table/header',$data);
            $this->load->view('templates/menu',$data);
            $this->load->view('table/index',$table);
            $this->load->view('templates/footer',$data);
        } else {
            redirect($this->config->item('base_url').'admin.php/login', 'refresh');
        }
    }

    public function votes()
    {
        if($this->session->userdata('logged_in')) {
        $data = data_basic($this);
        // generamos automaticamente la tabla
        $crud = new grocery_CRUD();
        $crud->set_theme('datatables');
        $crud->set_table('t4u_votes');
        $crud->set_subject('t4u_votes');
        $output = $crud->render();
        $data['js_files'] = $output->js_files;
        $data['css_files'] = $output->css_files;
        $table['table'] = $output->output;
        // codigo automatico
        $this->load->view('table/header',$data);
        $this->load->view('templates/menu',$data);
        $this->load->view('table/index',$table);
        $this->load->view('templates/footer',$data);
        } else {
            redirect($this->config->item('base_url').'admin.php/login', 'refresh');
        }
    }
}
