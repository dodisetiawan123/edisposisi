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
        $this->db->select('dokumen_user.gmtoken,dokumen.id_dokumen,dokumen.nama_pengirim,dokumen.no_surat,dokumen.no_agenda,dokumen.tanggal,dokumen.perihal,dokumen.file_dokumen,dokumen_user.status,dokumen_user.keterangan,dokumen_user.id_users,users_groups.group_id');
        $this->db->from('dokumen');
        $this->db->join('dokumen_user', 'dokumen_user.id_dokumen = dokumen.id_dokumen', 'left' );
        $this->db->join('users_groups', 'dokumen_user.id_users = users_groups.user_id', 'left' );
        $this->db->where('gmtoken', $token);
        $this->db->order_by('id_dokumen', 'DESC');

        $query=$this->db->get();
        return $query->row();
    }

        public function get_users()
    {
        $this->db->select('users.id,users.first_name,users.last_name,users.email');
        $this->db->from('users');
        $this->db->join('users_groups', 'users.id = users_groups.user_id', 'left' );
        $this->db->where('group_id', 2);

        $query=$this->db->get();
        return $query->result();
    }

     public function get_usersgm()
    {
        $this->db->select('users.id,users.first_name,users.last_name,users.email');
        $this->db->from('users');
        $this->db->join('users_groups', 'users.id = users_groups.user_id', 'left' );
        $this->db->where('group_id', 3);

        $query=$this->db->get();
        return $query->result();
    }


    
     public function get_statusdokumen($id_dokumen)
    {
        $this->db->select('users.first_name,users.last_name,dokumen_user.status');
        $this->db->from('users');
        $this->db->join('dokumen_user', 'dokumen_user.id_users = users.id', 'left' );
        $this->db->join('users_groups', 'users_groups.user_id = users.id', 'left' );
        $this->db->where('id_dokumen', $id_dokumen);
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


    public function insertdokumenuser($data)
    {
         $this->db->insert('dokumen_user', $data);
            
    }


    public function updatestatus($data,$id_dokumen)
    {
         $this->db->where('id_dokumen', $id_dokumen);
         $this->db->update('dokumen', $data);
            
    }

    


    public function get_datausers($id_users)
    {
        $this->db->select('users.first_name,users.last_name,users.phone');
        $this->db->from('users');
        $this->db->where('id', $id_users);
        $query=$this->db->get();
        return $query->row_array();
    }

    public function get_datadokumen($id_dokumen,$id_userslogin)
    {
        $this->db->select('dokumen.nama_pengirim,dokumen.no_agenda,dokumen.tanggal,dokumen.perihal,dokumen.token,users.first_name,users.last_name');
        $this->db->from('dokumen');
        $this->db->join('dokumen_user', 'dokumen_user.id_dokumen = dokumen.id_dokumen', 'left' );
        $this->db->join('users', 'dokumen_user.id_users = users.id', 'left' );
        $this->db->join('users_groups', 'users_groups.user_id = users.id', 'left' );
        $this->db->where('dokumen.id_dokumen', $id_dokumen);
        $this->db->where('users.id', $id_userslogin);
        //$this->db->where('group_id', 2);
        $query=$this->db->get();
        return $query->row_array();
    }

      public function requser($id_dokumen)
    {
        $this->db->select('users.id');
        $this->db->from('users');
        $this->db->join('dokumen_user', 'dokumen_user.id_users = users.id', 'left' );
        $this->db->where('id_dokumen', $id_dokumen);
        $query=$this->db->get();
        return $query->result();
    }

     public function updatestatusdokumenuser($data,$id_dokumen,$id_users)
    {
         $this->db->where('id_dokumen', $id_dokumen);
         $this->db->where('id_users', $id_users);
         $this->db->update('dokumen_user', $data);
            
    }

    


    
     
}
