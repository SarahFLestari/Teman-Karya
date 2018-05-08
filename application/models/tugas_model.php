<?php
/**
 * Created by PhpStorm.
 * User: Faishal Rachman
 * Date: 5/8/2018
 * Time: 10:08 AM
 */

class tugas_model extends CI_Model
{
    private $id;
    private $nip;

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
    private $tanggal_mulai;
    private $tanggal_selesai;
    private $tugas;
    private $deskripsi;
    private $progress;

    public function setTugasModel($id,$tanggal_mulai, $tanggal_selesai, $tugas, $deskripsi, $progress){
        $this->id = $id;
        $this->tanggal_mulai = $tanggal_mulai;
        $this->tanggal_selesai = $tanggal_selesai;
        $this->tugas = $tugas;
        $this->deskripsi = $deskripsi;
        $this->progress = $progress;

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
    public function getTanggalMulai()
    {
        return $this->tanggal_mulai;
    }

    /**
     * @param mixed $tanggal_mulai
     */
    public function setTanggalMulai($tanggal_mulai)
    {
        $this->tanggal_mulai = $tanggal_mulai;
    }

    /**
     * @return mixed
     */
    public function getTanggalSelesai()
    {
        return $this->tanggal_selesai;
    }

    /**
     * @param mixed $tanggal_selesai
     */
    public function setTanggalSelesai($tanggal_selesai)
    {
        $this->tanggal_selesai = $tanggal_selesai;
    }

    /**
     * @return mixed
     */
    public function getTugas()
    {
        return $this->tugas;
    }

    /**
     * @param mixed $tugas
     */
    public function setTugas($tugas)
    {
        $this->tugas = $tugas;
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

    /**
     * @return mixed
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * @param mixed $progress
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;
        $data['progress'] = $progress;
        $this->db->where("id_detilproyek",$this->getId());
        $this->db->update("detil_proyek",$data);
    }

}