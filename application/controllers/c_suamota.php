<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/25/2018
 * Time: 10:15 PM
 */

class C_suamota extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_mota_sanpham');
    }

    public function index(){
        $this->template->load('master_layout','connects','sanpham/v_suamota');
    }

    public function edit($id){
        $this->load->library('form_validation');
        $message_err=array('required','loi');
        $this->form_validation->set_rules('tenmota','ten mo ta','required',$message_err);

        if($this->form_validation->run() == FALSE){
            $data['motaid']=$this->M_mota_sanpham->getmotaById($id);
            $this->template->load('master_layout','connects','sanpham/v_suamota',$data);
        }else{
            $this->save($id);
            redirect(site_url('c_mota_sanpham'));
        }
    }

    public function save($id=0){
        $value=array(
            'ten_mota'=>$this->input->post('tenmota'),
        );
        if($id==0)
            $this->M_mota_sanpham->insert();
        else
            $this->M_mota_sanpham->update($id,$value);
    }
}