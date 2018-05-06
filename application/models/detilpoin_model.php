<?php
/**
 * Created by PhpStorm.
 * User: Faishal Rachman
 * Date: 5/6/2018
 * Time: 12:07 AM
 */

class detilpoin_model extends CI_Model
{
    private $jumlah_poin;
    private $kategori;
    private $keterangan;
    private $tanggal;

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
    public function getKategori()
    {
        return $this->kategori;
    }

    /**
     * @param mixed $kategori
     */
    public function setKategori($kategori)
    {
        $this->kategori = $kategori;
    }

    /**
     * @return mixed
     */
    public function getKeterangan()
    {
        return $this->keterangan;
    }

    /**
     * @param mixed $keterangan
     */
    public function setKeterangan($keterangan)
    {
        $this->keterangan = $keterangan;
    }

    /**
     * @return mixed
     */
    public function getTanggal()
    {
        return $this->tanggal;
    }

    /**
     * @param mixed $tanggal
     */
    public function setTanggal($tanggal)
    {
        $this->tanggal = $tanggal;
    }

    /**
     * detilpoin_model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function setDetilPoin($jumlah_poin, $kategori, $keterangan, $tanggal){
        $this->jumlah_poin = $jumlah_poin;
        $this->kategori = $kategori;
        $this->keterangan = $keterangan;
        $this->tanggal = $tanggal;
    }

}