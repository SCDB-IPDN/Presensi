<?php
defined('BASEPATH') OR die('No direct script access allowed!');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login(true);
    }

    public function index()
    {
        //CEK IP PUBLIC
        $externalContent = file_get_contents('http://checkip.dyndns.com/');
        preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
        $externalIp = $m[1];

        $cek_ip = $this->db->query("SELECT * FROM tbl_ip WHERE ip = '$externalIp'")->result();

        //CEK MOBILE
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        $isMob = is_numeric(strpos($ua, "mobile"));
        
        if(!$cek_ip){
            $data = array(
                'title' => "AKSES PRESENSI PAKAI WIFI IPDN"
            );
            $this->load->view('404', $data);
        }elseif(!$isMob){
            $data = array(
                'title' => "AKSES PRESENSI MELALUI HANDPHONE"
            );
            $this->load->view('404', $data);
        }else{
            $data = array(
                'title' => "Login"
            );
            $this->load->view('login', $data);
        }
    }

    public function login()
    {
        $this->load->model('User_Model', 'user');
        $username = $this->input->post('username');
        $password = MD5($this->input->post('password'));

        $useragent = $_SERVER['HTTP_USER_AGENT'];

        $check = $this->user->find_by('username', $username, false);
        if ($check->num_rows() == 1) {
            $user_data = $check->row();


            if($user_data->useragent == NULL){

                $data = array(
                    'useragent' => $useragent,
                );

                $this->user->tambah_useragent('users', $data, $username);

                if($password == $user_data->password){
                    $this->set_session($user_data);
                    if(is_level('Manager')){
                        redirect('dashboard');
                    }else{
                        redirect('absensi/check_absen');
                    }
                } else {
                    $this->error('Login gagal! <br>Password tidak sesuai');

                    redirect('auth/');
                }

            }elseif($user_data->useragent != NULL){

                if($useragent == $user_data->useragent){
                    if($password == $user_data->password){
                        $this->set_session($user_data);
                        if(is_level('Manager')){
                            redirect('dashboard');
                        }else{
                            redirect('absensi/check_absen');
                        }
                    } else {
                        $this->error('Login gagal! <br>Password tidak sesuai');

                        redirect('auth/');
                    }
                }else{
                    $data = array(
                        'title' => "GUNAKAN HANDPHONE YANG DIGUNAKAN SAAT PERTAMA KALI AKSES APLIKASI PRESENSI"
                    );
                    $this->load->view('404', $data);

                    // $this->error('Login gagal! <br>Gunakan Handphone yang digunakan saat pertama kali mengakses aplikasi presensi');
                }
            }
        } else {
            $this->error('Login gagal! <br>User tidak ditemukan');

            redirect('auth/');
        }

        
    }

    private function set_session($user_data)
    {
        $this->load->model('Absensi_model', 'absensi');
        $this->session->set_userdata([
           'id_user' => $user_data->id_user,
           'nama' => $user_data->nama,
           'foto' => $user_data->foto,
           'username' => $user_data->username,
           'penugasan' => $user_data->penugasan,
           'level' => $user_data->level,
           'is_login' => true
        ]);

        if ($user_data->level == 'Karyawan') {
            $time = date('H:i:s');
            $absen = $this->absensi->absen_harian_user($user_data->id_user);
            $absen_hari_ini = $absen->num_rows();

            if ($absen_hari_ini < 2) {
                $keterangan = '';
                if ($absen_hari_ini == 1) {
                    $keterangan = 'pulang';
                } else if ($absen_hari_ini == 0) {
                    $keterangan = 'masuk';
                }

                $this->session->set_flashdata('absen_needed', [
                    'href' => base_url('absensi/check_absen/'),
                    'message' => 'Anda belum melakukan absensi'
                ]);
            }
        }

        $this->session->set_flashdata('response', [
            'status' => 'success', 
            'message' => 'Selamat Datang ' . $user_data->nama
        ]);
    }

    private function error($msg)
    {
        $this->session->set_flashdata('error', $msg);
    }
}
