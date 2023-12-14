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
			$this->data['users'] = $this->dokumen_model->get_users();
			$this->load->view('detail', $this->data);
		}


	public function gmview($token)
	{
		
			$this->data['dokumen'] = $this->dokumen_model->get_dokumen($token);
			$this->data['users'] = $this->dokumen_model->get_users();
			$this->load->view('gmdetail', $this->data);
		}


	public function disposisi()
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
			$token = $this->input->post('token');

			$id_dokumen = $this->input->post('id_dokumen');

			$this->dokumen_model->insertdokumenuser($data_dokumen);
			$this->dokumen_model->updatestatus($data_status,$id_dokumen);		

            $this->session->set_flashdata('done', 'Data berhasil tersimpan');
            redirect('dokumen/view/'.$token);

			}else if($response == "{}") {
			$this->disposisi();

			}else{
			$this->session->set_flashdata('error', 'Data gagal terkirim');
            redirect('dokumen/view/'.$token);
			}
			
		
	}

		public function acceptdokumen()
	{
		
			

			$data_status = array(
				'status' => 'OnAction GM'
			);

			$id_dokumen = $this->input->post('id_dokumen');
			$this->dokumen_model->updatestatus($data_status,$id_dokumen);

			$token = $this->input->post('token');		

            $this->session->set_flashdata('done', 'Data berhasil tersimpan');
            redirect('dokumen/gmview/'.$token);
	}

	public function sendwa($id_users,$id_dokumen)
			{
				
					$data_users = $this->dokumen_model->get_datausers($id_users);
					$data_dokumen = $this->dokumen_model->get_datadokumen($id_dokumen);
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
					  CURLOPT_URL => 'http://wa.simulasi.barata.com/send-message',
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

	

