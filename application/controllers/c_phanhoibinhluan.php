<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/29/2018
 * Time: 10:50 PM
 */

class C_phanhoibinhluan extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_tintuc');
    }

    public function phanhoi($id){
        $this->load->library('form_validation');
        $message=array('required','Lỗi');
        $this->form_validation->set_rules('ndphanhoi','nội dung bình luận','required',$message);

        if($this->form_validation->run()==FALSE){
            $data['binhluan']=$this->M_tintuc->getIdBl($id);
            $this->template->load('master_layout', 'connects', 'tintuc/v_phanhoi_binhluan', $data);
        }else{
            $this->save($id);
            redirect(site_url('c_quanlybinhluan_tt'));
        }
    }

    public function save($id=0){
        $value=array(
            'phan_hoi'=>$this->input->post('ndphanhoi'),
        );
        if($id==0)
            $this->M_tintuc->insert($value);
        else
            $this->M_tintuc->update($id,$value);
    }
}