<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public
    function __construct()
    {
        parent::__construct();
        $this->form_validation->set_error_delimiters('<div
        class="alert alert-warning" role="alert">', '</div>');

        if ($this->session->userdata('langue') === 'french')
        {
            $this->lang->load('fr_admin', 'french');
        } /*else{
           $this->lang->load('fr_admin','french');
           }*/

    }
}