<?php

class M_dondathang extends CI_Model
{

    var $table = "don_dat_hang";

    public function __construct()
    {
        parent:: __construct();
    }

    public function getchitietdondhByIddon($id)
    {
        $sql = "select * from don_dat_hang inner join ct_don_dh on don_dat_hang.id_don_dh=ct_don_dh.id_don_dh
        inner join san_pham on ct_don_dh.id_san_pham=san_pham.id_san_pham where don_dat_hang.id_don_dh=$id";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getAlldondathang($limit = 0, $start = 0)
    {
        if ($limit > 0) {
            $sql = "select * from don_dat_hang inner join khach_hang on don_dat_hang.id_khach_hang=khach_hang.id_khach_hang limit $start,$limit";
            $query = $this->db->query($sql);
            return $query->result();
        }
    }

    public function searchOrder($customerName, $dateOrder)
    {
        $sql = "select * from don_dat_hang inner join khach_hang 
                on don_dat_hang.id_khach_hang = khach_hang.id_khach_hang 
                where tenkhach_hang like '%$customerName%' and ngay_dat like '%$dateOrder%'";
        $query = $this->db->query($sql);
        return $query->result();
    }
}

?>