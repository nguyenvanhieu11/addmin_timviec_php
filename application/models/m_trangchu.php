<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/20/2018
 * Time: 10:29 AM
 */

class M_trangchu extends CI_Model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function getgiaodich()
    {
        $sql = "select * from thanh_vien inner join cong_viec 
on thanh_vien.id_thanh_vien = cong_viec.id_thanh_vien limit 10";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
