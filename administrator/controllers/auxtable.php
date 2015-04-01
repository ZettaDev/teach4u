<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auxtable extends CI_Controller {

    public function islands()
    {
        if($this->session->userdata('logged_in')) {
            $data = data_basic($this);
            // generamos automaticamente la tabla
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');
            $crud->set_table('aux_islands');
            $crud->set_subject('aux_islands');
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

    public function townships()
    {
        if($this->session->userdata('logged_in')) {
            $data = data_basic($this);
            // generamos automaticamente la tabla
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');
            $crud->set_table('aux_townships');
            $crud->set_subject('aux_townships');
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

    public function category()
    {
        if($this->session->userdata('logged_in')) {
            $data = data_basic($this);
            // generamos automaticamente la tabla
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');
            $crud->set_table('aux_category');
            $crud->set_subject('aux_category');
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

    public function roles()
    {
        if($this->session->userdata('logged_in')) {
            $data = data_basic($this);
            // generamos automaticamente la tabla
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');
            $crud->set_table('aux_roles');
            $crud->set_subject('aux_roles');
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

    public function typeresource()
    {
        if($this->session->userdata('logged_in')) {
            $data = data_basic($this);
            // generamos automaticamente la tabla
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');
            $crud->set_table('aux_type_resource');
            $crud->set_subject('aux_type_resource');
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
