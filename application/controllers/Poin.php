<?php
/**
 * Created by PhpStorm.
 * User: Faishal Rachman
 * Date: 5/8/2018
 * Time: 4:37 PM
 */

class Poin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("penawaran_model");
    }

    public function addPoin($nip){
        if ($this->session->userdata("status") == "Supervisor") {
            foreach ($this->input->post("poin") as $item) {
                $data = array(
                    'NIP' => $nip,
                    'id_poin' => $item,
                    'tanggal' => date("Y-m-d")
                );
                $this->db->insert("detil_poin", $data);
            }
            redirect("Supervisor");
        }
        else{
            echo "You are not allowed to view this page";
        }
    }
    public function tukarPoin($id){

        $nip = $this->session->userdata("NIP");
        $query = $this->db->query("SELECT sum(jum_poin) as jumlah FROM detil_poin JOIN poin using (id_poin) where NIP = $nip");
        $poindaridb = $query->result_array()[0]['jumlah'];

        $query2 = $this->db->query("SELECT sum(harga_poin) as jumlah FROM penawaran JOIN histori_penukaran using (id_penawaran) where NIP = $nip");
        $poinminus = $query2->result_array()[0]['jumlah'];

        $poinsekarang = intval($poindaridb)-intval($poinminus);
        echo $poinsekarang;
        $penawaran = new penawaran_model();
        $penawaran->getPenawaran($id);

        if ($poinsekarang - $penawaran->getJumlahPoin() >= 0){
            $penawaran->tukarPoin($nip);
        }

        redirect("Dashboard/tukar_poin",'refresh');
    }
}