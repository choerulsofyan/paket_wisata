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
        $upload_gambar = $this->do_upload();

        $id     = $this->input->post('id');
        $gambar = $this->input->post('gambar');

        if ($id != null && $upload_gambar) {
            $this->delete_image($id);
        }

        $save = $this->m_paket_wisata->save($upload_gambar);
        
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

        $delete_image = $this->delete_image($id);

        if ($delete_image) {

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
        } else {
            echo "delete gambar failed";
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

    function do_upload()
    {
        $config['upload_path']   = './assets/images/tours/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = '10240';
        $config['max_width']     = '1024';
        $config['max_height']    = '768';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            // echo $this->upload->display_errors();
            return false;
        } else {
            $file_name = $this->upload->data();
            $file_name = $file_name['file_name'];

            return $file_name;
        }
    }

    function get_image_name($id) 
    {
        $image_name = $this->m_paket_wisata->get_image_name($id);
        return $image_name;
    }

    function delete_image($id)
    {
        $this->load->helper("file");
        $image_name = $this->get_image_name($id);
        
        // echo "file name: " . $image_name;

        if ($image_name != null) {

            $file_path         = "./assets/images/tours/" . $image_name;
        
            if (file_exists($file_path)) {

                $delete_image = unlink($file_path);
                
                if ($delete_image) {
                    // echo "delete success";
                    return true;
                } else {
                    echo "delete failed";
                    // return false;
                }
            } else {
                echo "path : " . $file_path;
                echo "<br/> file doesn't exists";
                // return false;
            }
        } else {
            echo "this image doesn't exists";
            // return false;
        }
    }

}

/* End of file  */
/* Location: ./application/controllers/ */