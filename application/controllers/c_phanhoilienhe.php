<?php
class C_phanhoilienhe extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_lienhe');
    }

    public function index(){
        $this->template->load('master_layout','connects','lienhe/v_phanhoilienhe');
    }

    public function lienhe($id){
        $this->load->library('form_validation');
        $message=array('required','Loi');
        $this->form_validation->set_rules('ndphanhoi','noi dung phan hoi','required',$message);
        if($this->form_validation->run() == FALSE){
            $data['lienheid']=$this->M_lienhe->getlienheById($id);
            $this->template->load('master_layout','connects','lienhe/v_phanhoilienhe',$data);
        }else{
            $this->save($id);
            redirect(site_url('c_quanlylienhe'));
        }
    }

    public function save($id=0){
        $value=array(
            'phan_hoi'=>$this->input->post('ndphanhoi')
        );
        if($id==0)
            $this->M_lienhe->insert($value);
        else
            $this->M_lienhe->phanhoi($value,$id);
    }
}