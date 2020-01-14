<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_form');
		header('Cache-Control: no-cache, must-revalidate, max-age=0');
		header('Cache-Control: post-chech = 0, pre-check = 0', false);
		header('Pragma: no-cache');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('footer');
	}
	public function startform()
	{

		$this->load->view('header');
		$this->load->view('form_datadiri');
		$this->load->view('footer');
	}
	// ========================== STEP 1: UPLOAD DATA DIRI
	public function save_datadiri()
	{
		$email = $this->input->post('email');
		$personal = $this->model_form->get_dtpersonal($email);
		$idpersonal = $this->model_form->get_idpersonal($email);

		if($personal == false){
		//SESSION
		$data_session = array('email' => $email);
		$this->session->set_userdata($data_session);

		// START STORE DATA
		$datapost = array(
			'nama'		=> $this->input->post('nama'),
			'posisi'	=> $this->input->post('posisi'),
			'no_telp'	=> $this->input->post('no_telp'),
			'email'		=> $this->input->post('email')
		);

		// START SAVING DATA
		$this->model_form->c_datapersonal($datapost);

		// GET idpersonal
		$idpersonal = $this->model_form->get_idpersonal($email);
		$dataid = array('idpersonal' => $idpersonal);

		// INSERT INTO ALL TABLE
		$this->model_form->insert_idpersonal($dataid);

		//INSERT FLAG
		$dataflag = array(
			'datapersonal'	=> '1'
		);
		$wh = array('idpersonal' => $idpersonal);
		$this->model_form->u_data('flag', $dataflag, $wh);

		$data['flag'] = $this->model_form->get_flag($idpersonal);

		$this->load->view('header',$data);
		$this->load->view('form_perusahaan',$data);
		$this->load->view('footer');
		}else{
			alert("email sudah terdaftar");
	        return false;
		}
	}

	public function upd_dataperusahaan()
	{
		$email = $this->session->userdata('email');
		$idpersonal = $this->model_form->get_idpersonal($email);

		$data = array(
			'nama_perusahaan' => $this->input->post('nama_perusahaan'),
			'email_perusahaan' => $this->input->post('email_perusahaan'),
			'notelp_perusahaan' => $this->input->post('notelp_perusahaan'),
			'alamat_perusahaan' => $this->input->post('alamat_perusahaan')
		);

		$where = array(
			'idpersonal' => $idpersonal
		);

		$this->model_form->u_data('dataperusahaan',$data,$where);

		//INSERT FLAG
		$dataflag = array(
			'dataperusahaan'	=> '1'
		);
		$wh = array('idpersonal' => $idpersonal);
		$this->model_form->u_data('flag', $dataflag, $wh);

		$data['personal'] = $this->model_form->get_datapersonal($email);
		$data['flag'] = $this->model_form->get_flag($idpersonal);
		$data['jurusan']	= $this->model_form->get_jurusan();

		$this->load->view('header', $data);
		$this->load->view('form_bekerja',$data);
		$this->load->view('footer');

	}

	public function upd_bekerja()
	{
		$email = $this->session->userdata('email');
		$idpersonal = $this->model_form->get_idpersonal($email);

		$data = array(
			'divisi_alumni' => $this->input->post('divisi_alumni'),
			'jabatan_alumni' => $this->input->post('jabatan_alumni'),
			'asal_alumni' => $this->input->post('asal_alumni')
		);

		$where = array(
			'idpersonal' => $idpersonal
		);

		$this->model_form->u_data('bekerja',$data,$where);

		//INSERT FLAG
		$dataflag = array(
			'bekerja'	=> '1'
		);
		$wh = array('idpersonal' => $idpersonal);
		$this->model_form->u_data('flag', $dataflag, $wh);

		$data['kerja']		= $this->model_form->get_bekerja($idpersonal);
		$data['personal'] 	= $this->model_form->get_datapersonal($email);
		$data['flag'] 		= $this->model_form->get_flag($idpersonal);
		$data['jurusan']	= $this->model_form->get_jurusan();

		$this->load->view('header', $data);
		$this->load->view('update_form/form_tabelbekerja', $data);
		$this->load->view('footer');
	}

	public function ins_bekerja()
	{
		$email = $this->session->userdata('email');
		$idpersonal = $this->model_form->get_idpersonal($email);

		$data = array(
			'divisi_alumni' => $this->input->post('divisi_alumni'),
			'jabatan_alumni' => $this->input->post('jabatan_alumni'),
			'asal_alumni' => $this->input->post('asal_alumni')
		);

		$this->model_form->c_data('bekerja',$data);

		$data['personal'] 	= $this->model_form->get_datapersonal($email);
		$data['flag'] 		= $this->model_form->get_flag($idpersonal);
		$data['jurusan']	= $this->model_form->get_jurusan();
		$data['kerja']		= $this->model_form->get_bekerja($idpersonal);

		$this->load->view('header', $data);
		$this->load->view('update_form/form_tabelbekerja', $data);
		$this->load->view('footer');
	}
}

/* End of file Form_controller.php */
/* Location: ./application/controllers/Form_controller.php */