<?php
defined('BASEPATH') OR die('No direct script access allowed');

class User_model extends CI_Model
{
    public function find_by($field, $value, $return = FALSE)
    {
        $this->db
            ->where('username', $value);

        $data = $this->db->get('tbl_users_presensi');
        
        if ($return) {
            return $data->row();
        }
        return $data;
    }

    public function tambah_useragent($table, $data, $username){
        $this->db->where('username', $username);
        $this->db->update($table,$data);

    }

    public function update_data($id, $data)
    {
        $this->db->where('id_user', $id);
        $result = $this->db->update('tbl_users_presensi', $data);
        return $result;
    }
}

