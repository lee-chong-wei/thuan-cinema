<?php
defined('BASEPATH') OR exit('No direct scrypt access allowed');

class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');  
        $this->load->model('Home_model');
    }
    public function index()
    {
        
        $this->Home_model->join_data_table();
        $data['Galaxy'] = $this->Home_model->get_data_table();
        $this->load->view('Home_view', $data);
        // $this->load->view('examp_view', $data);
    }
}