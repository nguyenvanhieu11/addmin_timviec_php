<?php

class C_dondathang extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_dondathang');
    }

    public function index($page = 0)
    {
        $this->load->library('pagination');
        //+ Cấu hình chỉ ra url được sử dụng trong các liên kết trang
        $config['base_url'] = site_url('c_dondathang/index');
        //+ Cấu hình tổng số dòng cần phân trang
        $config['total_rows'] = $this->db->count_all('don_dat_hang');
        //+ Cấu hình xác định số dòng được hiển thị trong mỗi trang
        $config['per_page'] = 10;
        //+ Cấu hình các dùng link phân trang của bootstrap
        $config['full_tag_open'] = '<nav aria-label="Page navigation" class="text-center"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';
        //$config['first_link'] = true;
        //$config['last_link'] = true;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data["phantrang"] = $this->pagination->create_links();

        $data["dondathang"] = $this->M_dondathang->getAlldondathang($config['per_page'], $page);
        $this->template->load('master_layout', 'connects', 'dathang/v_dondathang', $data);

    }

    public function searchAjax()
    {
        $searchData = $this->input->post('customerName');
        $orderData = $this->input->post('dateOrder');
        $data['data'] = $this->M_dondathang->searchOrder($searchData,$orderData);
        if($data){
            echo json_encode(array('status'=>1));
        }

    }
}

?>