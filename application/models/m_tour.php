<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Tour extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get($kategori_id = null)
    {
        $this->db->select('tpw.id, tpw.judul_wisata, tpw.jumlah_hari, tpw.harga, tpw.deskripsi');
        $this->db->from('tpaket_wisata AS tpw');

        if ($kategori_id != null) {
            $this->db->where('tpw.kategori_id = ' . $kategori_id);
        }
        
        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            $data       = $query->result_array();
            $row_counts = $query->num_rows();

            for ($i = 0; $i < $row_counts; $i++) {
                $book_now   = array('book_now' => "<a href='" . base_url() . "tour/book/" . $data[$i]['id'] . "'>Book Now</a>");
                $detail   = array('detail' => "<a href='" . base_url() . "tour/detail/" . $data[$i]['id'] . "'>View</a>");
                $data[$i] = $data[$i] + $detail + $book_now; 
            }

            return $data;
        }
    }

    function save()
    {
        $nama          = $this->input->post('nama');
        $tgl_lahir     = $this->input->post('tgl_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat        = $this->input->post('alamat');
        $no_telp       = $this->input->post('no_telp');
        $email         = $this->input->post('email');
        $password      = $this->input->post('password');
        $status        = 'AKTIF';
        
        $data = array(
            'nama'          => $nama,
            'tgl_lahir'     => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat'        => $alamat,
            'no_telp'       => $no_telp,
            'email'         => $email,
            'password'      => md5($password),
            'status'        => $status
        );


        $result = $this->db->insert('tcustomer', $data);

        if ($result) {
            // return true;
            $customer_id = $this->db->insert_id();
            return $customer_id;
        } else {
            return false;
        }

    }
    
}

/* End of file  */
/* Location: ./application/models/ */