<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		date_default_timezone_set('Asia/Jakarta');
	}

	//Data Karyawan
	public function list_surat()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
			
			$this->load->view('sekper');
		}
	}


	public function uploadfoto($npk)
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
		if (empty($npk)) {
			echo "Hayo mau ngapainnn";
			exit;
		}else{
			
			$config['upload_path']          = './image/';
            $config['allowed_types']        = 'jpg|jpeg';
            $config['encrypt_name']         = TRUE;
            $config['max_size']             = 1000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('false', 'Data gagal tersimpan');
                    redirect('admin/detail_karyawan/'.$npk);
            }
            else
            {
                    $data = $this->upload->data();
                    $additional_data = array(
                        'file_foto'  => $data['file_name']
                    );
                	$this->data_karyawan_model->insert_filename($additional_data,$npk);
                	$this->session->set_flashdata('done', 'Data berhasil tersimpan');
                    redirect('admin/detail_karyawan/'.$npk);
            }
		}
		}
		
	}


	public function viewfile($doc_id)
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if ($this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
		
			$fname = $this->uri->segment(3);
	        $tofile= realpath("filedoc/".$doc_id);
	        header('Content-Type: application/pdf');
	        readfile($tofile);

		}
	}

}
