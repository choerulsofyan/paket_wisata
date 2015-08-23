<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tour extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tour');
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->library('form_validation');
    }

    public function index_b()
    {
        $kategori_id   = $this->uri->segment(3);
        $data['title'] = "Daftar Paket Tour";
        $data['tours']  = $this->m_tour->get();
        $this->load->template_public('tour/index.php', $data);
    }


    function index()
    {   
        $this->load->model('m_paket_wisata');
        $data['wisata_domestik']    = $this->m_paket_wisata->get_paket_wisata(1);
        $data['wisata_mancanegara'] = $this->m_paket_wisata->get_paket_wisata(2);
        $this->load->template_public('public/home.php', $data);   
    }

    function category()
    {
        $kategori_id   = $this->uri->segment(3);
        $data['title'] = "Daftar Paket Tour";
        $data['tours']  = $this->m_tour->get($kategori_id);
        $this->load->template_public('tour/index.php', $data);
    }

    function book()
    {
        $wisata_id       = $this->uri->segment(3);
        $data['wisata_id'] = $wisata_id;
        $this->load->template_public('tour/register.php', $data);
    }

    function save()
    {
        $this->load->model('m_customer');
        $this->load->model('m_pemesanan');

        $customer = $this->m_customer->save();    
        
        if ($customer) {

            $save_pemesanan = $this->m_pemesanan->save($customer);

            if($save_pemesanan) {
                redirect('tour','refresh');
            } else {
                echo "save pemesanan failed!";
            }

        } else {
            echo "save customer failed";
        }
    }

}

/* End of file  */
/* Location: ./application/controllers/ */