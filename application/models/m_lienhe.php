<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/19/2018
 * Time: 12:31 AM
 */

class M_lienhe extends CI_Model
{
    var $table="lien_he";
    public function __construct()
    {
        parent:: __construct();
    }

    public function getAllLienhe($limit=0,$start=0){
        if($limit > 0){
            $sql="select * from lien_he limit $start,$limit";
            $query=$this->db->query($sql);
            return $query->result();
        }
    }

    public function getlienheById($id){
        $this->db->where('id_lien_he',$id);
        $query=$this->db->get($this->table);
            return $query->row();
    }

    public function phanhoi($value,$id){
        $this->db->where('id_lien_he',$id);
        if($this->db->update($this->table,$value))
            return true;
    }

    public function delete($id){
        $this->db->where('id_lien_he',$id);
        if($this->db->delete($this->table))
            return true;
    }
}