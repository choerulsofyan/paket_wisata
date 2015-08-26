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

        $id = $this->uri->segment(4);
        $data['title'] = "Detail Pemesanan";
        $data['pemesanan']  = $this->m_pemesanan->detail($id);
        $this->load->template_admin('pemesanan/view', $data);
    }

    function edit() 
    {
        $this->auth->restrict('pembayaran.edit');

        $id = $this->uri->segment(4);
        $data['title'] = "Edit Data Pemesanan";
        $data['pemesanan']  = $this->m_pemesanan->detail($id);
        $this->load->template_admin('pemesanan/edit', $data);
    }

    function save()
    {
        $save = $this->m_pemesanan->save();    
        
        if ($save) {
            redirect('admin/pemesanan','refresh');
        } else {
            echo "save failed";
        }
    }

    function update()
    {
        $update = $this->m_pemesanan->update();    
        
        if ($update) {
            redirect('admin/pemesanan','refresh');
        } else {
            echo "save failed";
        }
    }

    function delete() 
    {
        $this->auth->restrict('pembayaran.delete');

        $this->load->model('m_pembayaran');

        $id = $this->uri->segment(4);
        $delete_pemesanan = $this->m_pemesanan->delete($id);    
        
        if ($delete_pemesanan) {
            
            $delete_pembayaran = $this->m_pembayaran->deleteteByPembayaranId($id);

            if ($delete_pembayaran) {
                redirect('admin/pemesanan','refresh');
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

    function create()
    {
        $data['title'] = "Buat Pemesanan";
        $this->load->template_admin('pemesanan/create', $data);
    }

    public function data2pdf($download_pdf = '', $pemesanan_id = null)
    {
        $this->load->helper('exportpdf_helper'); 

        $ret = '';
        $ID = 1; //misalnya saja id user adalah 1
        $pdf_filename = 'user_info_'.$ID.'.pdf';
        $link_download = ($download_pdf == TRUE)? '' : anchor(base_url().'admin/pemesanan/data2pdf/true', 'Download Pdf');
         
        $query = $this->db->query("SELECT * FROM tpemesanan");

        if ($query->num_rows() > 0) {
            $user_info = $query->row_array();
        }
         
        $data_header = array('title' => 'Convert Codeigniter to PDF',);

        $data_userinfo = array(     
            'user_info' => $user_info,
            'link_download' => $link_download
        );

        //$header = $this->load->view('header', $data_header, true);
        $user_info = $this->load->view('user_table', $data_userinfo, true);
        //$footer = $this->load->view('footer', '', true);
        
        //$output = $header.$user_info.$footer;
        $output = $user_info;
        
        if ($download_pdf == TRUE) {
            generate_pdf($output, $pdf_filename);
        } else {
            echo $output;
        }
    }
}

/* End of file  */
/* Location: ./application/controllers/ */