<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/20/2018
 * Time: 9:11 AM
 */

class C_them_mota_sanpham extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_mota_sanpham');
    }

    public function index(){
        $this->template->load('master_layout','connects','sanpham/v_themmota');
    }

    public function add(){
        $this->load->library('form_validation');
        $message_error=array('required','lỗi');
        $this->form_validation->set_rules('tenmota', 'tên mô tả','required',$message_error);
        if($this->form_validation->run() ==FALSE){
            $this->template->load('master_layout','connects','giasanpham/v_themmota');
        }else{
            $this->save();
            redirect(site_url('c_mota_sanpham'));
        }
    }

    public function save($id=0){
        $value=array(
            'ten_mota'=>$this->input->post('tenmota')
        );
        if($id==0)
            $this->M_mota_sanpham->insert($value);
        else
            $this->M_mota_sanpham->update($id,$value);
    }
}