<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paket_wisata extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_paket_wisata');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->auth->check_login();
    }

    public function index()
    {
        $this->auth->restrict('paket_wisata.view');

        $data['title']        = "Daftar Paket Wisata";
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
        $this->auth->restrict('paket_wisata.view');

        $id = $this->uri->segment(4);
        $data['title'] = "Detail Paket Wisata";
        $data['paket_wisata']  = $this->m_paket_wisata->detail($id);
        $this->load->template_admin('paket_wisata/view', $data);
    }

    function edit() 
    {
        $this->auth->restrict('paket_wisata.edit');

        $id = $this->uri->segment(4);
        $data['title'] = "Edit Data Paket Wisata";
        $data['paket_wisata']  = $this->m_paket_wisata->detail($id);
        $this->load->template_admin('paket_wisata/edit', $data);
    }

    function create()
    {
        $this->auth->restrict('paket_wisata.create');

        $data['title'] = "Tambah Paket Wisata";
        $this->load->template_admin('paket_wisata/create', $data);   
    }

    function save()
    {
        $id = $this->input->post('id');
        $save = $this->m_paket_wisata->save();    
        
        if ($save) {
            redirect('admin/paket_wisata','refresh');
        } else {
            echo "save failed";
        }
    }

    function delete() 
    {
        $this->auth->restrict('paket_wisata.delete');
        
        $this->load->model('m_paket_wisata_detail');

        $id = $this->uri->segment(4);
        $delete_paket_wisata = $this->m_paket_wisata->delete($id);
        
        if ($delete_paket_wisata) {

            $delete_paket_wisata_detail = $this->m_paket_wisata_detail->deleteByPaketWisataId($id);

            if ($delete_paket_wisata_detail) {
                redirect('admin/paket_wisata','refresh');
            } else {
                echo "delete paket wisata detail failed";
            }

        } else {
            echo "delete paket wisata failed";
        }   
    }

    function get_list_paket_wisata() 
    {
        $paket_wisata = $this->m_paket_wisata->get_list_paket_wisata();
        print_r($paket_wisata);
    }    

    function get_paket_wisata($kategori_id) 
    {
        $paket_wisata = $this->m_paket_wisata->get_paket_wisata($kategori_id);
        print_r($paket_wisata);
    }    

}

/* End of file  */
/* Location: ./application/controllers/ */