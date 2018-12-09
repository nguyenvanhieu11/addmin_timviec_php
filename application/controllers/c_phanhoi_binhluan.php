<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/17/2018
 * Time: 3:25 PM
 */

class C_phanhoi_binhluan extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_tintuc');
    }

    public function index(){
        $this->template->load('master_layout','connects','tintuc/v_phanhoi_binhluan');
    }
}