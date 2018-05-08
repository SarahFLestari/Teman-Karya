<?php
/**
 * Created by PhpStorm.
 * User: Faishal Rachman
 * Date: 5/8/2018
 * Time: 4:37 PM
 */

class Poin extends CI_Controller
{
    public function addPoin($nip){
        if ($this->session->userdata("status") == "Supervisor") {
            foreach ($this->input->post("poin") as $item) {
                $data = array(
                    'NIP' => $nip,
                    'id_poin' => $item,
                    'tanggal' => date("Y-m-d")
                );
                echo $item;
                $this->db->insert("detil_poin", $data);
            }
            redirect("Supervisor");
        }
        else{
            echo "You are not allowed to view this page";
        }
    }
}