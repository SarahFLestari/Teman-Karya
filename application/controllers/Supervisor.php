<?php

class Supervisor extends SI_Controller{
	 public function __construct()
    {

        parent::__construct();
        $this->load->model("pegawai_model");
    }
    public function index()
    {
        $this->laman_spv('spv/dash');
    }
    public function list_pgw()
    {
        $this->laman_spv('spv/list_pgw');
    }
}
?>