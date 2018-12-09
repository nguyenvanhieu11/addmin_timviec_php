<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/16/2018
 * Time: 11:46 PM
 */

class M_thanhvien extends CI_Model
{
    var $table = "thanh_vien";
//    var $tablename = "don_dat_hang";

    public function __construct()
    {
        parent:: __construct();
    }

    public function getAllthanhvien($limit = 0, $start = 0)
    {
        if ($limit > 0) {
            $query = $this->db->get($this->table, $limit, $start);
            return $query->result();
        }
    }

    public function delete($id)
    {
        $this->db->where('id_thanh_vien', $id);
        if ($this->db->delete($this->table))
            return true;
    }

    public function getgiaodichByIdkh($id)
    {
        $sql = "select * from khach_hang inner join don_dat_hang on khach_hang.id_khach_hang=don_dat_hang.id_khach_hang 
        where khach_hang.id_khach_hang=$id";
        $query = $this->db->query($sql);
        return $query->result();
    }
}