<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/19/2018
 * Time: 9:34 PM
 */

class M_giaban extends CI_Model
{
    var $table="muc_gia";
    public function __construct()
    {
        parent:: __construct();
    }

    public function getAllmucgia(){
        $query=$this->db->get($this->table);
        return $query->result();
    }

    public function insert($value){
        if($this->db->insert($this->table,$value))
        return true;
    }

    public function getmucgiaId($id){
        $this->db->where('id_muc_gia',$id);
        $query=$this->db->get($this->table);
        return $query->row();
    }

    public function update($id,$value){
        $this->db->where('id_muc_gia',$id);
        if($this->db->update($this->table,$value));
        return true;
    }

    public function delete($id){
        $this->db->where('id_muc_gia',$id);
        if($this->db->delete($this->table))
            return true;
    }
}