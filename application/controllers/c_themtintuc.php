<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/17/2018
 * Time: 2:32 PM
 */

class C_themtintuc extends CI_Controller
{

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_tintuc');
    }

    public function index()
    {
        $this->template->load('master_layout', 'connects', 'tintuc/v_themtintuc');
    }

    public function themtintuc()
    {
        if ($this->request->isPost()){
            $file = $_FILES['file']['name'];
            $fileName = 'imageUpload/' . $file;
            move_uploaded_file($_FILES['file']['tmp_name'], $fileName);
            if(file_exists($fileName)){
                echo json_encode(array('status'=>0, 'fileName'=>$fileName));
            }
        }
        $this->load->library('form_validation');
        $message = array('required', 'Loi');
        $this->form_validation->set_rules('tentintuc', 'ten tin tuc', 'required', $message);
        $this->form_validation->set_rules('tentomtat', 'ten tom tat', 'required', $message);
        $this->form_validation->set_rules('noidungtomtat', 'noi dung tom tat', 'required', $message);
        $this->form_validation->set_rules('noidungchitiet', 'noi dung chi tiet', 'required', $message);
        $this->form_validation->set_rules('hinhanh', 'anh minh hoa', 'required', $message);
        $this->form_validation->set_rules('ngaydang', 'ngay dang', 'required', $message);

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('master_layout', 'connects', 'tintuc/v_themtintuc', $message);
        } else {
            $this->save();
            redirect(site_url('c_quanlytintuc'));
        }
    }

    public function save($id = 0)
    {

        $value = array(
            'ten_tin_tuc' => $this->input->post('tentintuc'),
            'ten_tom_tat' => $this->input->post('tentomtat'),
            'nd_tom_tat' => $this->input->post('noidungtomtat'),
            'noidung_chitiet' => $this->input->post('noidungchitiet'),
            'anh_minh_hoa' => $this->input->post('hinhanh'),
            'ngay_dang' => $this->input->post('ngaydang'),
        );
        if ($id == 0)
            $this->M_tintuc->insert($value);
        else
            $this->M_tintuc->update($id, $value);
    }
}