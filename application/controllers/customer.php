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
        $data['title'] = "Daftar Customer";
        $data['customer'] = $this->m_customer->get();
        $this->load->template_admin('customer/index.php', $data);
        
    }

    function get($id = null)
    {
        $data = $this->m_customer->get();
        print_r($data);
    }

    function view() 
    {
        $id = $this->uri->segment(3);
        $data['title'] = "Detail Customer";
        $data['customer']  = $this->m_customer->detail($id);
        $this->load->template_admin('customer/view', $data);
    }

    function edit() 
    {
        $id = $this->uri->segment(3);
        $data['title'] = "Edit Data Customer";
        $data['customer']  = $this->m_customer->detail($id);
        $this->load->template_admin('customer/edit', $data);
    }

    function create()
    {
        $data['title'] = "Input Customer Baru";
        $this->load->template_admin('customer/create', $data);   
    }

    function save()
    {
        $save = $this->m_customer->save();    
        
        if ($save) {
            redirect('customer','refresh');
        } else {
            echo "save failed";
        }
    }

    function delete() 
    {
        $id = $this->uri->segment(3);
        $delete = $this->m_customer->delete($id);    
        
        if ($delete) {
            redirect('customer','refresh');
        } else {
            echo "delete failed";
        }   
    }

    function cek_info_customer()
    {
        $no_faktur = $this->uri->segment(3);
        $info_customer = $this->m_customer->cek_info_customer($no_faktur);
        print_r($info_customer);  
    }
}

/* End of file  */
/* Location: ./application/controllers/ */