<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct()
    {
        
        $this->load->database();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function get_dokumen()
    {
        $this->db->select('dokumen.id_dokumen,dokumen.nama_pengirim,dokumen.no_surat,dokumen.no_agenda,dokumen.tanggal,dokumen.perihal,dokumen.file_dokumen,status');
        $this->db->from('dokumen');
        $query=$this->db->get();
        return $query->result();
    }


  
    public function insertdokumen($data)
    {
         $this->db->insert('dokumen', $data);
            
    }


    public function updatemkrenumerasi($data_mk_renumerasi,$npk)
    {
         $this->db->where('npk', $npk);
         $this->db->update('mk_renumerasi', $data_mk_renumerasi);
            
    }


    public function listdata()
    {
        $this->db->select('npk,nama,no_absen');
        $this->db->from('md_karyawan');
        $query=$this->db->get();
        return $query->result_array();
    }

    
     
}
