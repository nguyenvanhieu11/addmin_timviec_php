<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/19/2018
 * Time: 9:34 PM
 */

class C_quanlymucgia extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_giaban');
    }

    public function index(){
        $data["mucgia"]=$this->M_giaban->getAllmucgia();
        $this->template->load('master_layout','connects','giasanpham/v_quanlymucgia', $data);
    }

    public function add(){
        $this->load->library('form_validation');
        $message_error=array('required',"lỗi");
        $this->form_validation->set_rules('giadau','Giá đầu','required',$message_error);
        $this->form_validation->set_rules('giacuoi','Giá cuối','required',$message_error);

        if($this->form_validation->run() == FALSE){
            $this->template->load('master_layout','connects','giasanpham/v_themmucgia');
        }else{
            $this->save();

            redirect(site_url('c_quanlymucgia'));
        }
    }

    public function save($id=0){
        $value=array(
            'gia_bat_dau'=>$this->input->post('giadau'),
            'gia_ket_thuc'=>$this->input->post('giacuoi'),
        );
        if($id==0)
            $this->M_giaban->insert($value);
        else
            $this->M_giaban->update($value, $id);

    }

    public function delete($id){
        $this->M_giaban->delete($id);
        redirect(site_url('c_quanlymucgia'));
    }
}