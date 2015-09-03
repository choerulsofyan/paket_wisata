<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pembayaran extends CI_Model {

    public $table = "tpembayaran";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get() 
    {   
        $this->db->select('tp.id, tp.no_faktur, tp.tgl_pembayaran, tc.nama AS customer_nama, tp.total, tp.pembayaran, tp.angsuran_ke')
                  ->from('tpembayaran AS tp, tcustomer AS tc')
                  ->where('tp.customer_id = tc.id');

        
        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            $data       = $query->result_array();
            $row_counts = $query->num_rows();

            for ($i = 0; $i < $row_counts; $i++) {
                $number   = $i + 1;
                $no       = array('no' => $number);
                $detail   = array('detail' => "<a href='" . base_url() . "admin/pembayaran/view/" . $data[$i]['id'] . "'>View</a>");
                $data[$i] = $no + $data[$i]; 
                $data[$i] = $data[$i] + $detail; 
            }

        } else {
            $data                   = array();
            $data['no']             = "";
            $data['id']             = "";
            $data['no_faktur']      = "";
            $data['tgl_pembayaran'] = "";
            $data['customer_nama']  = "";
            $data['total']          = "";
            $data['pembayaran']     = "";
            $data['angsuran_ke']    = "";
            $data['detail']         = "";
        }

        $data = array("data" => $data);
        $data = json_encode($data);

        return $data;
        
    }

    function detail($id)
    {
        $this->db->select('tpb.id, tpb.no_faktur, tc.nama as customer_nama, tpm.id as pemesanan_id, tpm.customer_id, tpm.total, tpb.pembayaran, tpb.angsuran_ke');
        $this->db->from('tpemesanan tpm');
        $this->db->join('tcustomer tc', 'tpm.customer_id = tc.id', 'inner');
        $this->db->join('tpembayaran tpb', 'tpm.customer_id = tpb.customer_id', 'left');
        $this->db->where('tpb.id = "' . $id . '"');

        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            $data = $query->row_array();
            return $data;
        }
    }

    function save()
    {
        $id                     = $this->input->post('id');
                  
        $data['pembayaran']     = $this->input->post('pembayaran');        
        $data['angsuran_ke']    = $this->input->post('angsuran_ke');    

        if ($id == null) {
            
            $data['no_faktur']      = $this->input->post('no_faktur');            
            $data['pemesanan_id']   = $this->input->post('pemesanan_id');
            $data['customer_id']    = $this->input->post('customer_id');    
            $data['tgl_pembayaran'] = date('Y-m-d');                    
            $data['total']          = $this->input->post('total');                            

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

    function deleteteByPembayaranId($id)
    {
        $this->db->where('pemesanan_id', $id);
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

    function cek_info_pembayaran($customer_id) 
    {
        $this->db->select('tpm.total, sum(tpb.pembayaran) as total_pembayaran, count(tpb.angsuran_ke) as angsuran');
        $this->db->from('tpemesanan tpm');
        $this->db->join('tcustomer tc', 'tpm.customer_id = tc.id', 'inner');
        $this->db->join('tpembayaran tpb', 'tpm.customer_id = tpb.customer_id', 'left');
        $this->db->where('tc.id = "' . $customer_id . '"');
        $this->db->order_by('tpb.id', 'desc');

        $query = $this->db->get();
        $number_of_rows = $query->num_rows();

        if ($number_of_rows > 0)
        {
            $data               = $query->row_array();
            $data['sisa_bayar'] = $data['total'] - $data['total_pembayaran'];

            return $data;
        }
    }

    function getPembayaranCustomer($customer_id) 
    {   
        $this->db->select('tp.id, tp.tgl_pembayaran, tp.pembayaran, tp.angsuran_ke')
                  ->from('tpembayaran AS tp, tcustomer AS tc')
                  ->where('tp.customer_id = tc.id')
                  ->where('tp.customer_id = ' . $customer_id);

        
        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            $data       = $query->result_array();
            $row_counts = $query->num_rows();

            for ($i = 0; $i < $row_counts; $i++) {
                $number   = $i + 1;
                $no       = array('no' => $number);
                $detail   = array('detail' => "<a href='" . base_url() . "admin/pembayaran/view/" . $data[$i]['id'] . "'  id='view' class='btn btn-primary'>View</a> <a href='" . base_url() . "admin/pembayaran/delete/" . $data[$i]['id'] . "' id='delete' class='btn btn-danger'>Delete</a>");
                $data[$i] = $no + $data[$i]; 
                $data[$i] = $data[$i] + $detail; 
            }

            return $data;
        } else {
            return false;
        }
    }

    function getCustomerAngsuran($customer_id) 
    {   
        $this->db->select('tp.id, tp.tgl_pembayaran, tp.pembayaran, tp.angsuran_ke')
                  ->from('tpembayaran AS tp, tcustomer AS tc')
                  ->where('tp.customer_id = tc.id')
                  ->where('tp.customer_id = ' . $customer_id);

        
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

            return $data;
        } else {
            return false;
        }
    }
}

/* End of file  */
/* Location: ./application/models/ */