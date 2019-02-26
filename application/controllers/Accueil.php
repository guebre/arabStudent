<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Accueil extends MY_Controller
{

   public function __construct()
   {

      parent::__construct();
   //$this->lang->load('fr_admin', 'french');
   //$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
   /*$data = array(
    'langue'   => 'arabe'
    );*/
   // Save data to session
   //$this->session->set_userdata($data);
   }

   public function index()
   {
      $this->load->view('common/header');
      $this->load->view('common/navbar_users');
      $this->load->view('accueil/accueil');
      $this->load->view('common/footer');
   }

   public function setLang($lang = 'french', $url = 'accueil')
   {
      if ($lang == 'arabe')
      {
         $this->session->set_userdata('langue', 'arabe');
         redirect($url);
      }
      else
      {
         $this->session->set_userdata('langue', 'french');
         redirect($url);
      }

   }

}