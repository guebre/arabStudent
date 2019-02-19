<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

    public function __construct(){
           parent::__construct();
           $this->lang->load('fr_admin', 'french');
           //$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
    }

    public function index(){

       $this->load->view('common/header');
       $this->load->view('common/navbar_users');
       $this->load->view('accueil/accueil');
       $this->load->view('common/footer');

    }

}
