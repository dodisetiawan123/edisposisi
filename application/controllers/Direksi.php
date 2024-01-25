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
		}else if ($this->ion_auth->user()->row()->change_pass == 0) {
			redirect('auth/edit_user/'.$this->ion_auth->user()->row()->id);
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
		$id_users = $this->ion_auth->user()->row()->id;
		$this->data['dokumen'] = $this->direksi_model->get_dokumen($id_users);
		$this->data['users'] = $this->direksi_model->get_users();
		$this->data['usersgm'] = $this->direksi_model->get_usersgm();
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

	public function requser()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			$id_dokumen = $this->input->post('id_dokumen');
			$data = $this->direksi_model->requser($id_dokumen);
			echo json_encode($data);
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
			$id_userslogin =  $this->ion_auth->user()->row()->id;
			if (is_null($id_users)) {
				$this->session->set_flashdata('error', 'Data gagal terkirim');
				 redirect('direksi/list_surat');
			}

			foreach ($id_users as $user) {
				$token = $this->token();
				$response = $this->sendwa($user,$id_dokumen,$token,$id_userslogin);
				$responsedata = json_decode($response, true);

			if ($responsedata['status'] == true) {
				$data_dokumen = array(
				'id_users' => $user,
				'id_users_requestor' => $id_userslogin,
				'id_dokumen' => $this->input->post('id_dokumen'),
				'keterangan' => $this->input->post('keterangan'),
				'status' => 'OnProgress',
				'gmtoken' => $token,
				'responswa' => $response
			);


			$this->direksi_model->insertdokumenuser($data_dokumen);

			}else{

			$this->session->set_flashdata('error', 'Data gagal terkirim');
            redirect('direksi/list_surat');
			}

			}

			$data_status = array(
				'status' => 'Continued'
			);
			$this->direksi_model->updatestatusdokumenuser($data_status,$id_dokumen,$id_userslogin);		

            $this->session->set_flashdata('done', 'Data berhasil tersimpan');
            redirect('direksi/list_surat');
			
			
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

	public function acceptdokumen()
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
			$data_status = array(
				'status' => 'OnAction'
			);

			$id_dokumen = $this->input->post('id_dokumen');
			$id_users = $this->input->post('id_users');
			$this->direksi_model->updatestatusdokumenuser($data_status,$id_dokumen,$id_users);		

            $this->session->set_flashdata('done', 'Data berhasil tersimpan');
            redirect('direksi/list_surat');
		}
	}

	public function finishdokumen()
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
			$data_status = array(
				'status' => 'Finished'
			);

			$id_dokumen = $this->input->post('id_dokumen');
			$id_users = $this->input->post('id_users');
			$this->direksi_model->updatestatusdokumenuser($data_status,$id_dokumen,$id_users);		

            $this->session->set_flashdata('done', 'Data berhasil tersimpan');
            redirect('direksi/list_surat');
		}
	}
	

	public function sendwa($id_users,$id_dokumen,$token,$id_userslogin)
			{
				if (!$this->ion_auth->logged_in())
				{
					// redirect them to the login page
					redirect('auth/login', 'refresh');
				}
				else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
				{
					$data_users = $this->direksi_model->get_datausers($id_users);
					$data_dokumen = $this->direksi_model->get_datadokumen($id_dokumen,$id_userslogin);
					$url = site_url('dokumen/view/'.$token);
					

					$message = "*Kepada Yth.*
".$data_users['first_name'].' '.$data_users['last_name']." 

Dokumen disposisi baru saja ditambahkan dengan informasi berikut ini :
*Pengirim* : ".$data_dokumen['nama_pengirim']." 
*Tanggal Diterima* : ".$data_dokumen['tanggal']." 
*Perihal* : ".$data_dokumen['perihal']."
*Requestor* : ".$data_dokumen['first_name']." ".$data_dokumen['last_name']."
*Catatan Requestor* : ".$this->input->post('keterangan')."

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
*Tanggal Diterima* : ".$data_dokumen['tanggal']." 
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
