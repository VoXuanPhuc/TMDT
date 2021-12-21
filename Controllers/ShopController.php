<?php
require_once("Models/shop.php");
class ShopController
{
    var $shop_model;
    public function __construct()
    {
        $this->shop_model = new Shop();
    }
    function list()
    {
        if (isset($_GET['sp']) and isset($_GET['loai'])) {
            $data_loai = $this->shop_model->chitiet_loai($_GET['loai'], $_GET['sp']);
            if ($data_loai != null) {
                $data = $this->shop_model->chitiet($data_loai[0]['MaLSP'], $_GET['sp']);
                $data_noibat = $this->shop_model->sanpham_noibat();
            }
        } else {
            if (isset($_GET['sp'])) {
                //hiển thị tất cả sản phẩm theo danh từng danh mục
                $data = $this->shop_model->sanpham_danhmuc(0, 9, $_GET['sp']);
                $data_noibat = $this->shop_model->sanpham_noibat();
                $data_count = $this->shop_model->count_sp_dm($_GET['sp']);
                $data_tong = $data_count['tong'];
            } else {
                if (isset($_GET['from'])) {
                    //tiềm kiếm theo giá tiền đã định sẵn
                    $from = $_GET['from'];
                    $to = $_GET['to'];
                    $data = $this->shop_model->dongia($from, $to);
                    $data_noibat = $this->shop_model->sanpham_noibat();
                    $data_tong = count($data);
                } else {
                    //tìm kiếm theo tên hoặc danh mục
                    if (isset($_POST['keyword'])) {
                        $data = $this->shop_model->keywork($_POST['keyword']);
                        $data_noibat = $this->shop_model->sanpham_noibat();
                        $data_tong = count($data);
                    } else {
                        //hiển thị tất cả trong store và phân trang
                        $id = isset($_GET['page']) ? $_GET['page'] : 1;
                        $limit = 6;
                        $start = ($id - 1) * $limit;
                        $data = $this->shop_model->limit($start, $limit);
                        $data_noibat = $this->shop_model->sanpham_noibat();
                        $data_count = $this->shop_model->count_sp();
                        $data_tong = $data_count['tong'];
                        $test = 0;
                    }
                }
            }
        }
        $data_categories = $this->shop_model->categories();
        $random_khuyenmai = $this->shop_model->random_khuyenmai();
        require_once("Views/index.php");
    }
}
