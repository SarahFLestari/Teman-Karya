<?php
/**
 * Created by PhpStorm.
 * User: Faishal Rachman
 * Date: 5/6/2018
 * Time: 1:02 AM
 */

class presensi_model extends CI_Model
{
    private $tanggal;
    private $kategori;
    private $jam;

    /**
     * presensi_model constructor.
     * @param $tanggal
     * @param $waktu_masuk
     * @param $waktu_keluar
     */
    public function __construct()
    {
    }
    public function setPresensi($tanggal, $kategori, $jam){

        $this->tanggal = $tanggal;
        $this->kategori = $kategori;
        $this->jam = $jam;
    }

    /**
     * @return mixed
     */
    public function getTanggal()
    {
        return $this->tanggal;
    }

    /**
     * @return mixed
     */
    public function getKategori()
    {
        return $this->kategori;
    }

    /**
     * @return mixed
     */
    public function getJam()
    {
        return $this->jam;
    }

}