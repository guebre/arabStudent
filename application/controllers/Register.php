<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

    function __construct() {
        parent::__construct();
        //$this->lang->load('fr_admin', 'french');
        $this->load->model('register_model');
       // $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
        if ($this->session->userdata('logged_in') == TRUE) {
            //if ($this->session->userdata('usr_access_level') == 1) {
                //redirect('users');
           // } else {
               redirect('me');
            //}
        }
   
    }

    public function index() {
        // Set validation rules
       
        $this->form_validation->set_rules('usr_lname',$this->lang->line('usr_lname'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_fname',$this->lang->line('usr_fname'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_email', $this->lang->line('usr_email'), 'required|min_length[1]|max_length[255]|valid_email|is_unique[users.usr_email]');
        
        // Begin validation
        if ($this->form_validation->run() == FALSE) {  //First load, or problem with form
            $this->load->view('common/header');
            $this->load->view('common/navbar_users');
            $this->load->view('users/register');
            $this->load->view('common/copyright');
        } else {

            // Create hash from user password and encypt it
            $password = random_string('alnum', 8);
            $hash = $this->encryption->encrypt($password);
            $email= $this->input->post('usr_email');
            $data = array(
                'usr_fname' => $this->input->post('usr_fname'),
                'usr_lname' => $this->input->post('usr_lname'),
                'usr_email' => $this->input->post('usr_email'),
                'usr_is_active' => 1,
                'usr_access_level' => 2,
                'usr_hash' => $hash
            );
            
            $insert_id = $this->register_model->register_user($data);
            if ($insert_id) {
              
                $user_infos = array('id_user' => $insert_id);
                $this->register_model->register_user_infos($user_infos);
                /* $file = file_get_contents(base_url("application/views/email_scripts/welcome.txt"));
                $file = str_replace('%usr_fname%', $data['usr_fname'],$file);
                $file = str_replace('%usr_lname%', $data['usr_lname'],$file);
                $file = str_replace('%password%', $password, $file);
                
                //Envoi de mail 
                if (mail ($email, $this->lang->
                    line('email_subject_password'),$file, 'From:
                    me@domain.com')) {
                     echo 'Votre mot de passe a ete envoyer par mail';
                }else{
                    redirect('signin');
                }*/
                $data['password'] =  $password;
                $this->load->view('common/header');
                $this->load->view('common/navbar_users');
                $this->load->view('users/register_welcome',$data);
                $this->load->view('common/copyright');
               // redirect('signin');
            } else {
                redirect('register');
            }


        }
            
    }

}