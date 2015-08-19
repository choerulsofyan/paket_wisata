<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->helper('url');  
        $this->load->library('form_validation');  
        $this->auth->check_login();
    }

    public function index()
    {
        $this->auth->restrict('user.view');

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
        $this->auth->restrict('user.view');        

        $id = $this->uri->segment(3);
        $data['title'] = "Detail User";
        $data['user']  = $this->m_user->detail($id);
        $this->load->template_admin('user/view', $data);
    }

    function edit() 
    {
        $this->auth->restrict('user.edit');

        $id = $this->uri->segment(3);
        $data['title'] = "Edit Data User";
        $data['user']  = $this->m_user->detail($id);
        $this->load->template_admin('user/edit', $data);
    }

    function create()
    {
        $this->auth->restrict('user.create');
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
        $this->auth->restrict('user.delete');

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