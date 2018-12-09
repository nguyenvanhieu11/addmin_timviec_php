<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/25/2018
 * Time: 6:54 PM
 */

class C_suamucgia extends CI_Controller
{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_giaban');
    }

    public function index(){

        $this->template->load('master_layout','connects','giasanpham/v_suamucgia');
    }

    public function edit($id){
        $this->load->library('form_validation');
        $message_error=array('required',"lỗi");
        $this->form_validation->set_rules('giadau','Giá đầu','required',$message_error);
        $this->form_validation->set_rules('giacuoi','Giá cuối','required',$message_error);

        if($this->form_validation->run() == FALSE){
            $data['mucgiaid']=$this->M_giaban->getmucgiaId($id);
            $this->template->load('master_layout','connects','giasanpham/v_suamucgia',$data);
        }else{
            $this->save($id);
            redirect(site_url('c_quanlymucgia'));
        }
    }

    public function save($id=0){
        $value=array(
            'gia_bat_dau'=>$this->input->post('giadau'),
            'gia_ket_thuc'=>$this->input->post('giacuoi'),
        );
        if($id == 0)
            $this->M_giaban->insert($value);
        else
            $this->M_giaban->update($id,$value);
    }
}