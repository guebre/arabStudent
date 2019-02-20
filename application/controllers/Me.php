<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Me extends CI_Controller {

    function __construct() {

        parent::__construct();
   
        $this->load->model('Users_model');
        // Load language file
        $this->lang->load('fr_admin', 'french');
        $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');

        if ( ($this->session->userdata('logged_in') == FALSE) ) {
             redirect('signin/signout');
        }
    }

    public function index() {
        // Set validation rules
       /* $this->form_validation->set_rules('usr_fname', $this->lang->line('usr_fname'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_lname', $this->lang->line('usr_lname'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('date_naiss', $this->lang->line('date_naiss'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('lieu_naiss', $this->lang->line('lieu_naiss'), 'required|min_length[1]|max_length[255]|valid_email');
        $this->form_validation->set_rules('situation_mat', $this->lang->line('situation_mat'), 'required|min_length[1]|max_length[255]|valid_email|matches[usr_email]');
        $this->form_validation->set_rules('fin_etude', $this->lang->line('fin_etude'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('formation', $this->lang->line('formation'), 'min_length[1]|max_length[125]');
        $this->form_validation->set_rules('association', $this->lang->line('association'), 'min_length[1]|max_length[125]');
        $this->form_validation->set_rules('secteur_act', $this->lang->line('secteur_act'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('telephone', $this->lang->line('telephone'), 'required|min_length[1]|max_length[125]');*/
        $data['id'] = $this->session->userdata('usr_id');
        $data['page_heading'] = 'Mes infos';
       
        // Begin validation
        if($this->form_validation->run() == FALSE) { // First load or probleme with form
 
            $query = $this->Users_model->get_user_details_v1($data['id']);
            foreach ($query->result() as $row) {

                $usr_fname = $row->usr_fname;
                $usr_lname = $row->usr_lname;
                $usr_uname = $row->usr_uname;
                $usr_email = $row->usr_email;
               /* $usr_add1 = $row->usr_add1;
                $usr_add2 = $row->usr_add2;
                $usr_add3 = $row->usr_add3;
                $usr_town_city = $row->usr_town_city;
                $usr_zip_pcode = $row->usr_zip_pcode;*/

                $usr_date_naiss = $row->date_naiss;
                $usr_lieu_naiss = $row->lieu_naiss;
                $usr_situation_mat = $row->situation_mat;
                $usr_association =$row->association;
                $usr_formation = $row->formation;
                $usr_phone = $row->phone;
                $usr_sect_activite = $row->sect_activite;

            }    
            //Populate form fields with data 
            $data['usr_fname'] = array('name' => 'usr_fname', 'class' =>'form-control', 'id' => 'usr_fname', 'value' =>set_value('usr_fname', $usr_fname), 'maxlength' => '100','size' => '35');
            $data['usr_lname'] = array('name' => 'usr_lname', 'class' =>'form-control', 'id' => 'usr_lname', 'value' =>set_value('usr_lname', $usr_lname), 'maxlength' => '100','size' => '35');
            $data['usr_uname'] = array('name' => 'usr_uname', 'class' =>'form-control', 'id' => 'usr_uname', 'value' =>set_value('usr_uname', $usr_uname), 'maxlength' => '100','size' => '35');
            $data['usr_email'] = array('name' => 'usr_email', 'class' =>'form-control', 'id' => 'usr_email', 'value' =>set_value('usr_email', $usr_email), 'maxlength' => '100','size' => '35');
            $data['usr_confirm_email'] = array('name' =>'usr_confirm_email', 'class' => 'form-control', 'id' =>'usr_confirm_email', 'value' => set_value('usr_confirm_email',$usr_email), 'maxlength' => '100', 'size' => '35');
           /* $data['usr_add1'] = array('name' => 'usr_add1', 'class' =>'form-control', 'id' => 'usr_add1', 'value' =>set_value('usr_add1', $usr_add1), 'maxlength' => '100','size' => '35');
            $data['usr_add2'] = array('name' => 'usr_add2', 'class' =>'form-control', 'id' => 'usr_add2', 'value' =>set_value('usr_add2', $usr_add2), 'maxlength' => '100','size' => '35');
            $data['usr_add3'] = array('name' => 'usr_add3', 'class' =>'form-control', 'id' => 'usr_add3', 'value' =>set_value('usr_add3', $usr_add3), 'maxlength' => '100','size' => '35');
            $data['usr_town_city'] = array('name' => 'usr_town_city','class' => 'form-control', 'id' => 'usr_town_city', 'value' =>set_value('usr_town_city', $usr_town_city), 'maxlength' =>'100', 'size' => '35');
            $data['usr_zip_pcode'] = array('name' => 'usr_zip_pcode','class' => 'form-control', 'id' => 'usr_zip_pcode', 'value' =>set_value('usr_zip_pcode', $usr_zip_pcode), 'maxlength' =>'100', 'size' => '35');
            */

            $data['usr_date_naiss'] = array('type' =>'date','name' => 'usr_date_naiss','class' => 'form-control', 'id' => 'usr_date_naiss', 'value' =>set_value('usr_date_naiss', $usr_date_naiss));
            $data['usr_lieu_naiss'] = array('name' => 'usr_lieu_naiss','class' => 'form-control', 'id' => 'usr_date_naiss', 'value' =>set_value('usr_lieu_naiss', $usr_lieu_naiss));
            $data['usr_situation_mat'] = $usr_situation_mat;
            $data['usr_formation'] = array('name' => 'usr_formation','class' => 'form-control', 'id' => 'usr_formation', 'value' =>set_value('usr_formation', $usr_formation));
            $data['usr_association'] = array('name' => 'usr_association','class' => 'form-control', 'id' => 'usr_association', 'value' =>set_value('usr_association', $usr_association));
            $data['usr_sect_activite'] = array('name' => 'usr_sect_activite','class' => 'form-control', 'id' => 'usr_sect_activite', 'value' =>set_value('usr_sect_activite', $usr_sect_activite));
            $data['usr_phone'] = array('name' => 'usr_phone','class' => 'form-control', 'id' => 'usr_phone', 'value' =>set_value('usr_phone', $usr_phone));
            
            
            $this->load->view('common/header');
            $this->load->view('common/navbar_users');
            $this->load->view('users/me', $data);
            $this->load->view('common/copyright');
        } else { // Validation passed, now escape the data
            
            $data = array(
                'usr_fname' => $this->input->post('usr_fname'),
                'usr_lname' => $this->input->post('usr_lname'),
                'usr_uname' => $this->input->post('usr_uname'),
                'usr_email' => $this->input->post('usr_email'),
                'usr_add1' => $this->input->post('usr_add1'),
                'usr_add2' => $this->input->post('usr_add2'),
                'usr_add3' => $this->input->post('usr_add3'),
                'usr_town_city' => $this->input->post('usr_town_city'),
                'usr_zip_pcode' => $this->input->post('usr_zip_pcode')
            );
            if ($this->Users_model->process_update_user($id, $data)) {
                redirect('users');
            }   
        }
    }

    
    /**
     * Update profile1 data 
     */
    public function profile1(){
       
        $json = array();
        //$output = '';
       //var_dump($this->input->post(NULL, FALSE));
        // Set validation rules
        // Set validation rules
        //var_dump($_POST);
        $this->form_validation->set_rules('usr_lname', $this->lang->line('usr_lname'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_fname', $this->lang->line('usr_fname'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_uname', $this->lang->line('usr_uname'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_email', $this->lang->line('usr_email'), 'required|min_length[1]|max_length[255]|valid_email');
        $this->form_validation->set_rules('usr_confirm_email', $this->lang->line('usr_confirm_email'), 'required|min_length[1]|max_length[255]|valid_email|matches[usr_email]');
        /*$this->form_validation->set_rules('usr_add1', $this->lang->line('usr_add1'), 'min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_add2', $this->lang->line('usr_add2'), 'min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_add3', $this->lang->line('usr_add3'), 'min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_town_city', $this->lang->line('usr_town_city'), 'min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_zip_pcode', $this->lang->line('usr_zip_pcode'), 'min_length[1]|max_length[125]');
        */
        $data['id'] = $this->session->userdata('usr_id');

          // Begin validation
          if($this->form_validation->run() == FALSE) { // First load or probleme with form
            

            
            $json = array(
                'usr_lname' => form_error('usr_lname'),
                'usr_fname' => form_error('usr_fname'),
                'usr_uname' => form_error('usr_uname'),
                'usr_email' => form_error('usr_email'),
                'usr_confirm_email' => form_error('usr_confirm_email')
            );
            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json));

             //echo validation_errors();
            /*$query = $this->Users_model->get_user_details($data['id']);
            foreach ($query->result() as $row) {

                $usr_fname = $row->usr_fname;
                $usr_lname = $row->usr_lname;
                $usr_uname = $row->usr_uname;
                $usr_email = $row->usr_email;
                $usr_add1 = $row->usr_add1;
                $usr_add2 = $row->usr_add2;
                $usr_add3 = $row->usr_add3;
                $usr_town_city = $row->usr_town_city;
                $usr_zip_pcode = $row->usr_zip_pcode;
            }    
            //Populate form fields with data 
            $data['usr_fname'] = array('name' => 'usr_fname', 'class' =>'form-control', 'id' => 'usr_fname', 'value' =>set_value('usr_fname', $usr_fname), 'maxlength' => '100','size' => '35');
            $data['usr_lname'] = array('name' => 'usr_lname', 'class' =>'form-control', 'id' => 'usr_lname', 'value' =>set_value('usr_lname', $usr_lname), 'maxlength' => '100','size' => '35');
            $data['usr_uname'] = array('name' => 'usr_uname', 'class' =>'form-control', 'id' => 'usr_uname', 'value' =>set_value('usr_uname', $usr_uname), 'maxlength' => '100','size' => '35');
            $data['usr_email'] = array('name' => 'usr_email', 'class' =>'form-control', 'id' => 'usr_email', 'value' =>set_value('usr_email', $usr_email), 'maxlength' => '100','size' => '35');
            $data['usr_confirm_email'] = array('name' =>'usr_confirm_email', 'class' => 'form-control', 'id' =>'usr_confirm_email', 'value' => set_value('usr_confirm_email',$usr_email), 'maxlength' => '100', 'size' => '35');
            $data['usr_add1'] = array('name' => 'usr_add1', 'class' =>'form-control', 'id' => 'usr_add1', 'value' =>set_value('usr_add1', $usr_add1), 'maxlength' => '100','size' => '35');
            $data['usr_add2'] = array('name' => 'usr_add2', 'class' =>'form-control', 'id' => 'usr_add2', 'value' =>set_value('usr_add2', $usr_add2), 'maxlength' => '100','size' => '35');
            $data['usr_add3'] = array('name' => 'usr_add3', 'class' =>'form-control', 'id' => 'usr_add3', 'value' =>set_value('usr_add3', $usr_add3), 'maxlength' => '100','size' => '35');
            $data['usr_town_city'] = array('name' => 'usr_town_city','class' => 'form-control', 'id' => 'usr_town_city', 'value' =>set_value('usr_town_city', $usr_town_city), 'maxlength' =>'100', 'size' => '35');
            $data['usr_zip_pcode'] = array('name' => 'usr_zip_pcode','class' => 'form-control', 'id' => 'usr_zip_pcode', 'value' =>set_value('usr_zip_pcode', $usr_zip_pcode), 'maxlength' =>'100', 'size' => '35');
            $output .= $this->load->view('users/profile1',$data,TRUE);*/
           
        } else { // Validation passed, now escape the data
            
            $data = array(
                'usr_lname' => $this->input->post('usr_lname'),
                'usr_fname' => $this->input->post('usr_fname'),
                'usr_uname' => $this->input->post('usr_uname'),
                'usr_email' => $this->input->post('usr_email'),
                /*'usr_add1' => $this->input->post('usr_add1'),
                'usr_add2' => $this->input->post('usr_add2'),
                'usr_add3' => $this->input->post('usr_add3'),
                'usr_town_city' => $this->input->post('usr_town_city'),
                'usr_zip_pcode' => $this->input->post('usr_zip_pcode')*/
            );
            $id = $this->session->userdata('usr_id');
            if ($this->Users_model->process_update_user($id, $data)) {
                //redirect('users');
                $json = array(
                    'ok' => '<div class="alert alert-success"> update ok </div>'
                );
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($json));
               
            }   


        }
        

    }

    public function profile2(){
    
        /*$this->form_validation->set_rules('usr_date_naiss', $this->lang->line('date_naiss'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_lieu_naiss', $this->lang->line('lieu_naiss'), 'required|min_length[1]|max_length[255]|valid_email');
        $this->form_validation->set_rules('usr_situation_mat', $this->lang->line('situation_mat'), 'required|min_length[1]|max_length[255]|valid_email|matches[usr_email]');
        $this->form_validation->set_rules('usr_formation', $this->lang->line('formation'), 'min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_association', $this->lang->line('association'), 'min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_sect_activite', $this->lang->line('secteur_act'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_phone', $this->lang->line('telephone'), 'required|min_length[1]|max_length[125]');
       */
        $data['id'] = $this->session->userdata('usr_id');

          // Begin validation
          if($this->form_validation->run() == FALSE) { // First load or probleme with form
            
           /* $json = array(
                'usr_date_naiss' => form_error('usr_date_naiss'),
                'usr_lieu_naiss' => form_error('usr_lieu_naiss'),
                'usr_situation_mat' => form_error('usr_situation_mat'),
                'usr_formation' => form_error('usr_formation'),
                'usr_sect_activite' => form_error('usr_sect_activite')
            );
            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json));
           */
           $data =  array(
              'date_naiss' => $this->input->post('usr_date_naiss'),
              'lieu_naiss' => $this->input->post('usr_lieu_naiss'),
              'situation_mat' => $this->input->post('usr_situation_mat'),
              'formation' => $this->input->post('usr_formation'),
              'sect_activite' => $this->input->post('usr_sect_activite'),
              'phone' => $this->input->post('usr_phone'),
              'association' => $this->input->post('usr_association')
           );
          $id = $this->session->userdata('usr_id');
            if ($this->Users_model->process_update_user_infos($id, $data)) {
                $json = array(
                    'ok' => '<div class="alert alert-success"> update ok </div>'
                );
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($json));
               
            } else {
                $json = array(
                    'error' => '<div class="alert alert-danger">',$this->lang->line('update_erreur'),'</div>'
                );
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($json));
            }  


        }
        

    }
    

    public function profile3(){
    
        $this->form_validation->set_rules('usr_lib_diplome', $this->lang->line('lib_diplome'), 'required|min_length[5]|max_length[125]');
        $this->form_validation->set_rules('usr_date_diplome', $this->lang->line('date_obtention'), 'numeric'); 
        //$json = array();
        $data['id'] = $this->session->userdata('usr_id');
          // Begin validation
          if($this->form_validation->run() == FALSE) { // First load or probleme with form
            
            $json = array(
                'usr_lib_diplome' => form_error('usr_lib_diplome'),
                'usr_date_diplome' => form_error('usr_date_diplome'),
            );
            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json));

        } else {

            $id = $this->session->userdata('usr_id');
            $data =  array(
                'lib_diplome' => strtoupper($this->input->post('usr_lib_diplome')),
                'date_obtention' => $this->input->post('usr_date_diplome'),
                'id_user' =>  $id
             );

            if ($this->Users_model->process_create_user_diplome($data)) {
               /* $json = array(
                    'ok' => '<div class="alert alert-success">Ajout ok</div>'
                );*/

                $json = array(
                    'ok' => '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> Diplome enregisté avec succès !</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>'
                );
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($json));
                
            } else {

                /*$json = array(
                    'error' => '<div class="alert alert-danger">',$this->lang->line('update_erreur'),'</div>'
                );*/

                $json = array(

                  'error' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong> Une erreur de traitement </strong> 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>' 
                );
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($json));
            }  
  
        }
        

    }

    //Liste des diplomes d'un utilisateur 
    public function diplome(){

       $id = $this->session->userdata('usr_id');
       $data = $this->Users_model->get_diplome_details($id);

       if($data){
            //var_dump($data->result());
            $donnee['data'] = $data->result();
            $string = $this->load->view('users/diplome',$donnee,TRUE);
            echo  $string;
       }else {
            echo $this->lang->line('nb_diplome');
       }

    }


    public function del_diplome(){
        
        $id_diplome = $this->input->post('diplome');

        if($this->Users_model->delete_diplome($id_diplome)){
            $json = array(
                'success' => "delete success"
            ) ;

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($json));
        }else {
            $json = array(
                'error' => "delete error"
            ) ;

            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($json));
        }


    }


    public function change_password() {

        $this->form_validation->set_rules('usr_new_pwd_1', $this->lang->line('signin_new_pwd_pwd'),'required|min_length[5]|max_length[125]');
        $this->form_validation->set_rules('usr_new_pwd_2', $this->lang->line('signin_new_pwd_confirm'), 'required|min_length[5]|max_length[125]|matches[usr_new_pwd_1]');
        
        if ($this->form_validation->run() == FALSE) {

            $data['usr_new_pwd_1'] = array('name' => 'usr_new_pwd_1','class' => 'form-control', 'type' => 'password', 'id' =>'usr_new_pwd_1', 'value' => set_value('usr_new_pwd_1', ''), 'maxlength' => '100', 'size' => '35', 'placeholder'=> $this->lang->line('signin_new_pwd_pwd'));
            $data['usr_new_pwd_2'] = array('name' => 'usr_new_pwd_2','class' => 'form-control', 'type' => 'password', 'id' =>'usr_new_pwd_2', 'value' => set_value('usr_new_pwd_2',''), 'maxlength' => '100', 'size' => '35', 'placeholder'=> $this->lang->line('signin_new_pwd_confirm'));
            $data['submit_path'] = 'me/change_password';
            $this->load->view('common/login_header', $data);
            $this->load->view('users/change_password', $data);
            $this->load->view('common/footer', $data);
        } else {

            $hash = $this->encryption->encrypt($this->input->post('usr_new_pwd_1'));
            $data = array(
                'usr_hash' => $hash,
                'usr_id' => $this->session->userdata('usr_id')
            );
            if ($this->Users_model->update_user_password($data)) {
                 redirect('signin/signout');
            }
        }
   
   
    }

    /**public function index() {
        // Set validation rules
        $this->form_validation->set_rules('usr_fname', $this->lang->line('usr_fname'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_lname', $this->lang->line('usr_lname'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_uname', $this->lang->line('usr_uname'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_email', $this->lang->line('usr_email'), 'required|min_length[1]|max_length[255]|valid_email');
        $this->form_validation->set_rules('usr_confirm_email', $this->lang->line('usr_confirm_email'), 'required|min_length[1]|max_length[255]|valid_email|matches[usr_email]');
        $this->form_validation->set_rules('usr_add1', $this->lang->line('usr_add1'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_add2', $this->lang->line('usr_add2'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_add3', $this->lang->line('usr_add3'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_town_city', $this->lang->line('usr_town_city'), 'required|min_length[1]|max_length[125]');
        $this->form_validation->set_rules('usr_zip_pcode', $this->lang->line('usr_zip_pcode'), 'required|min_length[1]|max_length[125]');
        $data['id'] = $this->session->userdata('usr_id');
        $data['page_heading'] = 'Mes infos';
       
        // Begin validation
        if($this->form_validation->run() == FALSE) { // First load or probleme with form
 
            $query = $this->Users_model->get_user_details($data['id']);
            foreach ($query->result() as $row) {

                $usr_fname = $row->usr_fname;
                $usr_lname = $row->usr_lname;
                $usr_uname = $row->usr_uname;
                $usr_email = $row->usr_email;
                $usr_add1 = $row->usr_add1;
                $usr_add2 = $row->usr_add2;
                $usr_add3 = $row->usr_add3;
                $usr_town_city = $row->usr_town_city;
                $usr_zip_pcode = $row->usr_zip_pcode;
            }    
            //Populate form fields with data 
            $data['usr_fname'] = array('name' => 'usr_fname', 'class' =>'form-control', 'id' => 'usr_fname', 'value' =>set_value('usr_fname', $usr_fname), 'maxlength' => '100','size' => '35');
            $data['usr_lname'] = array('name' => 'usr_lname', 'class' =>'form-control', 'id' => 'usr_lname', 'value' =>set_value('usr_lname', $usr_lname), 'maxlength' => '100','size' => '35');
            $data['usr_uname'] = array('name' => 'usr_uname', 'class' =>'form-control', 'id' => 'usr_uname', 'value' =>set_value('usr_uname', $usr_uname), 'maxlength' => '100','size' => '35');
            $data['usr_email'] = array('name' => 'usr_email', 'class' =>'form-control', 'id' => 'usr_email', 'value' =>set_value('usr_email', $usr_email), 'maxlength' => '100','size' => '35');
            $data['usr_confirm_email'] = array('name' =>'usr_confirm_email', 'class' => 'form-control', 'id' =>'usr_confirm_email', 'value' => set_value('usr_confirm_email',$usr_email), 'maxlength' => '100', 'size' => '35');
            $data['usr_add1'] = array('name' => 'usr_add1', 'class' =>'form-control', 'id' => 'usr_add1', 'value' =>set_value('usr_add1', $usr_add1), 'maxlength' => '100','size' => '35');
            $data['usr_add2'] = array('name' => 'usr_add2', 'class' =>'form-control', 'id' => 'usr_add2', 'value' =>set_value('usr_add2', $usr_add2), 'maxlength' => '100','size' => '35');
            $data['usr_add3'] = array('name' => 'usr_add3', 'class' =>'form-control', 'id' => 'usr_add3', 'value' =>set_value('usr_add3', $usr_add3), 'maxlength' => '100','size' => '35');
            $data['usr_town_city'] = array('name' => 'usr_town_city','class' => 'form-control', 'id' => 'usr_town_city', 'value' =>set_value('usr_town_city', $usr_town_city), 'maxlength' =>'100', 'size' => '35');
            $data['usr_zip_pcode'] = array('name' => 'usr_zip_pcode','class' => 'form-control', 'id' => 'usr_zip_pcode', 'value' =>set_value('usr_zip_pcode', $usr_zip_pcode), 'maxlength' =>'100', 'size' => '35');
            $this->load->view('common/header');
            $this->load->view('common/navbar_users');
            $this->load->view('users/me', $data);
            $this->load->view('common/copyright');
        } else { // Validation passed, now escape the data
            
            $data = array(
                'usr_fname' => $this->input->post('usr_fname'),
                'usr_lname' => $this->input->post('usr_lname'),
                'usr_uname' => $this->input->post('usr_uname'),
                'usr_email' => $this->input->post('usr_email'),
                'usr_add1' => $this->input->post('usr_add1'),
                'usr_add2' => $this->input->post('usr_add2'),
                'usr_add3' => $this->input->post('usr_add3'),
                'usr_town_city' => $this->input->post('usr_town_city'),
                'usr_zip_pcode' => $this->input->post('usr_zip_pcode')
            );
            if ($this->Users_model->process_update_user($id, $data)) {
                redirect('users');
            }   
        }
    }
    **/

    //Liste des utilisateurs 
    public function users(){
        $data['page_heading'] = $this->lang->line('list_users');
        $data['query'] = $this->Users_model->get_all_users();
        $this->load->view('common/header');
        $this->load->view('common/navbar_users');
        $this->load->view('users/view_all_users',$data);
        $this->load->view('common/copyright');
    }

    public function delete_user(){

         // Set validation rules
         $this->form_validation->set_rules('id', $this->lang->line('usr_id'), 'required|min_length[1]|max_length[11]|integer|is_natural');
         if ($this->input->post()) {
             $id = $this->input->post('id');
         } else {
             $id = $this->uri->segment(3);
         }
         $data['page_heading'] = $this->lang->line('confirm_delete');
         if ($this->form_validation->run() == FALSE) { // First load,or problem with form
            
             $data['query'] = $this->Users_model->get_user_details($id);
             $this->load->view('common/header');
             $this->load->view('common/navbar_users');
             $this->load->view('users/delete_user', $data);
             $this->load->view('common/copyright');
         } else {
             if ($this->Users_model->delete_user($id)) {
                  $this->Users_model->delete_user_infos($id);
                  $this->Users_model->delete_user_diplome($id);
                  redirect('me/users');
             }else{
                redirect('me/users');
             }
         }
    }




}