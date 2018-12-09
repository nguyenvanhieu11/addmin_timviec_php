<?php
    class C_loaisanpham extends CI_Controller {

        public function __construct()
        {
            parent:: __construct();
            $this->load->model('M_loaisanpham');
        }

        public function index(){

            $this->load->library("form_validation");
            $error_message=array('required'=>'%s không được để trống');
            $this->form_validation->set_rules('typeproduct','loại sản phẩm','required',$error_message);

            if($this->form_validation->run()==FALSE){
                $data["protype"]=$this->M_loaisanpham->getAlltype();
                $this->template->load('master_layout','connects','sanpham/v_loaisanpham',$data);
            }else{
                $this->save();
                $this->session->set_flashdata('message', 'Thêm thông tin loại sản phẩm thành công');
                redirect(site_url('c_loaisanpham'));
            }


        }

        public function save($id = 0){
            $value=array(
                'ten_loai'=>$this->input->post('typeproduct')
            );

            if($id==0)
                $this->M_loaisanpham->addtypeproduct($value);
            else
                $this->M_dangky->update($value, $id);

        }



    }
?>