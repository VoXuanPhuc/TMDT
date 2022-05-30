<?php
require_once("Models/cart.php");
class CartController
{
    var $cart_model;
    public function __construct()
    {
        $this->cart_model = new Cart();
    }
    function list_cart()
    {
        $random_khuyenmai = $this->cart_model->random_khuyenmai();
        $count = 0;
        if (isset($_SESSION['products'])) {
            foreach ($_SESSION['products'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        require_once("Views/index.php");
    }
    function add_cart()
    {

        $id = $_GET['id'];
        $data = $this->cart_model->detail_product($id);
        $count = 0;
        if ($data['SoLuong'] < $_POST['quality']) {
            echo '<script>alert("Sản phẩm hiện không đủ hoặc đã hết hàng")</script>';
            echo '<script>history.go(-1)</script>';
            return;
        }
        if ($_POST['quality'] != NULL) {
            $i = $_POST['quality'];
        } else {
            $i = 1;
        }

        $color = $_POST['typecolor'];
        if (isset($_SESSION['products'][$id])) {
            $arr = $_SESSION['products'][$id];
            $arr['SoLuong'] = $arr['SoLuong'] + $i;
            if ($data['SoLuong'] < $arr['SoLuong']) {
                echo '<script>alert("Sản phẩm hiện không đủ hoặc đã hết hàng")</script>';
                echo '<script>history.go(-1)</script>';
                return;
            }
            $arr['ThanhTien'] = $arr['DonGia'] * $arr['SoLuong'];
            $_SESSION['products'][$id] = $arr;
        } else {
            $arr['MaSP'] = $data['MaSP'];
            $arr['TenSP'] = $data['TenSP'];
            $arr['DonGia'] = $data['DonGia'];
            $arr['SoLuong'] = $i;
            $arr['Color'] = $color;
            $arr['ThanhTien'] = $data['DonGia'] * $arr['SoLuong'];
            $arr['HinhAnh1'] = $data['HinhAnh1'];
            $_SESSION['products'][$id] = $arr;
        }
        foreach ($_SESSION['products'] as $value) {
            $count += $value['ThanhTien'];
        }
        header('location:cart');
    }
    function delete_cart()
    {
        $arr = $_SESSION['products'][$_GET['id']];
        if ($arr['SoLuong'] == 1) {
            unset($_SESSION['products'][$_GET['id']]);
        } else {
            $arr = $_SESSION['products'][$_GET['id']];
            $arr['SoLuong'] = $arr['SoLuong'] - 1;
            $arr['ThanhTien'] = $arr['SoLuong'] * $arr["DonGia"];
            $_SESSION['products'][$_GET['id']] = $arr;
        }
        header('location:cart');
    }
    function update_cart()
    {
        $arr = $_SESSION['products'][$_GET['id']];
        $arr['SoLuong'] = $arr['SoLuong'] + 1;
        $data = $this->cart_model->detail_product($_GET['id']);
        if ($data['SoLuong'] < $arr['SoLuong']) {
            echo '<script>alert("Sản phẩm hiện không đủ hoặc đã hết hàng")</script>';
            echo '<script>history.go(-1)</script>';
            return;
        }
        $arr['ThanhTien'] = $arr['SoLuong'] * $arr["DonGia"];
        $_SESSION['products'][$_GET['id']] = $arr;
        header('Location: cart');
    }
    function deleteall_cart()
    {
        unset($_SESSION['products'][$_GET['id']]);
        header('Location: cart');
    }
}
