<?php
 class Profile extends CI_Controller {
               
        public function index()
        {
            $data = array('titulo' => 'Perfil');
            $this->load->view("/template/header", $data);
            // $data = array('app' => 'Blog');
            $this->load->view("template/navegation", $data);
            // $data = array('post' => ' Bienvenido a tu Perfil','descripcion' => 'En esta página usted podrá agregar, modificar u eliminar usuarios');
            $this->load->view("/user/content", $data);
            $this->load->view("/template/footer");
        
            }
        }