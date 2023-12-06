<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->load->model('admin_model');
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
			$this->data['dokumen'] = $this->admin_model->get_dokumen();
			$this->data['users'] = $this->admin_model->get_users();
			$this->load->view('sekper', $this->data);
		}
	}

		//Data Karyawan
	public function tambahdokumen()
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
			$namefile = $this->uploaddokumen();
			$data_dokumen = array(
				'nama_pengirim' => $this->input->post('nama_pengirim'),
				'no_surat' => $this->input->post('no_surat'),
				'no_agenda' => $this->input->post('no_agenda'),
				'tanggal' => $this->input->post('tanggal'),
				'perihal' => $this->input->post('perihal'),
				'file_dokumen' => $namefile,
				'status' => 'On Review',
				'timestamp' => date("Y-m-d"),
			);

			$this->admin_model->insertdokumen($data_dokumen);	

            $this->session->set_flashdata('done', 'Data berhasil tersimpan');
            redirect('admin/list_surat');
		}
	}


	public function uploaddokumen()
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
		else{
			
			$config['upload_path']          = './filedoc/';
            $config['allowed_types']        = 'pdf';
            $config['encrypt_name']         = TRUE;
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    var_dump($error);
                    exit;
                    $this->session->set_flashdata('false', 'Data gagal tersimpan');
                    redirect('admin/list_surat/'.$npk);
            }
            else
            {
                    $data = $this->upload->data();
                    return $data['file_name'];
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