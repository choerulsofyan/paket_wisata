<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paket_wisata_detail extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_paket_wisata_detail');
        $this->load->helper('url');
        $this->load->library('form_validation');
        
        $this->auth->check_login();
    }

    public function index()
    {
        $this->auth->restrict('paket_wisata_detail.view');

        $data['title'] = "Detail Paket Wisata";
        $data['paket_wisata'] = $this->m_paket_wisata_detail->get();
        $this->load->template_admin('paket_wisata_detail/index.php', $data);
    }

    function get($id = null)
    {
        $data = $this->m_paket_wisata_detail->get();
        print_r($data);
    }

    function view() 
    {
        $this->auth->restrict('paket_wisata_detail.view');

        $id = $this->uri->segment(3);
        $data['title'] = "Detail Paket Wisata";
        $data['paket_wisata_detail']  = $this->m_paket_wisata_detail->detail($id);
        $this->load->template_admin('paket_wisata_detail/view', $data);
    }

    function edit() 
    {
        $this->auth->restrict('paket_wisata_detail.edit');

        $id = $this->uri->segment(3);

        $this->load->model('m_paket_wisata');
        $data['paket_wisata']        = $this->m_paket_wisata->get_paket_wisata();
        $data['paket_wisata_detail'] = $this->m_paket_wisata_detail->detail($id);
        $data['title']               = "Edit Data Paket Wisata";
        $this->load->template_admin('paket_wisata_detail/edit', $data);
    }

    function create()
    {
        $this->auth->restrict('paket_wisata_detail.create');

        $this->load->model('m_paket_wisata');

        $paket_wisata_id = $this->uri->segment(3);
        $data['title']   = "Input Paket Wisata Detail";
        
        if ($paket_wisata_id != null || $paket_wisata_id != "") {
            $data['paket_wisata']  = $this->m_paket_wisata->get_paket_wisata($paket_wisata_id);
        } else {
            $data['paket_wisata']  = $this->m_paket_wisata->get_paket_wisata();
        }
        
        $this->load->template_admin('paket_wisata_detail/create', $data);   
    }

    function save()
    {
        $save = $this->m_paket_wisata_detail->save();    
        
        if ($save) {
            redirect('paket_wisata_detail','refresh');
        } else {
            echo "save failed";
        }
    }

    function delete() 
    {
        $this->auth->restrict('paket_wisata_detail.delete');
        
        $id = $this->uri->segment(3);
        $delete = $this->m_paket_wisata_detail->delete($id);    
        
        if ($delete) {
            redirect('paket_wisata_detail','refresh');
        } else {
            echo "delete failed";
        }   
    }

}

/* End of file  */
/* Location: ./application/controllers/ */