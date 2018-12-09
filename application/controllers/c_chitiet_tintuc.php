<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/28/2018
 * Time: 11:41 PM
 */

class C_chitiet_tintuc extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_tintuc');
    }

    public function index(){
        $this->template->load('master_layout','connects','tintuc/v_chitiet_tintuc');
    }

    public function tintuc($id){
        $data['tintucid']=$this->M_tintuc->gettintucById($id);
        $this->template->load('master_layout','connects','tintuc/v_chitiet_tintuc',$data);
    }
}