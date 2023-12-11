<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->load->model('dokumen_model');
		date_default_timezone_set('Asia/Jakarta');
	}

	//Data Karyawan
	public function view($token)
	{
		
			$this->data['dokumen'] = $this->dokumen_model->get_dokumen($token);
			$this->load->view('detail', $this->data);
		}
	}

	

