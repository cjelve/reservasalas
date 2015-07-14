<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Sistema Reserva de Salas';
        $this->load->view('template/header', $data);
        $this->load->view('template/navegation');
        $this->load->view('home');
        $this->load->view('template/footer');
    }
    }    
       
  