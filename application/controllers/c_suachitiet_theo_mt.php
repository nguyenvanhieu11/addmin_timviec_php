<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/26/2018
 * Time: 12:05 AM
 */

class C_suachitiet_theo_mt extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_mota_sanpham');
    }

    public function index(){
        $this->template->load('master_layout','connects','sanpham/v_suachitiettheo_mt');
    }

    public function edit($id){
        $this->load->library('form_validation');
        $error=array('required','Loi');
        $this->form_validation->set_rules('chitiet','Chi tiet mo ta','required',$error);
        if($this->form_validation->run()==FALSE){
            $data["chitietid"]=$this->M_mota_sanpham->getchitietById($id);
            $this->template->load('master_layout','connects','sanpham/v_suachitiettheo_mt',$data);
        }
        else{
            $this->save($id);
            redirect(site_url('c_mota_sanpham'));
        }
    }

    public function save($id=0){
        $value=array(
            'chi_tiet_mt'=>$this->input->post('chitiet'),
        );
        if($id==0)
            $this->M_mota_sanpham->insert($value);
        else
            $this->M_mota_sanpham->updatect($id,$value);
    }
}