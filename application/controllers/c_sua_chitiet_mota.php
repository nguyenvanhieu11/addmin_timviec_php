<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/26/2018
 * Time: 11:20 PM
 */

class C_sua_chitiet_mota extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_mota_sanpham');
        $this->load->model('M_sanpham');
    }

    public function index(){
        $this->template->load('master_layout','connects','sanpham/v_sua_chitiet_mt');
    }

    public function edit($id){
        $this->load->library('form_validation');
        $message=array('required','loi');
        $this->form_validation->set_rules('sanpham','san pham','required',$message);
        $this->form_validation->set_rules('mota','mo ta','required',$message);
        $this->form_validation->set_rules('chitiet','chi tiet','required',$message);

        if($this->form_validation->run() == FALSE){
            $data["sanpham"]=$this->M_sanpham->getAllsanpham();
            $data["mota"]=$this->M_mota_sanpham->getAllmota();
            $data['chitietid']=$this->M_mota_sanpham->getchitietById($id);
            $this->template->load('master_layout','connects','sanpham/v_sua_chitiet_mt',$data);
        }else{
            $this->save($id);
            redirect(site_url('c_chitiet_mota'));
        }

    }

    public function save($id=0){
        $value=array(
            'id_mota'=>$this->input->post('mota'),
            'id_san_pham'=>$this->input->post('sanpham'),
            'chi_tiet_mt'=>$this->input->post('chitiet')
        );
        if($id==0)
            $this->M_mota_sanpham->insertctmt($value);
        else
            $this->M_mota_sanpham->updatect($id,$value);
    }
}