<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {

    public $table = "tuser";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get() 
    {   

        $this->db->select('tu.id, tu.nama_lengkap, tu.email, tu.hak_akses, tu.status')
                  ->from('tuser AS tu');

        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            $data       = $query->result_array();
            $row_counts = $query->num_rows();

            for ($i = 0; $i < $row_counts; $i++) {
                $number   = $i + 1;
                $no       = array('no' => $number);
                $detail   = array('detail' => "<a href='" . base_url() . "user/view/" . $data[$i]['id'] . "'>View</a>");
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
        $this->db->select('tu.id, tu.nama_lengkap, tu.tgl_lahir, tu.jenis_kelamin, tu.alamat, tu.email, tu.hak_akses, tu.status')
                  ->from('tuser AS tu')
                  ->where('tu.id = ' . $id);

        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            $data = $query->row_array();
            return $data;
        }
    }

    function save()
    {
        $id            = $this->input->post('id');
        $nama_lengkap  = $this->input->post('nama_lengkap');
        $tgl_lahir     = $this->input->post('tgl_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat        = $this->input->post('alamat');
        $email         = $this->input->post('email');
        $username      = $this->input->post('username');
        $password      = $this->input->post('password');
        $hak_akses     = $this->input->post('hak_akses');
        $status        = $this->input->post('status');
        
        $data = array(
            'nama_lengkap'  => $nama_lengkap,
            'tgl_lahir'     => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat'        => $alamat,
            'email'         => $email,
            'username'      => $username,
            'password'      => md5($password),
            'hak_akses'     => $hak_akses,
            'status'        => $status
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
    
}

/* End of file  */
/* Location: ./application/models/ */