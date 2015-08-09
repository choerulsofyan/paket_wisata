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
        $this->load->model('m_pemesanan');
        $this->load->model('m_pembayaran');

        $id = $this->uri->segment(3);
        $data['title'] = "Detail Customer";
        $data['customer'] = $this->m_customer->detail($id);
        $data['info_pemesanan'] = $this->m_pemesanan->getDetailByCustomerId($id);
        $data['info_pembayaran'] = $this->m_pembayaran->cek_info_pembayaran($id);
        $data['info_angsuran'] = $this->m_pembayaran->getPembayaranCustomer($id);

        $this->load->template_admin('customer/view', $data);

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
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
        $this->load->model('m_pemesanan');
        $this->load->model('m_pembayaran');

        $id = $this->uri->segment(3);
        $delete = $this->m_customer->delete($id);    
        
        if ($delete) {
            
            $delete_pemesanan = $this->m_pemesanan->deleteByCustomerId($id);

            if ($delete_pemesanan) {

                $delete_pembayaran = $this->m_pembayaran->deleteByCustomerId($id);

                if ($delete_pembayaran) {
                    redirect('customer','refresh');
                } else {
                    echo "delete pembayaran error";
                }

            } else {
                echo "delete pemesanan error";
            }

        } else {
            echo "delete customer failed";
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