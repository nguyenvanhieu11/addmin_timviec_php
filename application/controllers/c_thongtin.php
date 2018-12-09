<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/23/2018
 * Time: 8:17 PM
 */

class C_thongtin extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_thanhvien');
    }

    public function index(){
        $this->template->load('master_layout','connects','thanhvien/v_thongtin');
    }
}