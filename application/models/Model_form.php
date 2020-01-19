<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_form extends CI_Model {

	public function __construct() {
        $this->load->database();
    }

    public function c_datapersonal($data)
    {
    	$this->db->insert('datapersonal', $data);
    }

    public function get_idpersonal($email)
    {
    	$this->db->select('idpersonal');
    	$this->db->from('datapersonal');
    	$this->db->where('email', $email);

    	$query = $this->db->get();

    	if ($query->num_rows() > 0) {
    		return $query->row()->idpersonal;
    	}
    	
    }
     public function get_dtpersonal($email)
    {
        $this->db->select('*');
        $this->db->where('email', $email);
        $this->db->from('datapersonal');

        $pribadi = $this->db->get(); 

        if ($pribadi->num_rows() == 1) {
           return true;
        } else {
            return false;
        } 
    }

    public function get_datapersonal($email)
    {
        $this->db->select('*');
        $this->db->from('datapersonal');
        $this->db->where('email', $email);

        $query = $this->db->get();

        return $query->result_array();
    }

	// =================== INSERT idpersonal INTO ALL TABLE
    public function insert_idpersonal($dataid)
    {
    	$this->db->insert('flag', $dataid);
        $this->db->insert('bekerja', $dataid);
        $this->db->insert('dataperusahaan', $dataid);
        $this->db->insert('kerjasama_penilaian', $dataid);
    	$this->db->insert('evaluasi_magang', $dataid);
        $this->db->insert('evaluasi_lulusan', $dataid);
    }

    public function get_flag($id)
    {
        $this->db->select('*');
        $this->db->from('flag');
        $this->db->where('idpersonal', $id);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function check_id($col ,$id)
    {
        $this->db->select($col);
        $this->db->where('idpersonal', $id);
        $this->db->from('flag');

        $cek = $this->db->get()->result_array();

        foreach ($cek as $c) {
            if ($c[$col] == '1') {
                return true;
            } else {
                return false;
            }
        }
    }

    public function u_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function c_data($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function get_jurusan()
    {
        $jurusan = $this->db->get('jurusan');
        return $jurusan->result_array();
    }

    public function get_bekerja($id)
    {
        $this->db->select('*');
        $this->db->from('bekerja');
        $this->db->join('jurusan', 'bekerja.asal_alumni = jurusan.idjurusan');
        $this->db->where('idpersonal', $id);

        $query = $this->db->get();

        return $query->result_array();
    }
    // ===================================GET DATA WIRAUSAHA/BEKERJA BY IDPEKERJAAN & IDWIRAUSAHA
    public function get_dtbekerja($id)
    {
        $this->db->select('*');
        $this->db->from('bekerja');
        $this->db->join('jurusan', 'bekerja.asal_alumni = jurusan.idjurusan');
        $this->db->where('idbekerja', $id);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_kerjasama($id)
    {
        $this->db->select('*');
        $this->db->from('kerjasama_penilaian');
        $this->db->where('idpersonal', $id);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_magang($id)
    {
        $this->db->select('*');
        $this->db->from('evaluasi_magang');
        $this->db->where('idpersonal', $id);

        $query = $this->db->get();

        return $query->result_array();
    }
}

/* End of file Model_form.php */
/* Location: ./application/models/Model_form.php */