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
        $customer_id         = $customer_id;
        $wisata_id           = $this->input->post('wisata_id');
        $no_faktur           = $this->cek_nomor_faktur();
        $tgl_pemesanan       = date('Y-m-d');
        $jumlah_orang_dewasa = $this->input->post('jumlah_orang_dewasa');
        $jumlah_orang_anak   = $this->input->post('jumlah_orang_anak');
        $total               = $this->cek_total_biaya($wisata_id, $jumlah_orang_dewasa, $jumlah_orang_anak);
        
        $data = array(
            'customer_id'         => $customer_id,
            'wisata_id'           => $wisata_id,
            'no_faktur'           => $no_faktur,
            'tgl_pemesanan'       => $tgl_pemesanan,
            'jumlah_orang_dewasa' => $jumlah_orang_dewasa,
            'jumlah_orang_anak'   => $jumlah_orang_anak,
            'total'               => $total
        );

        echo "<pre>";
        print_r($data);
        echo "</pre>";

        $result = $this->db->insert($this->table, $data);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function update()
    {
        $id            = $this->input->post('id');
        $tgl_pemesanan = $this->input->post('tgl_pemesanan');
        $jumlah_orang_dewasa  = $this->input->post('jml_orang_dewasa');
        $jumlah_orang_anak  = $this->input->post('jml_orang_anak');
        $total         = $this->input->post('total');

        $data = array(
            'tgl_pemesanan' => $tgl_pemesanan,
            'jumlah_orang_dewasa'  => $jumlah_orang_dewasa,
            'jumlah_orang_anak'  => $jumlah_orang_anak,
            'total'         => $total
        );

        $this->db->where('id', $id);
        $result = $this->db->update($this->table, $data);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function cek_total_biaya($wisata_id, $jumlah_orang_dewasa, $jumlah_orang_anak)
    {
        $this->db->select('harga');
        $this->db->from('tpaket_wisata tpw');
        $this->db->where('tpw.id = ' . $wisata_id);

        $query              = $this->db->get();
        $data               = $query->row_array();
        $total_biaya_dewasa = $data['harga'] * $jumlah_orang_dewasa;
        $total_biaya_anak   = ($data['harga'] * $jumlah_orang_anak) * 0.5;
        $total_biaya        = $total_biaya_dewasa + $total_biaya_anak;

        return $total_biaya;
    }

    /*function get_list_paket_wisata()
    {
        $this->db->select('id, judul_wisata');
        $this->db->from($this->table);

        $query = $this->db->get();
        $data  = $query->result_array();
        return $data;
    }*/

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

    function get() 
    {   

        $this->db->select('tpm.id, tc.nama , tpw.judul_wisata , tpm.no_faktur, tpm.tgl_pemesanan, tpm.jumlah_orang_dewasa, tpm.jumlah_orang_anak, tpm.total')
                  ->from('tpemesanan AS tpm, tpaket_wisata AS tpw, tcustomer AS tc')
                  ->where('tpm.customer_id = tc.id')
                  ->where('tpm.wisata_id = tpw.id');

        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            $data       = $query->result_array();
            $row_counts = $query->num_rows();

            for ($i = 0; $i < $row_counts; $i++) {
                $number   = $i + 1;
                $no       = array('no' => $number);
                $detail   = array('detail' => "<a href='" . base_url() . "pemesanan/view/" . $data[$i]['id'] . "'>View</a>");
                $data[$i] = $no + $data[$i]; 
                $data[$i] = $data[$i] + $detail; 
            }

        } else {
            $data = array();
            $data['no']                  = "";
            $data['id']                  = "";
            $data['nama']                = "";
            $data['judul_wisata']        = "";
            $data['no_faktur']           = "";
            $data['tgl_pemesanan']       = "";
            $data['jumlah_orang_dewasa'] = "";
            $data['jumlah_orang_anak']   = "";
            $data['total']               = "";
            $data['detail']              = "";
        }

        $data = array("data" => $data);
        $data = json_encode($data);

        return $data;
    }

    function detail($id)
    {
        $this->db->select('tpm.id, tpm.wisata_id, tc.nama as customer_nama , tpw.judul_wisata , tpm.no_faktur, tpm.tgl_pemesanan, tpm.jumlah_orang_dewasa, tpm.jumlah_orang_anak, tpm.total')
                  ->from('tpemesanan AS tpm, tpaket_wisata AS tpw, tcustomer AS tc')
                  ->where('tpm.customer_id = tc.id')
                  ->where('tpm.wisata_id = tpw.id')
                  ->where('tpm.id = ' . $id);

        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            $data = $query->row_array();
            return $data;
        }
    }

    function getDetailByCustomerId($customer_id)
    {
        $this->db->select('tpm.id as pemesanan_id, tpw.judul_wisata, tpm.no_faktur, tpm.tgl_pemesanan, tpm.jumlah_orang_dewasa, tpm.jumlah_orang_anak')
                  ->from('tpemesanan AS tpm, tpaket_wisata AS tpw, tcustomer AS tc')
                  ->where('tpm.customer_id = tc.id')
                  ->where('tpm.wisata_id = tpw.id')
                  ->where('tc.id = ' . $customer_id);

        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            $data = $query->row_array();
            return $data;
        }
    }



}

/* End of file  */
/* Location: ./application/models/ */