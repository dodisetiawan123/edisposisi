<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Direksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->load->helper('download');
		$this->load->model('direksi_model');
		date_default_timezone_set('Asia/Jakarta');
	}

	//DASHBOARD
	public function list_surat()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
		$id_users = $this->ion_auth->user()->row()->id;
		$this->data['dokumen'] = $this->direksi_model->get_dokumen($id_users);
		$this->data['users'] = $this->direksi_model->get_users();
		$this->data['model'] = $this->direksi_model;

		$this->load->view('direksi', $this->data);

		}
	}

	public function viewfile($doc_id)
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
		
			$fname = $this->uri->segment(3);
	        $tofile= realpath("filedoc/".$doc_id);
	        header('Content-Type: application/pdf');
	        readfile($tofile);

		}
	}

	public function disposisi()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if ($this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an Member to view this page.');
		}
		else
		{
			$data_dokumen = array(
				'id_users' => $this->input->post('id_users'),
				'keterangan' => $this->input->post('keterangan'),
				'id_dokumen' => $this->input->post('id_dokumen')
			);
			$data_status = array(
				'status' => 'OnProgress GM'
			);

			$id_dokumen = $this->input->post('id_dokumen');

			$this->direksi_model->insertdokumenuser($data_dokumen);
			$this->direksi_model->updatestatus($data_status,$id_dokumen);		

            $this->session->set_flashdata('done', 'Data berhasil tersimpan');
            redirect('direksi/list_surat');
		}
	}

	


		

}
