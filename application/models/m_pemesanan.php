<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pemesanan extends CI_Model {

    public $table = "tpemesanan";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $delete = $this->db->delete($this->table);

        if ($delete) {
            return true;
        } else {
            return false;
        }
    }
  
    function deleteByCustomerId($id)
    {
        $this->db->where('customer_id', $id);
        $delete = $this->db->delete($this->table);

        if ($delete) {
            return true;
        } else {
            return false;
        }
    }

    function save($customer_id)
    {

        $customer_id   = $customer_id;
        $wisata_id     = $this->input->post('wisata_id');
        $no_faktur     = $this->cek_nomor_faktur();
        $tgl_pemesanan = date('Y-m-d');
        $jumlah_orang  = $this->input->post('jumlah_orang');
        $total         = $this->cek_total_biaya($wisata_id, $jumlah_orang);
        
        $data = array(
            'customer_id'   => $customer_id,
            'wisata_id'     => $wisata_id,
            'no_faktur'     => $no_faktur,
            'tgl_pemesanan' => $tgl_pemesanan,
            'jumlah_orang'  => $jumlah_orang,
            'total'         => $total
        );

        $result = $this->db->insert($this->table, $data);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function cek_total_biaya($wisata_id, $jumlah_orang)
    {
        $this->db->select('harga');
        $this->db->from('tpaket_wisata tpw');
        $this->db->where('tpw.id = ' . $wisata_id);

        $query       = $this->db->get();
        $data        = $query->row_array();
        $total_biaya = $data['harga'] * $jumlah_orang;

        return $total_biaya;
    }

    function get_paket_wisata()
    {
        $this->db->select('id, judul_wisata');
        $this->db->from($this->table);

        $query = $this->db->get();
        $data  = $query->result_array();
        return $data;
    }

    function cek_nomor_faktur()
    {
        $this->db->select('no_faktur');
        $this->db->from($this->table);
        $this->db->order_by("id", "desc"); 
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {

            $data      = $query->row_array();
            $result    = $data['no_faktur'];
            $no_faktur = substr($result, -4);
            $no_faktur = intval($no_faktur);
            $no_faktur = $no_faktur + 1;
            $no_faktur = strval($no_faktur);
            $length    = strlen($no_faktur);

            if ($length == 1) {
                $no_faktur = "FKT-000" . $no_faktur;
            } elseif ($length == 2) {
                $no_faktur = "FKT-00" . $no_faktur;
            } elseif ($length == 3) {
                $no_faktur = "FKT-0" . $no_faktur;
            } elseif ($length == 4) {
                $no_faktur = "FKT-" . $no_faktur;
            }
            
        } else {
            $no_faktur = "FKT-0001";
        }

        return $no_faktur;
    }

}

/* End of file  */
/* Location: ./application/models/ */