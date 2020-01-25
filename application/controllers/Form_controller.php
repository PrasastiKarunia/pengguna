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

		if($personal == false) {
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
			'idpersonal'		=> $idpersonal,
			'divisi_alumni' 	=> $this->input->post('divisi_alumni'),
			'jabatan_alumni' 	=> $this->input->post('jabatan_alumni'),
			'asal_alumni' 		=> $this->input->post('asal_alumni')
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

	// ========================== STEP 3: UPDATE & INSERT VIEW BEKERJA
	public function viewWork($id)
	{
		$email = $this->session->userdata('email');
		$idpersonal = $this->model_form->get_idpersonal($email);

		$data['kerja']		= $this->model_form->get_dtbekerja($id);
		$data['personal'] 	= $this->model_form->get_datapersonal($email);
		$data['flag'] 		= $this->model_form->get_flag($idpersonal);
		$data['jurusan']	= $this->model_form->get_jurusan();

		$this->load->view('header', $data);
		$this->load->view('update_form/form_upbekerja', $data);
		$this->load->view('footer');
	}

	//===================================== UPDATE SALAH SATU PEKERJAAN
	public function updateWork($id)
	{
		//AMBIL SESSION
		$email = $this->session->userdata('email');
		$idpersonal = $this->model_form->get_idpersonal($email);

		$data = array(
			'idpersonal'		=> $idpersonal,
			'divisi_alumni' 	=> $this->input->post('divisi_alumni'),
			'jabatan_alumni' 	=> $this->input->post('jabatan_alumni'),
			'asal_alumni' 		=> $this->input->post('asal_alumni')
		);

		$where = array(
			'idbekerja' => $id
		);

		$this->model_form->u_data('bekerja', $data, $where);

		$data['personal'] 	= $this->model_form->get_datapersonal($email);
		$data['flag'] 		= $this->model_form->get_flag($idpersonal);
		$data['jurusan']	= $this->model_form->get_jurusan();
		$data['kerja']		= $this->model_form->get_bekerja($idpersonal);
		
		$this->load->view('header', $data);
		$this->load->view('update_form/form_tabelbekerja', $data);
		$this->load->view('footer');
	}

	public function viewKerjasama()
	{
		//AMBIL SESSION
		$email = $this->session->userdata('email');
		$idpersonal = $this->model_form->get_idpersonal($email);

		$data['personal'] 	= $this->model_form->get_datapersonal($email);
		$data['flag'] 		= $this->model_form->get_flag($idpersonal);
		$data['kerjasama']	= $this->model_form->get_kerjasama($idpersonal);
		
		$this->load->view('header', $data);
		$this->load->view('form_kerjasama', $data);
		$this->load->view('footer');

	}

	public function upd_kerjasama()
	{
		$email = $this->session->userdata('email');
		$idpersonal = $this->model_form->get_idpersonal($email);

		$data = array(
			'4a'	=> implode(',',$this->input->post('4a')),
			'4aket'	=> $this->input->post('4aket'),
			'51a'	=> $this->input->post('51a'),
			'52a'	=> $this->input->post('52a'),
			'53a' 	=> $this->input->post('53a')
		);

		$where = array(
			'idpersonal' => $idpersonal
		);

		$this->model_form->u_data('kerjasama_penilaian',$data,$where);

		//INSERT FLAG
		$dataflag = array(
			'kerjasama_penilaian'	=> '1'
		);
		$wh = array('idpersonal' => $idpersonal);
		$this->model_form->u_data('flag', $dataflag, $wh);

		$data['magang']	= $this->model_form->get_magang($idpersonal);
		$data['personal'] 	= $this->model_form->get_datapersonal($email);
		$data['flag'] 		= $this->model_form->get_flag($idpersonal);

		$this->load->view('header', $data);
		$this->load->view('form_magang', $data);
		$this->load->view('footer');
	}

	public function upd_magang()
	{
		$email = $this->session->userdata('email');
		$idpersonal = $this->model_form->get_idpersonal($email);

		$data = array(
			'61a'	=> $this->input->post('61a'),
			'62a'	=> $this->input->post('62a'),
			'63a'	=> $this->input->post('63a'),
			'63aket'=> $this->input->post('63aket'),
			'64a'	=> $this->input->post('64a'),
			'65a'	=> implode(',',$this->input->post('65a')),
			'65aket'=> $this->input->post('65aket'),
			'66a'	=> implode(',',$this->input->post('66a')),
			'66aket'=> $this->input->post('66aket'),
			'67a'	=> implode(',',$this->input->post('67a')),
			'67aket'=> $this->input->post('67aket'),
			'68a'	=> $this->input->post('68a')
		);

		$where = array(
			'idpersonal' => $idpersonal
		);

		$this->model_form->u_data('evaluasi_magang',$data,$where);

		//INSERT FLAG
		$dataflag = array(
			'evaluasi_magang'	=> '1'
		);
		$wh = array('idpersonal' => $idpersonal);
		$this->model_form->u_data('flag', $dataflag, $wh);

		//$data['magang']	= $this->model_form->get_magang($idpersonal);
		$data['personal'] 	= $this->model_form->get_datapersonal($email);
		$data['flag'] 		= $this->model_form->get_flag($idpersonal);

		$this->load->view('header', $data);
		$this->load->view('form_lulusan', $data);
		$this->load->view('footer');
	}
	public function upd_lulusan()
	{
		$email = $this->session->userdata('email');
		$idpersonal = $this->model_form->get_idpersonal($email);

		$data = array(
			'a1'		=> $this->input->post('a1'),
			'b1'		=> $this->input->post('b1'),
			'a2'		=> $this->input->post('a2'),
			'b2'		=> $this->input->post('b2'),
			'a3'		=> $this->input->post('a3'),
			'b3'		=> $this->input->post('b3'),
			'a4'		=> $this->input->post('a4'),
			'b4'		=> $this->input->post('b4'),
			'a5'		=> $this->input->post('a5'),
			'b5'		=> $this->input->post('b5'),
			'a6'		=> $this->input->post('a6'),
			'b6'		=> $this->input->post('b6'),
			'a7'		=> $this->input->post('a7'),
			'b7'		=> $this->input->post('b7'),
			'a8'		=> $this->input->post('a8'),
			'b8'		=> $this->input->post('b8'),
			'a9'		=> $this->input->post('a9'),
			'b9'		=> $this->input->post('b9'),
			'a10'		=> $this->input->post('a10'),
			'b10'		=> $this->input->post('b10'),
			'a11'		=> $this->input->post('a11'),
			'b11'		=> $this->input->post('b11'),
			'a12'		=> $this->input->post('a12'),
			'b12'		=> $this->input->post('b12'),
			'a13'		=> $this->input->post('a13'),
			'b13'		=> $this->input->post('b13'),
			'a14'		=> $this->input->post('a14'),
			'b14'		=> $this->input->post('b14'),
			'a15'		=> $this->input->post('a15'),
			'b15'		=> $this->input->post('b15'),
			'a16'		=> $this->input->post('a16'),
			'b16'		=> $this->input->post('b16'),
			'a17'		=> $this->input->post('a17'),
			'b17'		=> $this->input->post('b17'),
			'a18'		=> $this->input->post('a18'),
			'b18'		=> $this->input->post('b18'),
			'a19'		=> $this->input->post('a19'),
			'b19'		=> $this->input->post('b19'),
			'a20'		=> $this->input->post('a20'),
			'b20'		=> $this->input->post('b20'),
			'a21'		=> $this->input->post('a21'),
			'b21'		=> $this->input->post('b21')
		);

		$where = array(
			'idpersonal' => $idpersonal
		);

		$this->model_form->u_data('evaluasi_lulusan', $data, $where);

		//INSERT FLAG
		$dataflag = array(
			'evaluasi_lulusan'	=> '1'
		);
		$wh = array('idpersonal' => $idpersonal);
		$this->model_form->u_data('flag', $dataflag, $wh);


		$data['personal'] 	= $this->model_form->get_datapersonal($email);
		$data['flag'] 		= $this->model_form->get_flag($idpersonal);

		$this->load->view('header', $data);
		$this->load->view('form_setuju', $data);
		$this->load->view('footer');
	}
}

/* End of file Form_controller.php */
/* Location: ./application/controllers/Form_controller.php */