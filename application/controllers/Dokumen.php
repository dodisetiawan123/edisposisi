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
			if ($this->dokumen_model->get_dokumen($token)) {
			$this->data['dokumen'] = $this->dokumen_model->get_dokumen($token);
			$this->data['users'] = $this->dokumen_model->get_users();
			$this->data['usersgm'] = $this->dokumen_model->get_usersgm();
			$this->data['model'] = $this->dokumen_model;
			$this->load->view('detail', $this->data);
			} else {
				show_404($page = '', $log_error = TRUE);
			}
			
			
		}


	public function gmview($token)
	{
		
			$this->data['dokumen'] = $this->dokumen_model->get_dokumen($token);
			$this->data['users'] = $this->dokumen_model->get_users();
			$this->data['model'] = $this->dokumen_model;
			$this->load->view('gmdetail', $this->data);
		}

	public function requser()
	{
		
			$id_dokumen = $this->input->post('id_dokumen');
			$data = $this->dokumen_model->requser($id_dokumen);
			echo json_encode($data);
	}


	public function disposisi()
	{
			$id_users = $this->input->post('id_users');
			$id_dokumen = $this->input->post('id_dokumen');
			$direksi_token = $this->input->post('token');
			$id_userslogin =  $this->input->post('id_users_login');

			if (is_null($id_users)) {
				$this->session->set_flashdata('error', 'Data gagal terkirim');
				redirect('dokumen/view/'.$direksi_token);
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


			$this->dokumen_model->insertdokumenuser($data_dokumen);

			}else{

			$this->session->set_flashdata('error', 'Data gagal terkirim');
            redirect('dokumen/view/'.$direksi_token);
			}

			}

			$data_status = array(
				'status' => 'Continued'
			);
			
			$this->dokumen_model->updatestatusdokumenuser($data_status,$id_dokumen,$id_userslogin);		

            $this->session->set_flashdata('done', 'Data berhasil tersimpan');
            redirect('dokumen/view/'.$direksi_token);
			
		
	}

		public function acceptdokumen()
	{
		
			

			$data_status = array(
				'status' => 'OnAction',
			);

			$id_dokumen = $this->input->post('id_dokumen');
			$id_users = $this->input->post('id_users');
			$this->dokumen_model->updatestatusdokumenuser($data_status,$id_dokumen,$id_users);	

			$token = $this->input->post('token');		

            $this->session->set_flashdata('done', 'Data berhasil tersimpan');
            redirect('dokumen/view/'.$token);
	}

		public function finishdokumen()
	{
		
			

			$data_status = array(
				'status' => 'Finished',
			);

			$id_dokumen = $this->input->post('id_dokumen');
			$id_users = $this->input->post('id_users');
			$this->dokumen_model->updatestatusdokumenuser($data_status,$id_dokumen,$id_users);	

			$token = $this->input->post('token');		

            $this->session->set_flashdata('done', 'Data berhasil tersimpan');
            redirect('dokumen/view/'.$token);
	}

	public function sendwa($id_users,$id_dokumen,$token,$id_userslogin)
			{
				
					$data_users = $this->dokumen_model->get_datausers($id_users);
					$data_dokumen = $this->dokumen_model->get_datadokumen($id_dokumen,$id_userslogin);
					$url = site_url('dokumen/view/'.$token);
					

					$message = "*Kepada Yth.*
".$data_users['first_name'].' '.$data_users['last_name']." 

Dokumen disposisi baru saja ditambahkan dengan informasi berikut ini :
*Pengirim* : ".$data_dokumen['nama_pengirim']." 
*Tanggal Diterima* : ".$data_dokumen['tanggal']." 
*Perihal* : ".$data_dokumen['perihal']."
*Requestor* : ".$data_dokumen['first_name']." ".$data_dokumen['last_name']."
*Catatan requestor* : ".$this->input->post('keterangan')."

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

				function token(){
				  $seed = str_split('abcdefghijklmnopqrstuvwxyz'
                     .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                     .'0123456789'); // and any other characters
				    shuffle($seed); // probably optional since array_is randomized; this may be redundant
				    $rand = '';
				    foreach (array_rand($seed, 10) as $k) $rand .= $seed[$k];
				 
				    return $rand;
				}

	
     public function get_statusdokumen($id_dokumen)
    {
        $this->db->select('users.first_name,users.last_name');
        $this->db->from('users');
        $this->db->join('dokumen_user', 'dokumen_user.id_users = users.id', 'left' );
        $this->db->join('users_groups', 'users_groups.user_id = users.id', 'left' );
        $this->db->where('id_dokumen', $id_dokumen);
        $this->db->where('group_id', 2);
        $query=$this->db->get();
        return $query->result();
    }

    public function get_statusdokumengm($id_dokumen)
    {
        $this->db->select('users.first_name,users.last_name');
        $this->db->from('users');
        $this->db->join('dokumen_user', 'dokumen_user.id_users = users.id', 'left' );
        $this->db->join('users_groups', 'users_groups.user_id = users.id', 'left' );
        $this->db->where('id_dokumen', $id_dokumen);
        $this->db->where('group_id', 3);
        $query=$this->db->get();
        return $query->result();
    }


	}

	

