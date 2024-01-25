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
		else if ($this->ion_auth->user()->row()->change_pass == 0) {
			redirect('auth/edit_user/'.$this->ion_auth->user()->row()->id);
		}
		else
		{
			$this->data['dokumen'] = $this->admin_model->get_dokumen();
			$this->data['users'] = $this->admin_model->get_users();
			$this->data['usersgm'] = $this->admin_model->get_usersgm();
			$this->data['model'] = $this->admin_model;

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
				'token' => $this->token(),
				'status' => 'OnProcess'
			);

			$this->admin_model->insertdokumen($data_dokumen);	

            $this->session->set_flashdata('add', 'Data berhasil tersimpan');
            redirect('admin/list_surat');
		}
	}

	public function delete($id_dokumen)
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
			

			$this->admin_model->deletedokumen($id_dokumen);	

            $this->session->set_flashdata('done', 'Data berhasil tersimpan');
            redirect('admin/list_surat');
		}
	}

	public function disposisi()
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
			$id_users = $this->input->post('id_users');
			$id_dokumen = $this->input->post('id_dokumen');

			foreach ($id_users as $user) {
				$token = $this->token();
				$response = $this->sendwa($user,$id_dokumen,$token);
				$responsedata = json_decode($response, true);

				if ($responsedata['status'] == true) {
				
				$data_dokumen = array(
					'id_users' => $user,
					'id_dokumen' => $this->input->post('id_dokumen'),
					'status' => 'OnProgress',
					'gmtoken' => $token,
					'responswa' => $response
				);

				$this->admin_model->insertdokumenuser($data_dokumen);

				}else{
				
				$this->session->set_flashdata('error', 'Data gagal terkirim');
            	redirect('admin/list_surat');
				
				}

			}
			$data_status = array(
				'status' => 'OnProgress'
			);
			$this->admin_model->updatestatus($data_status,$id_dokumen);		
			$this->session->set_flashdata('done', 'Data berhasil terkirim');
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

			public function sendwa($id_users,$id_dokumen,$token)
			{
				if (!$this->ion_auth->logged_in())
				{
					// redirect them to the login page
					redirect('auth/login', 'refresh');
				}
				else if ($this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
				{
					$data_users = $this->admin_model->get_datausers($id_users);
					$data_dokumen = $this->admin_model->get_datadokumen($id_dokumen);
					$url = site_url('dokumen/view/'.$token);
					$message = "*Kepada Yth.*
".$data_users['first_name'].' '.$data_users['last_name']." 

Dokumen disposisi ditambahkan dengan informasi berikut ini :
*Pengirim* : ".$data_dokumen['nama_pengirim']." 
*Tanggal Diterima* : ".$data_dokumen['tanggal']." 
*Perihal* : ".$data_dokumen['perihal']."

Silahkan klik link di bawah ini untuk detail informasi dan tindakan lebih lanjut :
".$url."

Terimakasih";
				
					$curl = curl_init();

					curl_setopt_array($curl, array(
					  CURLOPT_URL => 'http://waweb.simulasi.barata.com/send-message',
					  CURLOPT_RETURNTRANSFER => true,
					  CURLOPT_ENCODING => '',
					  CURLOPT_MAXREDIRS => 10,
					  CURLOPT_TIMEOUT => 0,
					  CURLOPT_FOLLOWLOCATION => true,
					  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					  CURLOPT_CUSTOMREQUEST => 'POST',
					  CURLOPT_POSTFIELDS => array('message' => $message,'number' => $data_users['phone'],'file_dikirim'=> ''),
					));

					$response = curl_exec($curl);
					curl_close($curl);
					return $response;

				}
			}

			function token(){
				  $seed = str_split('abcdefghijklmnopqrstuvwxyz'
                     .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                     .'0123456789'); // and any other characters
				    shuffle($seed); // probably optional since array_is randomized; this may be redundant
				    $rand = '';
				    foreach (array_rand($seed, 10) as $k) $rand .= $seed[$k];
				 
				    return $rand;
				}



		}

