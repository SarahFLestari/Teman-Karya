<?php

class Supervisor extends SI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model("pegawai_model");
        $this->load->model("poin_model");
        $this->load->model("kategoripoin_model");
    }

    public function index()
    {

        if ($this->session->userdata("logged_in") and $this->session->userdata("status") == "Supervisor") {
            $daftarKategori = array();

            $query = $this->db->query("SELECT * FROM kategori");
            foreach ($query->result_array() as $item) {
                $kategori = new kategoripoin_model();
                $kategori->setKategori($item['id_kategori'], $item['nama_kategori']);

                $id_kategori = $item['id_kategori'];
                $query2 = $this->db->query("SELECT * FROM poin where id_kategori='$id_kategori'");
                foreach ($query2->result_array() as $item2) {
                    $poin = new poin_model();
                    $poin->setPoin($item2['id_poin'], $item2['ket_poin'], $item2['jum_poin']);
                    $kategori->tambahPoin($poin);
                }
                array_push($daftarKategori, $kategori);
            }
            $data['daftarKategori'] = $daftarKategori;
            $this->db->where("id_supervisor", $this->session->userdata("id_supervisor"));
            $query = $this->db->query("SELECT * FROM proyek JOIN detil_proyek using (id_proyek) JOIN tb_pegawai using (nip) JOIN tb_divisi using (id_div)");
//        echo '<pre>' . var_export($query->result_array(), true) . '</pre>';
            $data['daftarRekap'] = $query->result_array();
            $this->laman_spv('spv/dash', $data);
        } else {
            $this->session->sess_destroy();
            redirect("Utama/login_supervisor");
        }
    }

    public function login()
    {

        if ($this->input->server("REQUEST_METHOD") == "POST") {
            $this->db->where("nama_user", $this->input->post("username"));
            $this->db->where("pass_user", $this->input->post("pass"));
            $this->db->join("supervisor", "tb_user.NIP = supervisor.NIP");
            $this->db->join("tb_pegawai", "tb_user.NIP = tb_pegawai.NIP");
            $query = $this->db->get("tb_user");
            if ($query->num_rows() == 1) {
                $hasil = $query->result_array()[0];
                $sess_data = array(
                    'logged_in' => TRUE,
                    'NIP' => $hasil['NIP'],
                    'status' => "Supervisor",
                    'id_supervisor' => $hasil['id_supervisor'],
                    'nama' => $hasil['nama_pg']
                );
                $this->session->set_userdata($sess_data);
            }
        }
        redirect('Supervisor');
    }
}

?>