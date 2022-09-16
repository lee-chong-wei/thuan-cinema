<?php
defined('BASEPATH') OR exit('No direct scrypt access allowed');

class Migration extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('migration');        
    }
    function index()
    {
        if ($this->migration->current() === FALSE) {
            show_error($this->migration->error_string());
        }
    }
}