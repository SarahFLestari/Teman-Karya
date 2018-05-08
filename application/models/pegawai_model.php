<?php
/**
 * Created by PhpStorm.
 * User: Faishal Rachman
 * Date: 4/26/2018
 * Time: 11:34 AM
 */

class pegawai_model extends CI_Model
{
    private $nip;
    private $nama_pgw;
    private $no_telp;
    private $email;
    private $jumlah_poin;
    private $jumlah_tugas;

    /**
     * pegawai_model constructor.
     * @param $nip
     * @param $nama_pgw
     * @param $no_telp
     * @param $email
     * @param $jumlah_poin
     * @param $jumlah_tugas
     */
    public function __construct()
    {
        parent::__construct();
        $this->jumlah_poin = 0;
        $this->jumlah_tugas = 0;
    }

    /**
     * @return mixed
     */
    public function getJumlahPoin()
    {
        return $this->jumlah_poin;
    }

    /**
     * @param mixed $jumlah_poin
     */
    public function setJumlahPoin($jumlah_poin)
    {
        $this->jumlah_poin = $jumlah_poin;
    }

    /**
     * @return mixed
     */
    public function getJumlahTugas()
    {
        return $this->jumlah_tugas;
    }

    /**
     * @param mixed $jumlah_tugas
     */
    public function setJumlahTugas($jumlah_tugas)
    {
        $this->jumlah_tugas = $jumlah_tugas;
    }

    public function getPegawai($nip){
        $this->db->where("tb_pegawai.NIP",$nip);
        $this->db->join("tb_pegawai","tb_user.NIP = tb_pegawai.NIP");
        $query = $this->db->get("tb_user");
        if ($query->num_rows() > 0){
            $hasil = $query->result_array()[0];
            $this->nip = $hasil['NIP'];
            $this->nama_pgw = $hasil['nama'];
            $this->no_telp = $hasil['nohp'];
            $this->email = "";
        }

        $this->db->where("NIP",$nip);
        $query = $this->db->query("SELECT sum(jum_poin) as jum from detil_poin JOIN poin using (id_poin)");

        if ($query->result_array()[0]['jum'] == NULL){
            $this->jumlah_poin = 0;
        }
        else {
            $this->jumlah_poin = $query->result_array()[0]['jum'];
        }
//        print_r($query->result_array());
    }

    /**
     * @return mixed
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * @param mixed $nip
     */
    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    /**
     * @return mixed
     */
    public function getNamaPgw()
    {
        return $this->nama_pgw;
    }

    /**
     * @param mixed $nama_pgw
     */
    public function setNamaPgw($nama_pgw)
    {
        $this->nama_pgw = $nama_pgw;
    }

    /**
     * @return mixed
     */
    public function getNoTelp()
    {
        return $this->no_telp;
    }

    /**
     * @param mixed $no_telp
     */
    public function setNoTelp($no_telp)
    {
        $this->no_telp = $no_telp;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }



}