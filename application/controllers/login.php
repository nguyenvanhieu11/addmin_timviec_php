<?php
/**
 * Created by PhpStorm.
 * User: Savvycom
 * Date: 6/23/2018
 * Time: 8:36 AM
 */

class Login extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_login');
    }
    public function index(){
        $this->template->load('Default_layout','contents','login/v_login');
    }

    public function login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Tên đăng  nhập', 'required');
        $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[8]|max_length[100]');
        $this->form_validation->set_error_delimiters('<p>', '</p>');
        if ($this->form_validation->run() == FALSE) {

            $this->template->load('Default_layout', 'contents', 'login/v_login');
        } else {
            $user = $this->input->post('username');
            $pass = $this->input->post('password');
//            $this->load->model('M_login');
            $query = $this->M_login->login($user, $pass);
            if ($query) {
                foreach ($query as $row) {
                    $newdata = array(
                        'id_quan_tri' => $row->id_quan_tri,
                        'ten_quan_tri' => $row->ten_quan_tri,
                        'ten_dang_nhap' => $row->ten_dang_nhap
                    );
                    $this->session->set_userdata($newdata); // Tạo Session cho Users
                    redirect('c_giaodich'); // Đăng nhập thành công chuyển bạn về trang giao dich
                }
                return TRUE;
            } else {
                $users_err = array(

                    'error_login' => "Sai tên đăng nhập hoặc mật khẩu "
                );
                $this->template->load('Default_layout', 'contents', 'login/v_login', $users_err);
                return false;
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->template->load('Default_layout', 'contents', 'login/v_login');
    }
}
