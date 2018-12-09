<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/20/2018
 * Time: 9:08 AM
 */

class M_mota_sanpham extends CI_Model
{
    var $table = "mota_sanpham";

    var $tablename = "chitiet_mota_sanpham";

    public function __construct()
    {
        parent:: __construct();
    }

    public function getAllmota()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function insert($value)
    {
        if ($this->db->insert($this->table, $value))
            return true;
    }

    public function getmotaById($id)
    {
        $this->db->where('id_mota', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function update($id, $value)
    {
        $this->db->where('id_mota', $id);
        if ($this->db->update($this->table, $value))
            return true;
    }

    public function getchitietByIdmt($id)
    {
        $sql = "select mota_sanpham.id_mota,ten_mota,id_chitiet_mt,chi_tiet_mt,ten_sp 
                from mota_sanpham 
                inner join chitiet_mota_sanpham 
                on mota_sanpham.id_mota=chitiet_mota_sanpham.id_mota 
                inner join san_pham
                on chitiet_mota_sanpham.id_san_pham = san_pham.id_san_pham
                where mota_sanpham.id_mota=$id";
        $quert = $this->db->query($sql);
        return $quert->result();
    }

    public function getchitietById($id)
    {
        $this->db->where('id_chitiet_mt', $id);
        $query = $this->db->get($this->tablename);
        return $query->row();
    }

    //update chi tiet mo ta
    public function updatect($id, $value)
    {
        $this->db->where('id_chitiet_mt', $id);
        if ($this->db->update($this->tablename, $value))
            return true;
    }

    //xoa chi tiet mo ta theo id
    public function delete($id)
    {
        $this->db->where('id_chitiet_mt', $id);
        if ($this->db->delete($this->tablename))
            return true;
    }

    //lay toan bo chi tiet mo ta
    public function getAllchitiet($limit=0,$start=0)
    {
        if($limit > 0){
            $sql = "select san_pham.id_san_pham,id_chitiet_mt,ten_mota,ten_sp,chi_tiet_mt 
            from san_pham inner join chitiet_mota_sanpham 
            ON san_pham.id_san_pham=chitiet_mota_sanpham.id_san_pham
            inner join mota_sanpham on chitiet_mota_sanpham.id_mota=mota_sanpham.id_mota limit $start,$limit";
            $query = $this->db->query($sql);
            return $query->result();
        }
    }

    //insert chi tiet mo ta

    public function insertctmt($value){
        if($this->db->insert($this->tablename,$value))
            return true;
    }

}