<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/17/2018
 * Time: 3:35 PM
 */

class C_binhluan_idtin extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_tintuc');
    }

    public function index(){
        $this->template->load('master_layout','connects','tintuc/v_binhluan_idtin');
    }
}