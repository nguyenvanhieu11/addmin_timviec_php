<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/20/2018
 * Time: 10:13 AM
 */

class C_chitiet_theo_mota extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_mota_sanpham');
    }

    public function  index(){
        $this->template->load('master_layout','connects','sanpham/v_chitiettheo_mota');
    }

    public function mota($id){
        $data["chitietmtid"]=$this->M_mota_sanpham->getchitietByIdmt($id);
        $this->template->load('master_layout','connects','sanpham/v_chitiettheo_mota',$data);
    }

    public function delete($id){
        $message="Xóa thành công";
        $this->M_mota_sanpham->delete($id);
        redirect(site_url('c_mota_sanpham'),$message);
    }

}