<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view("index/index.php");
    }    
       
    public function index2() {
        $this->load->view("index2/mluis.php");
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

