<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/16/2018
 * Time: 11:15 AM
 */

class C_chitietloaisp extends CI_Controller
{
    public  function __construct()
    {
        parent:: __construct();
        $this->load->model('M_loaisanpham');
    }

    public function index(){
        $this->template->load('master_layout','connects','sanpham/v_chitietloaisp');
    }
    public function type($id){
        $data["producttype"]=$this->M_loaisanpham->getSPBytype($id);
        $this->template->load('master_layout','connects','sanpham/v_chitietloaisp',$data);
    }
}