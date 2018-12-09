<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/24/2018
 * Time: 12:05 AM
 */

class C_suasanpham extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_sanpham');
    }

    public function index(){

        $this->template->load('master_layout','connects','sanpham/v_suasanpham');
    }

    public function edit($id){
        $this->load->library("form_validation");
        $error_message=array('required','thêm thông tin không thành công');
        $this->form_validation->set_rules('loaisp','Loại sản phẩm','required',$error_message);
        $this->form_validation->set_rules('tensp','Tên sản phẩm','required',$error_message);
        $this->form_validation->set_rules('giaban','Gián bán','required',$error_message);
        $this->form_validation->set_rules('tinhtrang','Tình trạng','required',$error_message);
        $this->form_validation->set_rules('baohanh','Bảo hành','required',$error_message);
        $this->form_validation->set_rules('fileimg','file ảnh','required',$error_message);
        if($this->form_validation->run()==FALSE){
            $data["loaisanpham"]=$this->M_sanpham->getAlltype();
            $data["product"]=$this->M_sanpham->getSPById($id);
            $this->template->load('master_layout','connects','sanpham/v_suasanpham',$data);
        }
        else{
            $this->save($id);

            redirect(site_url('c_sanpham'));
        }
    }

    public function save($id=0){
        $value=array(
            'id_loai_sp'=>$this->input->post('loaisp'),
            'ten_sp'=>$this->input->post('tensp'),
            'gia_ban'=>$this->input->post('giaban'),
            'tinh_trang'=>$this->input->post('tinhtrang'),
            'bao_hanh'=>$this->input->post('baohanh'),
            'hinh_anh'=>$this->input->post('fileimg'),
        );
        if($id==0)
            $this->M_sanpham->insert($value);
        else
            $this->M_sanpham->update($value, $id);
    }
}