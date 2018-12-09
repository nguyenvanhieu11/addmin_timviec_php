<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/27/2018
 * Time: 4:49 PM
 */

class C_them_chitiet_mt extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_mota_sanpham');
        $this->load->model('M_sanpham');

    }

    public function index(){
        $data["sanpham"]=$this->M_sanpham->getAllsanpham();
        $data["mota"]=$this->M_mota_sanpham->getAllmota();
        $this->template->load('master_layout','connects','sanpham/v_them_chitiet_mt',$data);
    }

    public function add(){
        $this->load->library('form_validation');
        $message=array('required','loi');
        $this->form_validation->set_rules('sanpham','san pham','required',$message);
        $this->form_validation->set_rules('mota','mo ta','required',$message);
        $this->form_validation->set_rules('chitiet','chi tiet','required',$message);

        if($this->form_validation->run() == FALSE){

            $this->template->load('master_layout','connects','sanpham/v_them_chitiet_mt');
        }else{
            $this->save();
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