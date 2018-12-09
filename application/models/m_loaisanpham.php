<?php

class  M_loaisanpham extends CI_Model
{
    var $table = 'loai_san_pham';

    public function __construct()
    {
        parent:: __construct();
    }

    public function addtypeproduct($value)
    {
        if ($this->db->insert($this->table, $value))
            return true;
    }

    public function getAlltype()
    {
        $sql = "select * from loai_san_pham";
        $protype = $this->db->query($sql);
        return $protype->result();
    }

    public function getSPBytype($id)
    {
        $sql = "select * from loai_san_pham inner join san_pham on loai_san_pham.id_loai_sp=san_pham.id_loai_sp where loai_san_pham.id_loai_sp=$id";
        $query=$this->db->query($sql);
        return $query->result();
    }
}

?>