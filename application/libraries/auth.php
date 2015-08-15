<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_user');
    }

    /*public function check_login()
    {
        $this->session = $this->ci->session->userdata('logged_in');

        if ($this->session != TRUE) {
            redirect('user/login','refresh');
        }
    }*/

/*    public function restrict($group_user)
    {
        $this->session = $this->ci->session->userdata('logged_in');

        if ($this->session != TRUE) {
            redirect('user/login','refresh');
        } else {
            $this->user = (object) $this->ci->session->userdata('logged_in');
            
            if ($this->user->group_user != $group_user) {
                redirect('dashboard','refresh');
            }
        }
    }*/

    /*public function restrict($access)
    {
        $this->session = $this->ci->session->userdata('logged_in');

        if ($this->session != TRUE) {
            redirect('user/login','refresh');
        } else {
            $this->user = (object) $this->ci->session->userdata('logged_in');
            
            if (!in_array($this->user->group_user, $access)) {
                redirect('dashboard','refresh');
            }
        }
    }*/

    public function restrict($access)
    {
        $this->session = $this->ci->session->userdata('logged_in');

        if ($this->session != TRUE) {
            redirect('user/login','refresh');
        } else {
            $this->user = (object) $this->ci->session->userdata('logged_in');
            $result     = $this->ci->m_user->check_privileges($this->user->group_user, $access);

            if (!$result) {
                redirect('dashboard','refresh');
            }
        }
    }

}

/* End of file auth.php */
/* Location: ./application/libraries/auth.php */
