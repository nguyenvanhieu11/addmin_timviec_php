<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/29/2018
 * Time: 9:04 PM
 */

class C_binhluan extends CI_Controller
{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_tintuc');
    }

    public function index()
    {
        $this->template->load('master_layout', 'connects', 'tintuc/v_binhluan');
    }

    public function tin($id)
    {
        $data['bl_tintuc'] = $this->M_tintuc->getbinhluanByIdtin($id);
        $this->template->load('master_layout', 'connects', 'tintuc/v_binhluantheotin', $data);
    }

    public function delete($id)
    {
        $this->M_tintuc->deleteBlId($id);
        redirect(site_url('c_quanlybinhluan_tt'));
    }
}