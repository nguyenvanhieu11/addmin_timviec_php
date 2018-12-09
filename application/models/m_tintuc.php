<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/17/2018
 * Time: 2:11 PM
 */

class M_tintuc extends CI_Model
{
    var $table = "tintuc";
    var $tablename="binhluan_tintuc";

    public function __construct()
    {
        parent:: __construct();
    }

    public function delete($id)
    {
        $this->db->where('id_tin', $id);
        if ($this->db->delete($this->table))
            return true;
    }

    public function insert($value)
    {
        if ($this->db->insert($this->table, $value))
            return true;
    }

    public function gettintucById($id)
    {
        $this->db->where('id_tin', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function getcountbltintuc($limit = 0, $start = 0)
    {
        if ($limit > 0) {
            $sql = "select tintuc.id_tin, ten_tin_tuc,ngay_dang,anh_minh_hoa, 
        (select count(*) from binhluan_tintuc where binhluan_tintuc.id_tin=tintuc.id_tin) as soluong_bl 
        from tintuc where 1 limit $start,$limit";
            $query = $this->db->query($sql);
            return $query->result();
        }
    }

    public function getbinhluanByIdtin($id){
        $this->db->where('id_tin',$id);
        $query=$this->db->get($this->tablename);
        return $query->result();
    }

    public function deleteBlId($id){
        $this->db->where('id_binhluan',$id);
        if($this->db->delete($this->tablename))
            return true;
    }

    public function getIdBl($id){
        $this->db->where('id_binhluan',$id);
        $query=$this->db->get($this->tablename);
        return $query->row();
    }

    public function update($id,$value){
        $this->db->where('id_binhluan',$id);
        if($this->db->update($this->tablename,$value))
            return true;
    }

    public function getAllbinhluan($limit=0,$start=0){
        if($limit > 0){
            $query=$this->db->get($this->tablename,$limit,$start);
            return $query->result();
        }

    }
}