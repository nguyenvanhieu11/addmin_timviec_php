<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/19/2018
 * Time: 9:19 PM
 */

class C_phanhoi_binhluan_sp extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_sanpham');
    }

    public function index(){
        $this->template->load('master_layout','connects','sanpham/v_phanhoi_binhluan_sp');
    }

    public function binhluan($id){
        $this->load->library('form_validation');
        $error_message=array('required','thêm thông tin không thành công');
        $this->form_validation->set_rules('phanhoi','phản hồi','required',$error_message);
        if($this->form_validation->run()== FALSE) {
            $data["binhluan"] = $this->M_sanpham->getbinhluanById($id);
            $this->template->load('master_layout', 'connects', 'sanpham/v_phanhoi_binhluan_sp', $data);
        }else{
            $this->save($id);

            redirect(site_url('c_binhluansanpham'));
        }
    }

    public function delete($id){
        $this->M_sanpham->deletebl($id);
        redirect('c_binhluansanpham');
    }

    public function save($id=0){
        $value=array(

            'phan_hoi'=>$this->input->post('phanhoi'),
        );
        if($id==0)
            $this->M_sanpham->insert($value);
        else
            $this->M_sanpham->phanhoi($value, $id);
    }

}