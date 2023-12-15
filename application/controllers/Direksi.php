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
			$id_users = $this->input->post('id_users');
			$id_dokumen = $this->input->post('id_dokumen');


			$response = $this->sendwa($id_users,$id_dokumen);
			$responsedata = json_decode($response, true);

			if ($responsedata['status'] == true) {
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

			}else if($response == "{}") {
			$this->disposisi();

			}else{
			$this->session->set_flashdata('error', 'Data gagal terkirim');
            redirect('direksi/list_surat');
			}
			
		}
	}

		public function reject()
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
			$id_users = '1';
			$id_dokumen = $this->input->post('id_dokumen');


			$response = $this->sendwasekper($id_users,$id_dokumen);
			$responsedata = json_decode($response, true);
			if ($responsedata['status'] == true) {
				
			$data_status = array(
				'status' => 'Reject BOD'
			);

			$id_dokumen = $this->input->post('id_dokumen');
			$this->direksi_model->updatestatus($data_status,$id_dokumen);		

            $this->session->set_flashdata('done', 'Data berhasil tersimpan');
            redirect('direksi/list_surat');

			}else if($response == "{}") {
			$this->reject();

			}else{
			$this->session->set_flashdata('error', 'Data gagal terkirim');
            redirect('direksi/list_surat');
			}
			
		}
	}
	

	public function sendwa($id_users,$id_dokumen)
			{
				if (!$this->ion_auth->logged_in())
				{
					// redirect them to the login page
					redirect('auth/login', 'refresh');
				}
				else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
				{
					$data_users = $this->direksi_model->get_datausers($id_users);
					$data_dokumen = $this->direksi_model->get_datadokumen($id_dokumen);
					$url = site_url('dokumen/gmview/');
					

					$message = "*Kepada Yth.*
".$data_users['first_name'].' '.$data_users['last_name']." 

Dokumen disposisi baru saja ditambahkan dengan informasi berikut ini :

*Pengirim* : ".$data_dokumen['nama_pengirim']." 
*No Agenda* : ".$data_dokumen['no_agenda']." 
*Tanggal* : ".$data_dokumen['tanggal']." 
*Perihal* : ".$data_dokumen['perihal']."

Informasi requestor
*Requestor* : ".$data_dokumen['first_name'].' '.$data_dokumen['last_name']."
*Catatan* : ".$this->input->post('keterangan')."

Silahkan klik link di bawah ini untuk detail informasi dan tindakan lebih lanjut :

".$url.$data_dokumen['token']."

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


			public function sendwasekper($id_users,$id_dokumen)
			{
				if (!$this->ion_auth->logged_in())
				{
					// redirect them to the login page
					redirect('auth/login', 'refresh');
				}
				else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
				{
					$data_users = $this->direksi_model->get_datausers($id_users);
					$data_dokumen = $this->direksi_model->get_datadokumen($id_dokumen);
					

					$message = "*Kepada Yth.*
".$data_users['first_name'].' '.$data_users['last_name']." 

Dokumen disposisi baru saja direject dengan informasi berikut ini :

*Pengirim* : ".$data_dokumen['nama_pengirim']." 
*No Agenda* : ".$data_dokumen['no_agenda']." 
*Tanggal* : ".$data_dokumen['tanggal']." 
*Perihal* : ".$data_dokumen['perihal']."

Informasi requestor
*Requestor* : ".$data_dokumen['first_name'].' '.$data_dokumen['last_name']."
*Catatan* : ".$this->input->post('keterangan')."

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
	


		

}
