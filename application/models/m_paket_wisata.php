<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_paket_wisata extends CI_Model {

    public $table = "tpaket_wisata";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get() 
    {   

        $this->db->select('tpw.judul_wisata, tkt.nama_kategori, tpw.jumlah_hari, tpw.harga')
                  ->from('tpaket_wisata AS tpw, tkategori AS tkt')
                  ->where('tpw.kategori_id = tkt.id');

        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            $data       = $query->result_array();
            $row_counts = $query->num_rows();

            for ($i = 0; $i < $row_counts; $i++) {
                $number   = $i + 1;
                $no       = array('no' => $number);
                $data[$i] = $no + $data[$i]; 
            }

            $data = array("data" => $data);
            $data = json_encode($data);

            return $data;
        }
    }

    function save($data)
    {
        $result = $this->db->insert($this->table, $data);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    
}

/* End of file  */
/* Location: ./application/models/ */