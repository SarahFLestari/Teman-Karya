<?php

class Supervisor extends SI_Controller{
	 public function __construct()
    {

        parent::__construct();
        $this->load->model("pegawai_model");
        $this->load->model("poin_model");
        $this->load->model("kategoripoin_model");
    }
    public function index()
    {
        
        $daftarKategori = array();

        $query = $this->db->query("SELECT * FROM kategori");
        foreach ($query->result_array() as $item) {
            $kategori = new kategoripoin_model();
            $kategori->setKategori($item['id_kategori'],$item['nama_kategori']);

            $id_kategori = $item['id_kategori'];
            $query2 = $this->db->query("SELECT * FROM poin where id_kategori='$id_kategori'");
            foreach ($query2->result_array() as $item2) {
                $poin = new poin_model();
                $poin->setPoin($item2['id_poin'],$item2['ket_poin'],$item2['jum_poin']);
                $kategori->tambahPoin($poin);
            }
            array_push($daftarKategori,$kategori);
        }
        $data['daftarKategori'] = $daftarKategori;
//        print_r($daftarKategori);
//
        $this->db->where("id_supervisor",$this->session->userdata("id_supervisor"));
        $query = $this->db->query("SELECT * FROM proyek JOIN detil_proyek using (id_proyek) JOIN tb_pegawai using (nip) JOIN tb_divisi using (id_div)");
//        echo '<pre>' . var_export($query->result_array(), true) . '</pre>';
        $data['daftarRekap'] = $query->result_array();
        $this->laman_spv('spv/dash',$data);
    }
    public function list_pgw()
    {
        // $this->laman_spv('spv/list_pgw');
    }
    public function login(){

        $sess_data = array(
            'logged_in' => TRUE,
            'NIP' => 2018050402,
            'status' => "Supervisor",
            'id_supervisor' => 1,
            'nama' => "Afdal Fauzan"
        );
        $this->session->set_userdata($sess_data);
        redirect("Supervisor");
    }


}
?>