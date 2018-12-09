<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/23/2018
 * Time: 6:01 PM
 */

class C_quanlythanhvien extends CI_Controller
{
    public  function __construct()
    {
        parent:: __construct();
        $this->load->model('M_thanhvien');
    }
    public function index(){
        $data["thanhvien"]=$this->M_thanhvien->getAllthanhvien();
        $this->template->load('master_layout','connects','thanhvien/v_quanly_thanhvien',$data);
    }

    public function delete($id){
        $this->M_thanhvien->delete($id);
        redirect(site_url('c_quanlythanhvien'));
    }
}