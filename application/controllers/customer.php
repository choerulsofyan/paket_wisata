<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_customer');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->model('m_pemesanan');
        $this->load->model('m_pembayaran');
        $session = $this->session->userdata('customer_logged_in');

        if ($session != TRUE) {
            redirect('customer/login','refresh');
        } else {
            $data['customer']        = $this->session->userdata("customer_logged_in");
            $customer_id             = $data['customer']['id'];
            $data['info_pemesanan']  = $this->m_pemesanan->getDetailByCustomerId($customer_id);
            $data['info_pembayaran'] = $this->m_pembayaran->cek_info_pembayaran($customer_id);
            $data['info_angsuran']   = $this->m_pembayaran->getCustomerAngsuran($customer_id);

            $this->load->template_public('customer_info', $data);
        }


    }

    function login()
    {
        $this->session = $this->session->userdata('customer_logged_in');

        if ($this->session == TRUE) {
            redirect('customer','refresh');
        } else {
            $this->load->view('customer_login');
        }

    }

    function logout()
    {
        $this->session->unset_userdata('customer_logged_in');
        session_destroy();
        redirect(base_url() . 'customer/login','refresh');
    }

    function verifyLogin()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_login');

        if ($this->form_validation->run() == FALSE) {
            redirect(base_url() . 'customer/login','refresh');
        } else {
            redirect(base_url() . 'customer','refresh');
        }
    }

    function check_login()
    {
        $email    = $this->input->post('email');
        $password = $this->input->post('password');

        $result = $this->m_customer->login($email, $password);

        if ($result) {

            $sess_array = array(
                'id'            => $result['id'],
                'nama'          => $result['nama'],
                'tgl_lahir'     => $result['tgl_lahir'],
                'jenis_kelamin' => $result['jenis_kelamin'],
                'alamat'        => $result['alamat'],
                'no_telp'       => $result['no_telp'],
                'email'         => $result['email']
            );

            $this->session->set_userdata('customer_logged_in', $sess_array);

            return TRUE;

        } else {
            $this->form_validation->set_message('check_login', 'Invalid email or password');
            return FALSE;
        }
    }
}

/* End of file  */
/* Location: ./application/controllers/ */