<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pembayaran');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->auth->check_login();
    }

    public function index()
    {
        $this->auth->restrict('pembayaran.view');

        $data['title'] = "Daftar Pembayaran";
        $data['pembayaran'] = $this->m_pembayaran->get();
        $this->load->template_admin('pembayaran/index.php', $data);
        
    }

    function get($id = null)
    {
        $data = $this->m_pembayaran->get();
        print_r($data);
    }

    function view() 
    {
        $this->auth->restrict('pembayaran.view');

        $id = $this->uri->segment(3);
        $data['title'] = "Detail Pembayaran";
        $data['pembayaran']  = $this->m_pembayaran->detail($id);
        $this->load->template_admin('pembayaran/view', $data);
    }

    function edit() 
    {
        $this->auth->restrict('pembayaran.edit');

        $id = $this->uri->segment(3);
        $data['title'] = "Edit Data Pembayaran";
        $data['pembayaran']  = $this->m_pembayaran->detail($id);
        $this->load->template_admin('pembayaran/edit', $data);
    }

    function create()
    {
        $this->auth->restrict('pembayaran.create');
        
        $data['title'] = "Input Pembayaran Baru";
        $this->load->template_admin('pembayaran/create', $data);   
    }

    function save()
    {
        $save = $this->m_pembayaran->save();    
        
        if ($save) {
            redirect('pembayaran','refresh');
        } else {
            echo "save failed";
        }
    }

    function delete() 
    {
        $this->auth->restrict('pembayaran.delete');

        $id = $this->uri->segment(3);
        $delete = $this->m_pembayaran->delete($id);    
        
        if ($delete) {
            redirect('pembayaran','refresh');
        } else {
            echo "delete failed";
        }   
    }

    function cek_info_customer()
    {
        $no_faktur = $this->uri->segment(3);
        $info_customer = $this->m_pembayaran->cek_info_customer($no_faktur);
        print_r($info_customer);  
    }
}

/* End of file  */
/* Location: ./application/controllers/ */