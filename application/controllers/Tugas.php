<?php
/**
 * Created by PhpStorm.
 * User: Faishal Rachman
 * Date: 5/8/2018
 * Time: 11:36 AM
 */

class Tugas extends SI_Controller
{
    public function updateProgress($id){
        $nip = $this->session->userdata("NIP");

        $this->db->where("id_detilproyek",$id);
        $this->db->where("NIP",$nip);
        $query = $this->db->query("SELECT * FROM detil_proyek");
        if ($query->num_rows() == 1){
            $this->load->model("tugas_model");
            $tugas = new tugas_model();
            $tugas->setId($id);
            $tugas->setProgress($this->input->post("progress"));
        }
        $status = $this->session->userdata("status");
        if ($status == "Pegawai"){
            redirect("Dashboard/tugas_pgw");
        }
    }


}