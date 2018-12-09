<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/20/2018
 * Time: 10:28 AM
 */

class Trangchu extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_trangchu');
    }

    public function index(){
        $data["giaodich"]=$this->M_trangchu->getgiaodich();
        $this->template->load('master_layout','connects','trangchu/v_trangchu');
    }

}
