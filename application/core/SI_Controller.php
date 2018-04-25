<?php
	class SI_Controller extends CI_Controller{
		public function laman($konten, $data = NULL){
			$data['konten'] = $this->load->view($konten, $data, TRUE);
			$this->load->view('template/index', $data, FALSE);

		}
	}