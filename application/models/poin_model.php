<?php
/**
 * Created by PhpStorm.
 * User: Faishal Rachman
 * Date: 4/26/2018
 * Time: 11:39 AM
 */

class poin_model extends CI_Model
{
    private $id_poin;
    private $id_kategori;
    private $NIP;
    private $ket_poin;
    private $jum_poin;

    /**
     * poin_model constructor.
     * @param $id_poin
     * @param $id_kategori
     * @param $NIP
     * @param $ket_poin
     * @param $jum_poin
     */
    public function __construct($id_poin, $id_kategori, $NIP, $ket_poin, $jum_poin)
    {
        $this->id_poin = $id_poin;
        $this->id_kategori = $id_kategori;
        $this->NIP = $NIP;
        $this->ket_poin = $ket_poin;
        $this->jum_poin = $jum_poin;
    }

    /**
     * @return mixed
     */
    public function getIdPoin()
    {
        return $this->id_poin;
    }

    /**
     * @param mixed $id_poin
     */
    public function setIdPoin($id_poin)
    {
        $this->id_poin = $id_poin;
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
    public function getNIP()
    {
        return $this->NIP;
    }

    /**
     * @param mixed $NIP
     */
    public function setNIP($NIP)
    {
        $this->NIP = $NIP;
    }

    /**
     * @return mixed
     */
    public function getKetPoin()
    {
        return $this->ket_poin;
    }

    /**
     * @param mixed $ket_poin
     */
    public function setKetPoin($ket_poin)
    {
        $this->ket_poin = $ket_poin;
    }

    /**
     * @return mixed
     */
    public function getJumPoin()
    {
        return $this->jum_poin;
    }

    /**
     * @param mixed $jum_poin
     */
    public function setJumPoin($jum_poin)
    {
        $this->jum_poin = $jum_poin;
    }

}