<?php
    require_once("model.php");
    class home extends model{
        function sanpham_noibat()
        {
            $query= "SELECT DISTINCT `sanpham`.* FROM `chitiethoadon` JOIN `sanpham` WHERE chitiethoadon.MaSP = sanpham.MaSP";
            require("result.php");
            return $data;
        }
        function sale(){
            $query = "SELECT * FROM `sanpham` WHERE TrangThai = 3 ORDER BY ThoiGian";
            require("result.php");
            return $data;
        }
        function comingsoon(){
            $query = "SELECT * FROM `sanpham` WHERE TrangThai = 0 ORDER BY ThoiGian";
            require("result.php");
            return $data;
        }
    }
?>