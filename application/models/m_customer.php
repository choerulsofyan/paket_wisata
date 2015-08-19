<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_customer extends CI_Model {

    public $table = "tcustomer";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get() 
    {   
        $this->db->select('tc.id, tc.nama, tc.tgl_lahir, tc.jenis_kelamin, tc.no_telp, tc.email, tc.status');
        $this->db->from('tcustomer AS tc');
        
        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            $data       = $query->result_array();
            $row_counts = $query->num_rows();

            for ($i = 0; $i < $row_counts; $i++) {
                $number   = $i + 1;
                $no       = array('no' => $number);
                $detail   = array('detail' => "<a href='" . base_url() . "customer/view/" . $data[$i]['id'] . "'>View</a>");
                $data[$i] = $no + $data[$i]; 
                $data[$i] = $data[$i] + $detail; 
            }

        } else {
            $data                  = array();
            $data['no']            = "";
            $data['id']            = "";
            $data['nama']          = "";
            $data['tgl_lahir']     = "";
            $data['jenis_kelamin'] = "";
            $data['no_telp']       = "";
            $data['email']         = "";
            $data['status']        = "";
            $data['detail']        = "";
        }

        $data = array("data" => $data);
        $data = json_encode($data);

        return $data;
    }

    function detail($id)
    {
        $this->db->select('tc.id, tc.nama, tc.tgl_lahir, tc.jenis_kelamin, tc.alamat, tc.no_telp, tc.email, tc.status');
        $this->db->from('tcustomer AS tc');
        $this->db->where('id' , $id); 

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
        $nama          = $this->input->post('nama');
        $tgl_lahir     = $this->input->post('tgl_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $alamat        = $this->input->post('alamat');
        $no_telp       = $this->input->post('no_telp');
        $email         = $this->input->post('email');
        $password      = $this->input->post('password');
        $status        = $this->input->post('status');
        
        $data = array(
            'nama'          => $nama,
            'tgl_lahir'     => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat'        => $alamat,
            'no_telp'       => $no_telp,
            'email'         => $email
        );

        if ($password != "") {
            $data['password'] = md5($password);
        }

        if (empty($status)) {
            $data['status'] = 'AKTIF';
        } else {
            $data['status'] = $status;
        }

        if ($id == null) {            

            $query            = $this->db->insert($this->table, $data);
            
            if ($query) {
                $customer_id = $this->db->insert_id();
                $result      = $customer_id;
            } else {
                $result = false;
            }

            return $result;

        } else {
            
            $this->db->where('id', $id);
            $query = $this->db->update($this->table, $data);

            if ($query) {
                $result = true;
            } else {
                $result = false;
            }

            return $result;

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

    function cek_info_customer($no_faktur)
    {
        $this->db->select('tc.nama, tpm.id as pemesanan_id, tpm.customer_id, tpm.total, sum(tpb.pembayaran) as total_pembayaran, max(tpb.angsuran_ke) as angsuran_ke');
        $this->db->from('tpemesanan tpm');
        $this->db->join('tcustomer tc', 'tpm.customer_id = tc.id', 'inner');
        $this->db->join('tpembayaran tpb', 'tpm.customer_id = tpb.customer_id', 'left');
        $this->db->where('tpm.no_faktur = "' . $no_faktur . '"');
        $this->db->order_by('tpb.id', 'desc');

        $query = $this->db->get();
        $number_of_rows = $query->num_rows();

        if ($number_of_rows > 0)
        {
            $data       = $query->row_array();
            $row_counts = $query->num_rows();

            $data['angsuran_ke'] = $data['angsuran_ke'] + 1;
            $data['sisa_bayar']  = $data['total'] - $data['total_pembayaran'];

            $data = json_encode($data);
            return $data;
        }
    }  
}

/* End of file  */
/* Location: ./application/models/ */