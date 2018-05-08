<?php
/**
 * Created by PhpStorm.
 * User: Faishal Rachman
 * Date: 5/8/2018
 * Time: 2:50 PM
 */

class kategoripoin_model extends CI_Model
{
    private $id_kategori;
    private $nama_kategori;
    private $daftarDetilPoin;

    /**
     * poin_model constructor.
     * @param $kategori
     * @param $daftarDetilPoin
     */
    public function __construct()
    {
        parent::__construct();
        $this->daftarDetilPoin = array();
    }

    public function setKategori($id_kategori,$nama_kategori){
        $this->id_kategori = $id_kategori;
        $this->nama_kategori = $nama_kategori;
    }

    /**
     * @return mixed
     */
    public function getIdKategori()
    {
        return $this->id_kategori;
    }

    /**
     * @param mixed $id_kategori
     */
    public function setIdKategori($id_kategori)
    {
        $this->id_kategori = $id_kategori;
    }

    /**
     * @return mixed
     */
    public function getNamaKategori()
    {
        return $this->nama_kategori;
    }

    /**
     * @param mixed $nama_kategori
     */
    public function setNamaKategori($nama_kategori)
    {
        $this->nama_kategori = $nama_kategori;
    }

    /**
     * @return array
     */
    public function getDaftarDetilPoin()
    {
        return $this->daftarDetilPoin;
    }
    /**
     * @return mixed
     */

    public function tambahPoin($poin)
    {
        array_push($this->daftarDetilPoin,$poin);
    }


}