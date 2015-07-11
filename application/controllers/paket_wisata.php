<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paket_wisata extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_paket_wisata');
    }

    public function index()
    {
        $data['title'] = "Daftar Paket Wisata";
        $data['paket_wisata'] = $this->m_paket_wisata->get();
        // print_r($data);
        $this->load->view('paket_wisata/index.php', $data);
    }

}

/* End of file  */
/* Location: ./application/controllers/ */