<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    function index()
    {
        if ($this->session->userdata('logged_in')) {
            redirect(base_url() . 'dashboard','refresh');
        }

        $this->load->helper(array('form'));
        $this->load->view('login');
    }

    function verifyLogin()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_login');

        if ($this->form_validation->run() == FALSE) {
            redirect(base_url() . 'user/login','refresh');
        } else {
            redirect(base_url() . 'dashboard','refresh');
        }
    }

    function check_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $result = $this->m_user->login($username, $password);

        if ($result) {

            $sess_array = array(
                'id'         => $result['id'],
                'nama'       => $result['nama_lengkap'],
                'username'   => $result['username'],
                'group_user' => $result['grup_user']
            );

            $this->session->set_userdata('logged_in', $sess_array);

            return TRUE;

        } else {
            $this->form_validation->set_message('check_login', 'Invalid username or password');
            return FALSE;
        }
    }

}

/* End of file  */
/* Location: ./application/controllers/ */