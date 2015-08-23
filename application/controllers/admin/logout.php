<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Logout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect(base_url() . 'admin/login','refresh');
    }

}

/* End of file  */
/* Location: ./application/controllers/ */