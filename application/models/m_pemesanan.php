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
}

/* End of file  */
/* Location: ./application/models/ */