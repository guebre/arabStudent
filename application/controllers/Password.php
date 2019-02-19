<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Password extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Users_model');
        // Load language file
        $this->lang->load('fr_admin', 'french');
        $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
    }
    public function index(){
        //redirect('password/forgot_password');
        redirect('password/new_password1');
    }
    /*public function forgot_password(){
        $this->form_validation->set_rules('usr_email', $this->lang->line('signin_new_pwd_email'),'required|min_length[5]|max_length[125]|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('common/login_header');
            $this->load->view('users/forgot_password');
            $this->load->view('common/footer');
        } else {
            $email = $this->input->post('usr_email');
            $num_res = $this->Users_model->count_results($email);
            if ($num_res == 1) {
                $code = $this->Users_model->make_code();
                $data = array(
                   'usr_pwd_change_code' => $code,
                   'usr_email' => $email
                );
                if ($this->Users_model->update_user_code($data)) {  // Update okay,so send email
                    $result = $this->Users_model->get_user_details_by_email($email);
                    foreach ($result->result() as $row) {
                        $usr_fname = $row->usr_fname;
                        $usr_lname = $row->usr_lname;
                    }

                    $link = base_url("password/new_password/".$code);
                    $file = file_get_contents(base_url()."application/views/email_scripts/reset_password.txt");
                    // Remplacons les variables
                    $file = str_replace('%usr_fname%', $usr_fname, $file);
                    $file = str_replace('%usr_lname%', $usr_lname, $file);
                    echo $file = str_replace('%link%', $link, $file);
                
                    // Envoi du mail 
                    if (mail ($email, $this->lang->line('email_subject_reset_password'),$file, 'From:'.base_url().'')) {
                        redirect('signin');
                        
                    } else {
                        // Some sort of error happened, redirect user back to form
                        redirect('password/forgot_password');
                    }

                } else { // Some sort of error happened, redirect user back toform
                    redirect('password/forgot_password');
                }
            }
        }  
    }*/
    public function forgot_password1(){
        $this->form_validation->set_rules('usr_email', $this->lang->line('signin_new_pwd_email'),'required|min_length[5]|max_length[125]|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('common/login_header');
            $this->load->view('users/forgot_password');
            $this->load->view('common/footer');
        } else {
            $email = $this->input->post('usr_email');
            $num_res = $this->Users_model->count_results($email);
            if ($num_res == 1) {
                $code = $this->Users_model->make_code();
                $data = array(
                   'usr_pwd_change_code' => $code,
                   'usr_email' => $email
                );
                if ($this->Users_model->update_user_code($data)) {  // Update okay,so send email
                    $result = $this->Users_model->get_user_details_by_email($email);
                    foreach ($result->result() as $row) {
                        $usr_fname = $row->usr_fname;
                        $usr_lname = $row->usr_lname;
                    }

                    $link = base_url("password/new_password/".$code);
                    $file = file_get_contents(base_url()."application/views/email_scripts/reset_password.txt");
                    // Remplacons les variables
                    $file = str_replace('%usr_fname%', $usr_fname, $file);
                    $file = str_replace('%usr_lname%', $usr_lname, $file);
                    echo $file = str_replace('%link%', $link, $file);
                
                    // Envoi du mail 
                    if (mail ($email, $this->lang->line('email_subject_reset_password'),$file, 'From:'.base_url().'')) {
                        redirect('signin');
                        
                    } else {
                        // Some sort of error happened, redirect user back to form
                        redirect('password/forgot_password');
                    }

                } else { // Some sort of error happened, redirect user back toform
                    redirect('password/forgot_password');
                }
            }
        }  
    }
    /**
     * Generer un nouveau mot de passe pour le user
     */
    /*public function new_password1(){
        $this->form_validation->set_rules('code', $this->lang->line('signin_new_pwd_code'),'required|min_length[4]|max_length[8]');
        $this->form_validation->set_rules('usr_email', $this->lang->line('signin_new_pwd_email'),'required|min_length[5]|max_length[125]');
        $this->form_validation->set_rules('usr_password1', $this->lang->line('signin_new_pwd_email'),'required|min_length[5]|max_length[125]');
        $this->form_validation->set_rules('usr_password2', $this->lang->line('signin_new_pwd_email'),'required|min_length[5]|max_length[125]|matches[usr_password1]');
        if ($this->input->post()) {
            $data['code'] = xss_clean($this->input->post('code'));
            } else {
            $data['code'] = xss_clean($this->uri->segment(3));
        }
        // si la validation echoue ou si c'est une premiere visite
        if ($this->form_validation->run() == FALSE) {

            $data['usr_email'] = array
            (
                'name' => 'usr_email',
                'class' => 'form-control', 
                'id' => 'usr_email', 
                'type' => 'text',
                'value' => set_value('usr_email', ''),
                'maxlength' => '100', 'size' => '35', 'placeholder' =>$this->lang->line('signin_new_pwd_email')
            );
            $data['usr_password1'] = array
            (
                'name' => 'usr_password1',
                'class' => 'form-control',
                'id' => 'usr_password1', 
                'type'=> 'password', 
                'value' => set_value('usr_password1', ''),
                'maxlength' => '100', 
                'size' => '35', 
                'placeholder' =>$this->lang->line('signin_new_pwd_pwd')
            );
            $data['usr_password2'] = array
            (
                'name' => 'usr_password1',
                'class' => 'form-control',
                'id' => 'usr_password2', 
                'type'=> 'password', 
                'value' => set_value('usr_password2', ''),
                'maxlength' => '100', 
                'size' => '35', 
                'placeholder' =>$this->lang->line('signin_new_pwd_confirm')
            );
            $this->load->view('common/login_header', $data);
            $this->load->view('users/new_password', $data);
            $this->load->view('common/footer', $data);
        } else {
                    // Does code from input match the code against the email
                    $email = xss_clean($this->input->post('usr_email')); 
                    if (!$this->Users_model->does_code_match($data, $email)) { //Code doesn't match
                        redirect ('users/forgot_password');
                    } else { // Code does match
                            // create a hash value from the supplied password1 
                            $hash = $this->encryption->encrypt($this->input->post('usr_password1'));
                            $data = array(
                                'usr_hash' => $hash,
                                'usr_email' => $email
                            );
                            
                            if($this->Users_model->update_user_password($data)){

                                $link = base_url('signin'); 
                                $result = $this->Users_model->get_user_details_by_email($email);
                                foreach ($result->result() as $row) {
                                    $usr_fname = $row->usr_fname;
                                    $usr_lname = $row->usr_lname;
                                }
                                $file =  $file = file_get_contents(base_url()."application/views/email_scripts/new_password.txt");
                                $file = str_replace('%usr_fname%', $usr_fname, $file);
                                $file = str_replace('%usr_lname%', $usr_lname, $file);
                                $file = str_replace('%password%', $password, $file);
                                $file = str_replace('%link%', $link, $file);

                                // Send a mail 
                                if (mail ($email, $this->lang->line('email_subject_new_password'),$file, 'From:'.base_url().'') ) {
                                    redirect ('signin');
                                }
                            }
                        }
                    
                }
    }*/
    public function new_password1(){

        $this->form_validation->set_rules('usr_password1', $this->lang->line('signin_new_pwd_pwd'),'required|min_length[5]|max_length[125]');
        $this->form_validation->set_rules('usr_password2', $this->lang->line('signin_new_pwd_confirm'),'required|min_length[5]|max_length[125]|matches[usr_password1]');
        // si la validation echoue ou si c'est une premiere visite
        if ($this->form_validation->run() == FALSE) {

            $data['usr_password1'] = array
            (
                'name' => 'usr_password1',
                'class' => 'form-control',
                'id' => 'usr_password1', 
                'type'=> 'password', 
                'value' => set_value('usr_password1', ''),
                'maxlength' => '100', 
                'size' => '35', 
                'placeholder' =>$this->lang->line('signin_new_pwd_pwd')
            );
            $data['usr_password2'] = array
            (
                'name' => 'usr_password2',
                'class' => 'form-control',
                'id' => 'usr_password2', 
                'type'=> 'password', 
                'value' => set_value('usr_password2', ''),
                'maxlength' => '100', 
                'size' => '35', 
                'placeholder' =>$this->lang->line('signin_new_pwd_confirm')
            );
            $this->load->view('common/header');
            $this->load->view('common/navbar_users');
            $this->load->view('users/new_password1',$data);
            $this->load->view('common/copyright');
        } else {
                            // create a hash value from the supplied password1 
                            $hash = $this->encryption->encrypt($this->input->post('usr_password1'));
                            $data = array(
                                'usr_hash' => $hash,
                                'usr_id' => $this->session->userdata('usr_id')
                            );
                            
                            if($this->Users_model->update_user_password($data)){
                                   redirect('signin/signout');  
                            }    
                }
    }

}  
