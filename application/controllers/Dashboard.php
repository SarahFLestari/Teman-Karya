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
        if ($this->session->userdata("logged_in") and $this->session->userdata("status") == "Pegawai") {
            $pegawai = new pegawai_model();
            $pegawai->getPegawai($this->session->userdata("NIP"));
            $data['pegawai'] = $pegawai;
//            $data['nip'] = $pegawai->getNip();
            $this->laman('v_dashboard', $data);
        } else{
            redirect("Dashboard/login");
        }
    }

    public function poin()
    {

        $this->laman('v_poin');
    }

    public function login()
    {
        $sess_data = array(
            'logged_in' => TRUE,
            'NIP' => 1301150034,
            'status' => "Pegawai",
            'nama' => "Rama Aditya Maulana"
        );
        $this->session->set_userdata($sess_data);
        redirect('Dashboard');
    }
}