<?php
defined('BASEPATH') OR die('No direct script access allowed!');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        if(is_level('Manager')){
            $data = array(
                'title' => "Presensi Dashboard"
            );
            $this->load->view('dashboard', $data);
        }else{
            redirect('absensi/check_absen');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        session_destroy();
        redirect(base_url());
    }
}