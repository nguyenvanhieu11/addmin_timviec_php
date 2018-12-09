<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/19/2018
 * Time: 10:13 PM
 */

class C_themmucgia extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_giaban');
    }

    public function index(){
        $this->template->load('master_layout','connects','giasanpham/v_themmucgia');
    }

}