<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paket_wisata extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_paket_wisata');
        $this->load->helper('url');
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        $data['title'] = "Daftar Paket Wisata";
        $data['paket_wisata'] = $this->m_paket_wisata->get();
        $this->load->template_admin('paket_wisata/index.php', $data);
    }

    function get($id = null)
    {
        $data = $this->m_paket_wisata->get();
        print_r($data);
    }

    function view() 
    {
        $id = $this->uri->segment(3);
        $data['title'] = "Detail Paket Wisata";
        $data['paket_wisata']  = $this->m_paket_wisata->detail($id);
        $this->load->template_admin('paket_wisata/view', $data);
    }

    function edit() 
    {
        $id = $this->uri->segment(3);
        $data['title'] = "Edit Data Paket Wisata";
        $data['paket_wisata']  = $this->m_paket_wisata->detail($id);
        $this->load->template_admin('paket_wisata/edit', $data);

        // print_r($data);
    }

    function create()
    {
        $data['title'] = "Input Paket Wisata";
        $this->load->template_admin('paket_wisata/create', $data);   
    }

    function save()
    {
        $save = $this->m_paket_wisata->save();    
        
        if ($save) {
            // echo "save success!!";
            redirect('paket_wisata/create','refresh');
        } else {
            echo "save failed";
        }
    }

}

/* End of file  */
/* Location: ./application/controllers/ */