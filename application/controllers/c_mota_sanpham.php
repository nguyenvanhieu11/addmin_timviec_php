<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/20/2018
 * Time: 1:02 AM
 */

class C_mota_sanpham extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_mota_sanpham');
    }

    public function index(){
        $data['mota']=$this->M_mota_sanpham->getAllmota();
        $this->template->load('master_layout','connects','sanpham/v_mota_sanpham',$data);
    }

}