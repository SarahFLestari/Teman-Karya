<?php
	class HR extends SI_Controller{
		public function index(){
            if ($this->session->userdata("logged_in") and $this->session->userdata("status") == "HR") {
		    $query = $this->db->query("SELECT NIP,nama_pg, divisi, sum(jum_poin) as jumlah from detil_poin JOIN poin using(id_poin) JOIN tb_pegawai using (NIP) JOIN tb_divisi using (id_div) GROUP BY NIP
ORDER BY jumlah DESC");
		    $data['daftarPoin'] = $query->result_array();
            $this->laman_hr('hr/v_dash',$data);
            } else {
                $this->session->sess_destroy();
                redirect("Utama/login_hrd");
            }
		}
		public function login(){
            if ($this->input->server("REQUEST_METHOD") == "POST") {
                $this->db->where("nama_user", $this->input->post("username"));
                $this->db->where("pass_user", $this->input->post("pass"));
                $this->db->join("hrd", "tb_user.NIP = hrd.NIP");
                $this->db->join("tb_pegawai", "tb_user.NIP = tb_pegawai.NIP");
                $query = $this->db->get("tb_user");
                if ($query->num_rows() == 1) {
                    $hasil = $query->result_array()[0];
                    $sess_data = array(
                        'logged_in' => TRUE,
                        'NIP' => $hasil['NIP'],
                        'status' => "HR",
                        'id_hrd' => $hasil['id_hrd'],
                        'nama' => $hasil['nama_pg']
                    );
                    $this->session->set_userdata($sess_data);
                }
            }
            redirect('HR');
        }
	}
?>