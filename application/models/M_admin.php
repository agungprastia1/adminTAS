<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_admin extends CI_model
{
    public function add($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function get($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function cekemail($data)
    {
        return $this->db->query("SELECT * FROM `akun` WHERE `email` ='" . $data . "'")->result_array();
    }

    public function cek_akun($user, $pass)
    {
        return $this->db->get_where('akun', ['email' => $user, 'pass' => $pass]);
    }

    public function token($data)
    {
        return $this->db->get_where('keys', ['token' => $data])->result_array();
    }

    public function admin($data)
    {
        return $this->db->get_where('akun', ['id' => $data])->result_array();
    }
}
