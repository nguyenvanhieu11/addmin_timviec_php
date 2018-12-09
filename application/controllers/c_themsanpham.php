<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/16/2018
 * Time: 4:24 PM
 */

class C_themsanpham extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_sanpham');
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
    {
        $data["loaisanpham"] = $this->M_sanpham->getAlltype();
        $this->template->load('master_layout', 'connects', 'sanpham/v_themsanpham', $data);
    }

    public function add()
    {
        $this->load->library("form_validation");
        $error_message = array('required' => 'Thêm sản phẩm không thành công');
        $this->form_validation->set_rules('loaisp', 'Loại sản phẩm', 'required', $error_message);
        $this->form_validation->set_rules('tensp', 'Tên sản phẩm', 'required', $error_message);
        $this->form_validation->set_rules('giaban', 'giaban', 'required', $error_message);
        $this->form_validation->set_rules('tinhtrang', 'Tình trạng sản phẩm', 'required', $error_message);
        $this->form_validation->set_rules('baohanh', 'Bảo hành', 'required', $error_message);
        $this->form_validation->set_rules('fileimg', 'file', 'required', $error_message);

        if ($this->form_validation->run() == FALSE) {
            $data["loaisanpham"] = $this->M_sanpham->getAlltype();
            $this->template->load('master_layout', 'connects', 'sanpham/v_themsanpham', array($error_message, $data));
        } else {

            $config['upload_path'] = './uploads/products/';
            $config['allowed_types'] = 'gif|jpg|png|jppeg';
            $this->load->library('upload', $config);
            $this->form_validation->set_error_delimiters();
            if (!$this->upload->do_upload('fileimg')) {
                $data = $this->input->post();
                $info = $this->upload->data();
                $image_path = base_url("uploads/products/" . $info["raw_name"] . $info['file_ext']);
                move_uploaded_file($this->input->post('fileimg'),'uploads/products/');
            } else {

            }
            //Lưu dữ liệu vào cơ sở dữ liệu
            $this->save();
            //Quay trở lại liệt kê danh sách nhà xuất bản
            redirect(site_url('c_sanpham'));
        }

    }

    public function save($id = 0)
    {
        $value = array(
            'id_loai_sp' => $this->input->post('loaisp'),
            'ten_sp' => $this->input->post('tensp'),
            'gia_ban' => $this->input->post('giaban'),
            'tinh_trang' => $this->input->post('tinhtrang'),
            'bao_hanh' => $this->input->post('baohanh'),
            'hinh_anh' => $this->input->post('fileimg')
        );

        if ($id == 0)
            $this->M_sanpham->insert($value);
        else
            $this->M_sanpham->update($value, $id);
    }
}