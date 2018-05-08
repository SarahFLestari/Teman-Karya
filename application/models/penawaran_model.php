<?php
/**
 * Created by PhpStorm.
 * User: Faishal Rachman
 * Date: 5/8/2018
 * Time: 11:56 PM
 */

class penawaran_model extends CI_Model
{
    private $id;
    private $jumlah_poin;
    private $nama_penawaran;
    private $deskripsi;

    public function setPenawaran($id,$jumlah_poin,$nama_penawaran,$deskripsi){
        $this->id = $id;
        $this->jumlah_poin = $jumlah_poin;
        $this->nama_penawaran = $nama_penawaran;
        $this->deskripsi = $deskripsi;
    }

    public function getPenawaran($id){
        $this->db->where("id_penawaran",$id);
        $query = $this->db->get("penawaran");
        if ($query->num_rows() == 1){
            $hasil = $query->result_array()[0];
            $this->id = $id;
            $this->nama_penawaran = $hasil['nama_penawaran'];
            $this->jumlah_poin = $hasil['harga_poin'];
            $this->deskripsi = $hasil['deskripsi'];
        }
    }
    public function tukarPoin($nip){
        $data['id_penawaran'] = $this->id;
        $data['NIP'] = $nip;
        $this->db->insert("histori_penukaran",$data);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getNamaPenawaran()
    {
        return $this->nama_penawaran;
    }

    /**
     * @param mixed $nama_penawaran
     */
    public function setNamaPenawaran($nama_penawaran)
    {
        $this->nama_penawaran = $nama_penawaran;
    }

    /**
     * @return mixed
     */
    public function getDeskripsi()
    {
        return $this->deskripsi;
    }

    /**
     * @param mixed $deskripsi
     */
    public function setDeskripsi($deskripsi)
    {
        $this->deskripsi = $deskripsi;
    }
}