<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_user', '', TRUE);
        $this->load->helper('url');
        $this->load->library('form_validation');
    
        // $access = array('ADMIN');
        // $this->auth->restrict($access);
    }

    function login()
    {
        if ($this->session->userdata('logged_in')) {
            redirect(base_url() . 'dashboard','refresh');
        }

        $this->load->helper(array('form'));
        $this->load->view('login');
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect(base_url() . 'user/login','refresh');
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
                'username'   => $result['username'],
                'group_user' => $result['hak_akses']
            );

            $this->session->set_userdata('logged_in', $sess_array);

            return TRUE;

        } else {
            $this->form_validation->set_message('check_login', 'Invalid username or password');
            return FALSE;
        }
    }

    public function index()
    {
        $data['title'] = "Daftar User";
        $data['user'] = $this->m_user->get();
        $this->load->template_admin('user/index.php', $data);
    }

    function get($id = null)
    {
        $data = $this->m_user->get();
        print_r($data);
    }

    function view() 
    {
        $id = $this->uri->segment(3);
        $data['title'] = "Detail User";
        $data['user']  = $this->m_user->detail($id);
        $this->load->template_admin('user/view', $data);
    }

    function edit() 
    {
        $id = $this->uri->segment(3);
        $data['title'] = "Edit Data User";
        $data['user']  = $this->m_user->detail($id);
        $this->load->template_admin('user/edit', $data);
    }

    function create()
    {
        $data['title'] = "Input User Baru";
        $this->load->template_admin('user/create', $data);   
    }

    function save()
    {
        $id = $this->input->post('id');
        $save = $this->m_user->save();    
        
        if ($save) {
            redirect('user','refresh');
        } else {
            echo "save failed";
        }
    }

    function delete() 
    {
        $id = $this->uri->segment(3);
        $delete = $this->m_user->delete($id);    
        
        if ($delete) {
            redirect('user','refresh');
        } else {
            echo "delete failed";
        }   
    }

}

/* End of file  */
/* Location: ./application/controllers/ */