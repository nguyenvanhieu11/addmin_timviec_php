<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/15/2018
 * Time: 2:43 PM
 */

class C_chitietdon extends  CI_Controller
{
    public  function __construct()
    {
        parent:: __construct();
        $this->load->model('M_dondathang');
    }

    public function index(){
        $this->template->load('master_layout','connects','dathang/v_chitietdon');
    }

    public function don($id){
        $data["ctdon"]=$this->M_dondathang->getchitietdondhByIddon($id);
        $this->template->load('master_layout','connects','dathang/v_chitietdon',$data);
    }
}