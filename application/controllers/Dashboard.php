<?php

class Dashboard extends SI_Controller
{

    // function __construct(argument)
    // {
    // 	# code...
    // }
    public function __construct()
    {

        parent::__construct();
        $this->load->model("pegawai_model");
    }

    public function index()
    {
        if ($this->session->userdata("logged_in")) {
            $pegawai = new pegawai_model();
            $pegawai->getPegawai($this->session->userdata("NIP"));
            $data['pegawai'] = $pegawai;
//            $data['nip'] = $pegawai->getNip();
            $this->laman('v_dashboard', $data);
        }
    }

    public function poin()
    {
        $this->laman('v_poin');
    }

    public function presensi_pgw(){
        $this->laman('v_presensi_pgw');
    }
    public function tugas_pgw(){

        $this->laman('v_tugas_pgw');

    }
    public function login()
    {
        $sess_data = array(
            'logged_in' => TRUE,
            'NIP' => 123123,
            'status' => "Pegawai"
        );
        $this->session->set_userdata($sess_data);
        redirect('Dashboard');
    }
}