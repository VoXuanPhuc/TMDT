<?php
require_once("Models/checkout.php");
class CheckoutController
{
    var $checkout_model;
    public function __construct()
    {
        $this->checkout_model = new Checkout();
    }
    function list()
    {
        $random_khuyenmai = $this->checkout_model->random_khuyenmai();
        if (isset($_SESSION['login'])) {

            $count = 0;
            if (isset($_SESSION['products'])) {
                foreach ($_SESSION['products'] as $value) {
                    $count += $value['ThanhTien'];
                }
            }
            require_once('Views/index.php');
        } else {
            header('location: login');
        }
    }
    function  save()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');

        $count = 0;
        if (isset($_SESSION['login'])) {
            if (isset($_SESSION['products'])) {
                foreach ($_SESSION['products'] as $value) {
                    $count += $value['ThanhTien'];
                }
            }
            $data = array(
                'MaND' => $_SESSION['login']['MaND'],
                'NgayLap' => $ThoiGian,
                'NguoiNhan' => $_POST['NguoiNhan'],
                'SDT' => $_POST['SDT'],
                'DiaChi' => $_POST['DiaChi'],
                'Quan' => $_POST['Quan'],
                'Phuong' => $_POST['Phuong'],
                'PhuongThucTT' => $_POST['PhuongThucTT'],
                'TongTien' => $count,
                'TrangThai'  =>  '0',
                'MaBuuD' => $_POST['MaBuuD'],
                'Note' => $_POST['Note'],
                'Email' => $_POST['Email'],
            );
        } else {
            if (isset($_SESSION['products'])) {
                foreach ($_SESSION['products'] as $value) {
                    $count += $value['ThanhTien'];
                }
            }
            $data = array(
                'MaND' => '39',
                'NgayLap' => $ThoiGian,
                'NguoiNhan' => $_POST['NguoiNhan'],
                'SDT' => $_POST['SDT'],
                'DiaChi' => $_POST['DiaChi'],
                'Quan' => $_POST['Quan'],
                'Phuong' => $_POST['Phuong'],
                'PhuongThucTT' => "Vui lòng liên hệ ngay",
                'TongTien' => $count,
                'TrangThai'  =>  '0',
                'MaBuuD' => "",
                'Note' => $_POST['Note'],
                'Email' => "",
            );
        }
        $this->checkout_model->save($data);
    }
}
