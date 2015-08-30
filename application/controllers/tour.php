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

    function index()
    {   
        $this->load->model('m_paket_wisata');
        $data['wisata_domestik']    = $this->m_paket_wisata->get_paket_wisata(1);
        $data['wisata_mancanegara'] = $this->m_paket_wisata->get_paket_wisata(2);
        $this->load->template_public('public/home.php', $data);   
    }

    function contact()
    {
        $this->load->template_public('public/contact.php');   
    }

    function about()
    {
        $this->load->template_public('public/about.php');   
    }

    function category()
    {
        $kategori_id   = $this->uri->segment(3);
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

    function detail()
    {
        $this->load->model('m_paket_wisata');
        $this->load->model('m_paket_wisata_detail');

        $wisata_id       = $this->uri->segment(3);
        $data['paket_wisata']  = $this->m_paket_wisata->detail($wisata_id);
        $data['rute']  = $this->m_paket_wisata_detail->getRuteByPaketWisataId($wisata_id);
        $this->load->template_public('public/detail.php', $data);
    }    

}

/* End of file  */
/* Location: ./application/controllers/ */