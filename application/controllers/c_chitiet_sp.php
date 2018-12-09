<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/15/2018
 * Time: 4:00 PM
 */

class C_chitiet_sp extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_chitietdon');
    }

    public  function index(){
        $this->template->load('master_layout','connects','dathang/v_chitiet_sp');
    }
}