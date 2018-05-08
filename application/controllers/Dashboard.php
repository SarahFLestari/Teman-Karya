<?php

class Dashboard extends SI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model("pegawai_model");
        $this->load->model("detilpoin_model");
        $this->load->model("presensi_model");
        $this->load->model("tugas_model");
        $this->load->model("penawaran_model");
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
        $daftar_poin = array();
        $nip = $this->session->userdata("NIP");
        $this->db->where("NIP",$nip);
        $query = $this->db->query("SELECT * FROM detil_poin JOIN poin using (id_poin) JOIN kategori using (id_kategori)");
        if ($query->num_rows() == 0){
            $daftar_poin = NULL;
        }
        else{
            //$jumlah_poin, $kategori, $keterangan, $tanggal
            foreach ($query->result_array() as $item) {
                $poin = new detilpoin_model();
                $poin->setDetilPoin($item['jum_poin'],$item['nama_kategori'],$item['ket_poin'],$item['tanggal']);
                array_push($daftar_poin,$poin);
            }
        }
        $data['daftar_poin'] = $daftar_poin;
        $this->laman('v_poin',$data);
    }

    public function presensi_pgw(){
        $daftarpresensi = array();
        $this->db->where("NIP",$this->session->userdata("NIP"));
        $query = $this->db->get("tb_presensi");
        foreach ($query->result_array() as $item) {
            $presensi = new presensi_model();
            $kategori = "Keluar";
            if ($item['kodepresensi'] == 1){
                $kategori = "Masuk";
            }
            $presensi->setPresensi($item['tanggal'],$kategori,$item['jampresensi']);
            array_push($daftarpresensi,$presensi);
        }
        $data['daftarpresensi'] = $daftarpresensi;
        $this->laman('v_presensi_pgw',$data);
    }

    public function tugas_pgw(){
        $this->db->where("NIP","2018050401");
        $query = $this->db->query("SELECT * FROM `proyek` JOIN detil_proyek using (id_proyek)");
        $daftarTugas = array();
        foreach ($query->result_array() as $item) {
            $tugas = new tugas_model();
            $tugas->setTugasModel($item['id_detilproyek'],$item['tanggal_mulai'],$item['tanggal_selesai'],$item['nama_proyek'],$item['deskripsi'],$item['progress']);
            array_push($daftarTugas,$tugas);
        }
        $data['daftarTugas'] = $daftarTugas;
        $this->laman('v_tugas_pgw',$data);
    }
    public function login()
    {
        $sess_data = array(
            'logged_in' => TRUE,
            'NIP' => 2018050401,
            'status' => "Pegawai",
            'nama' => "Muhammad Fadhlan Supriadi"
        );
        $this->session->set_userdata($sess_data);
        redirect('Dashboard');
    }
    public function tukar_poin(){
        $daftarPenawaran = array();
        $query = $this->db->query("SELECT * FROM penawaran");
        foreach ($query->result_array() as $item) {
            $penawaran = new penawaran_model();
            $penawaran->setPenawaran($item['id_penawaran'],$item['harga_poin'],$item['nama_penawaran'],$item['deskripsi']);
            array_push($daftarPenawaran,$penawaran);
        }
        $nip = $this->session->userdata("NIP");
        $query = $this->db->query("SELECT sum(jum_poin) as jumlah FROM detil_poin JOIN poin using (id_poin) where NIP = $nip");
        $poindaridb = $query->result_array()[0]['jumlah'];

        $query2 = $this->db->query("SELECT sum(harga_poin) as jumlah FROM penawaran JOIN histori_penukaran using (id_penawaran) where NIP = $nip");
        $poinminus = $query2->result_array()[0]['jumlah'];

        $poinsekarang = intval($poindaridb)-intval($poinminus);
        $data['poin'] = $poinsekarang;

        $data['daftarPenawaran'] = $daftarPenawaran;
        $this->laman('v_tukar_poin', $data);
    }
    public function histori_penukaran(){
        $nip = $this->session->userdata("NIP");
        $query = $this->db->query("SELECT * FROM histori_penukaran JOIN penawaran using (id_penawaran) where NIP = $nip");
        $data['daftarPenukaran'] = $query->result_array();
        $this->laman('v_histori',$data);

    }
}