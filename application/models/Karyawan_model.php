<?php
defined('BASEPATH') OR die('No direct script access allowed!');

class Karyawan_model extends CI_Model
{
    public function get_all()
    {
        $this->db->where('level', 'Karyawan');
        $result = $this->db->get('tbl_users_presensi');
        return $result->result();
    }

    public function find($id)
    {
        $this->db->where('id_user', $id);
        $result = $this->db->get('tbl_users_presensi');
        return $result->row();
    }

    public function insert_data($data)
    {
        $result = $this->db->insert('tbl_users_presensi', $data);
        return $result;
    }

    public function update_data($id, $data)
    {
        $this->db->where('id_user', $id);
        $result = $this->db->update('tbl_users_presensi', $data);
        return $result;
    }

    public function delete_data($id)
    {
        $this->db->where('id_user', $id);
        $result = $this->db->delete('tbl_users_presensi');
        return $result;
    }
}


/* End of File: d:\Ampps\www\project\absen-pegawai\application\models\Karyawan_model.php */