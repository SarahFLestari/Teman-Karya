<?php
	class HR extends SI_Controller{
		public function index(){
		    $query = $this->db->query("SELECT NIP,nama_pg, divisi, sum(jum_poin) as jumlah from detil_poin JOIN poin using(id_poin) JOIN tb_pegawai using (NIP) JOIN tb_divisi using (id_div) GROUP BY NIP
ORDER BY jumlah DESC");
		    $data['daftarPoin'] = $query->result_array();
            $this->laman_hr('hr/v_dash',$data);
		}
	}
?>