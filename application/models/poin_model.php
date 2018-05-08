<?php
/**
 * Created by PhpStorm.
 * User: Faishal Rachman
 * Date: 5/8/2018
 * Time: 2:54 PM
 */

class poin_model extends CI_Model
{
    private $id;
    private $keterangan;
    private $jumlah_poin;

    public function setPoin($id,$keterangan,$jumlah_poin){
        $this->id = $id;
        $this->keterangan = $keterangan;
        $this->jumlah_poin = $jumlah_poin;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getKeterangan()
    {
        return $this->keterangan;
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
    public function getPoinbyId($id){
        $this->db->where("id_poin",$id);
        $query = $this->db->get("poin");
        if ($query->num_rows() == 1){
            $result = $query->result_array();
            $this->id = $id;
            $this->jumlah_poin = $result['jum_poin'];
            $this->keterangan = $result['ket_poin'];
        }
    }
}