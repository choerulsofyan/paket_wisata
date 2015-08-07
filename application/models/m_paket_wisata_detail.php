<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_paket_wisata_detail extends CI_Model {

    public $table = "tpaket_wisata_detail";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get() 
    {   

        $this->db->select('tpwd.id, tpw.id AS wisata_id, tpw.judul_wisata, tpwd.hari_ke, tpwd.rute')
                  ->from('tpaket_wisata_detail AS tpwd, tpaket_wisata AS tpw')
                  ->where('tpwd.wisata_id = tpw.id');

        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            $data       = $query->result_array();
            $row_counts = $query->num_rows();

            for ($i = 0; $i < $row_counts; $i++) {
                $number   = $i + 1;
                $no       = array('no' => $number);
                $detail   = array('detail' => "<a href='" . base_url() . "paket_wisata_detail/view/" . $data[$i]['id'] . "'>View</a>");
                $data[$i] = $no + $data[$i]; 
                $data[$i] = $data[$i] + $detail; 
            }

            $data = array("data" => $data);
            $data = json_encode($data);

            return $data;
        }
    }

    function detail($id)
    {
        $this->db->select('tpwd.id, tpw.id AS wisata_id, tpw.judul_wisata, tpwd.hari_ke, tpwd.rute, tpwd.deskripsi')
                  ->from('tpaket_wisata_detail AS tpwd, tpaket_wisata AS tpw')
                  ->where('tpwd.wisata_id = tpw.id')
                  ->where('tpwd.id = ' . $id);

        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            $data = $query->row_array();
            return $data;
        }
    }

    function save()
    {
        $id        = $this->input->post('id');
        $wisata_id = $this->input->post('wisata_id');
        $rute      = $this->input->post('rute');
        $hari_ke   = $this->input->post('hari_ke');
        $deskripsi = $this->input->post('deskripsi');
        
        $data = array(
            'wisata_id' => $wisata_id,
            'hari_ke'   => $hari_ke,
            'rute'      => $rute,
            'deskripsi' => $deskripsi
        );


        if ($id == null) {
            $result = $this->db->insert($this->table, $data);
        } else {
            $this->db->where('id', $id);
            $result = $this->db->update($this->table, $data);
        }

        if ($result) {
            return true;
        } else {
            return false;
        }
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

    function deleteByPaketWisataId($id)
    {
        $this->db->where('wisata_id', $id);
        $delete = $this->db->delete($this->table);

        if ($delete) {
            return true;
        } else {
            return false;
        }
    }
    
}

/* End of file  */
/* Location: ./application/models/ */