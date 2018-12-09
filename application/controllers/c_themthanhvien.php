<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/23/2018
 * Time: 6:14 PM
 */

class C_themthanhvien extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_thanhvien');
    }

    public function index(){
        $this->template->load('master_layout','connects','thanhvien/v_themthanhvien');
    }

    public function insert(){
        $this->load->library('form_validation');
        $message=array('required','loi');
        $this->form_validation->set_rules('tenaddmin','ten add min','required',$message);
        $this->form_validation->set_rules('tendn','ten dang nhap','required',$message);
        $this->form_validation->set_rules('matkhau','mat khau','required',$message);
        $this->form_validation->set_rules('ngaytao','ngay tao','required',$message);

        if($this->form_validation->run() == FALSE){
            $this->template->load('master_layout','connects','thanhvien/v_themthanhvien');
        }
        else{
            $this->save();
            redirect('c_quanlythanhvien');
        }
    }

    public function save($id=0){
        $value=array(
            'ten_addmin'=>$this->input->post('tenaddmin'),
            'user_addmin'=>$this->input->post('tendn'),
            'password'=>$this->input->post('matkhau'),
            'ngay_tao'=>$this->input->post('ngaytao'),
        );
        if($id==0)
            $this->M_thanhvien->addthanhvien($value);
        else
            $this->M_thanhvien->update($id,$value);
    }
}