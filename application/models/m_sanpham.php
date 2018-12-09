<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/17/2018
 * Time: 12:13 AM
 */

class M_sanpham extends CI_Model
{
    var $table = "san_pham";
    var $tablename = "loai_san_pham";
    var $table_bl="danh_gia_va_bl";

    public function __construct()
    {
        parent:: __construct();
    }

    public function getAllsanpham($limit = 0, $start = 0)
    {
        if ($limit > 0)
            $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function getSPById($id)
    {
        $sql = "select * from san_pham where id_san_pham=$id";
        $query = $this->db->query($sql);
        return $query->row();
    }

    public function getAlltype()
    {
        $query = $this->db->get($this->tablename);
        return $query->result();
    }

    public function update($value, $id)
    {
        $this->db->where('id_san_pham', $id);
        if ($this->db->update($this->table, $value))
            return true;
    }

    public function insert($value)
    {
        if ($this->db->insert($this->table, $value)) ;
        return true;
    }

    public function delete($id)
    {
        $this->db->where('id_san_pham', $id);
        if ($this->db->delete($this->table))
            return true;
    }

    public function getAllcomment($limit=0,$start=0)
    {
        if($limit > 0)
            $sql = "select san_pham.id_san_pham,id,ten_sp,nguoi_binh_luan,email,noi_dung_bl,ngaybinh_luan,phan_hoi from san_pham 
inner join danh_gia_va_bl on san_pham.id_san_pham=danh_gia_va_bl.id_san_pham limit $start,$limit";
            $query=$this->db->query($sql);
            return $query->result();
    }

    public function getbinhluanById($id){
        $this->db->where('id',$id);
        $query=$this->db->get($this->table_bl);
        return $query->row();
    }

    public function phanhoi($value,$id){
        $this->db->where('id',$id);
        if($this->db->update($this->table_bl,$value))
            return true;
    }

    public function deletebl($id){
        $this->db->where('id',$id);
        if($this->db->delete($this->table_bl))
            return true;
    }
}