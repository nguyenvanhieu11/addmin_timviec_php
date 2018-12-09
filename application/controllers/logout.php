<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/23/2018
 * Time: 11:02 AM
 */

class logout extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index(){
        $this->session->sess_destroy();
        $this->template->load('Default_layout','contents','login/v_login');
    }
}