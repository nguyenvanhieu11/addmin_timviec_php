<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/23/2018
 * Time: 8:37 AM
 */

class M_login extends CI_Model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function login($user, $pass){
        $this->db->select('id_quan_tri, ten_quan_tri, ten_dang_nhap, mat_khau');
        $this->db->from('quan_tri');
        $this->db->where('ten_dang_nhap', $user);
        $this->db->where('mat_khau', $pass);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {

            return $query->result();

        } else {

            return false;

        }
    }

}
