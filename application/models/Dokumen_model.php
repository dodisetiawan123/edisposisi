<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen_model extends CI_Model {

    public function __construct()
    {
        
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function get_dokumen($token)
    {
        $this->db->select('dokumen.id_dokumen,dokumen.nama_pengirim,dokumen.no_surat,dokumen.no_agenda,dokumen.tanggal,dokumen.perihal,dokumen.file_dokumen,status,dokumen_user.keterangan');
        $this->db->from('dokumen');
        $this->db->join('dokumen_user', 'dokumen_user.id_dokumen = dokumen.id_dokumen', 'left' );
        $this->db->where('token', $token);
        $this->db->order_by('id_dokumen', 'DESC');

        $query=$this->db->get();
        return $query->row();
    }


    
     
}
