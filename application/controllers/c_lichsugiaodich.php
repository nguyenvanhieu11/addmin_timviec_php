<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/30/2018
 * Time: 8:56 PM
 */

class C_lichsugiaodich extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_khachhang');
    }

    public function index(){
        $this->template->load('master_layout','connects','thanh_vien/v_giaodichkhachhang');
    }

    public function khachhang($id){
        $data["giaodich"]=$this->M_khachhang->getgiaodichByIdkh($id);
        $this->template->load('master_layout','connects','thanh_vien/v_giaodichkhachhang',$data);
    }
}