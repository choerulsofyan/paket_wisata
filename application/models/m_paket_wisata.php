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
        $id = null;

        $this->db->select('*');
        $this->db->from($this->table);

        if ($id != null) {
            $this->db->where('id', $id);
        }

        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            $row = $query->result_array();
            return $row;
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