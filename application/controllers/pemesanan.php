<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pemesanan');
        $this->load->helper('url');
        $this->load->library('form_validation');

        $this->auth->check_login();
        
    }

    public function index()
    {
        $this->auth->restrict('pembayaran.view');

        $data['title'] = "Daftar Pemesanan";
        $data['pemesanan'] = $this->m_pemesanan->get();
        $this->load->template_admin('pemesanan/index.php', $data);
    }

    function get($id = null)
    {
        $data = $this->m_pemesanan->get();
        print_r($data);
    }

    function view() 
    {
        $this->auth->restrict('pembayaran.view');

        $id = $this->uri->segment(3);
        $data['title'] = "Detail Pemesanan";
        $data['pemesanan']  = $this->m_pemesanan->detail($id);
        $this->load->template_admin('pemesanan/view', $data);
    }

    function edit() 
    {
        $this->auth->restrict('pembayaran.edit');

        $id = $this->uri->segment(3);
        $data['title'] = "Edit Data Pemesanan";
        $data['pemesanan']  = $this->m_pemesanan->detail($id);
        $this->load->template_admin('pemesanan/edit', $data);
    }

    function save()
    {
        $save = $this->m_pemesanan->save();    
        
        if ($save) {
            redirect('pemesanan','refresh');
        } else {
            echo "save failed";
        }
    }

    function update()
    {
        $update = $this->m_pemesanan->update();    
        
        if ($update) {
            redirect('pemesanan','refresh');
        } else {
            echo "save failed";
        }
    }

    function delete() 
    {
        $this->auth->restrict('pembayaran.delete');

        $this->load->model('m_pembayaran');

        $id = $this->uri->segment(3);
        $delete_pemesanan = $this->m_pemesanan->delete($id);    
        
        if ($delete_pemesanan) {
            
            $delete_pembayaran = $this->m_pembayaran->deleteteByPembayaranId($id);

            if ($delete_pembayaran) {
                redirect('pemesanan','refresh');
            } else {
                echo "delete pembayaran error";
            }

        } else {
            echo "delete pemesanan failed";
        }   
    }

    function cek_total_biaya()
    {
        $this->load->model('m_pemesanan');

        $wisata_id = $this->input->get('wisata_id');
        $jml_orang_dewasa = $this->input->get('jml_orang_dewasa');
        $jml_orang_anak = $this->input->get('jml_orang_anak');

        $total_biaya = $this->m_pemesanan->cek_total_biaya($wisata_id, $jml_orang_dewasa, $jml_orang_anak);
        echo $total_biaya;
    }

}

/* End of file  */
/* Location: ./application/controllers/ */