<?php
require_once("connection.php");
class model
{
    var $conn;
    function __construct()
    {
        $oj_connect = new connection();
        $this->conn = $oj_connect->conn;
    }
    function categories()
    {
        $query = "SELECT * FROM danhmuc";
        require("result.php");
        return $data;
    }
    function catalogdetails($id)
    {
        $query =  "SELECT d.TenDM as Ten, l.* FROM danhmuc as d, loaisanpham as l WHERE d.MaDM = l.MaDM and d.MaDM = $id";

        require("result.php");

        return $data;
    }
    function limit($a, $b)
    {
        $query = "SELECT * FROM sanpham LIMIT $a,$b";
        require("result.php");
        return $data;
    }
    function slider()
    {
        $query = "SELECT * FROM banner";
        require("result.php");
        return $data;
    }
    function sanpham_danhmuc($a, $b, $danhmuc)
    {
        $query =   "SELECT * from sanpham WHERE TrangThai = 1  and MaDM = $danhmuc ORDER BY ThoiGian DESC limit $a,$b";

        require("result.php");

        return $data;
    }
    function products($id, $a, $b)
    {
        $query = "SELECT * FROM sanpham WHERE TrangThai = 1 AND MaDM = $id ORDER BY ThoiGian DESC LIMIT $a,$b";
        require("result.php");
        return $data;
    }
    function random_khuyenmai()
    {
        $query = "SELECT * FROM khuyenmai WHERE trangthai = 1 ORDER BY RAND() LIMIT 1";
        require("result.php");
        return $data;
    }
    function random($a,$b)
    {
        $query = "SELECT * FROM sanpham WHERE ThoiGian AND TrangThai = 1 ORDER BY RAND() LIMIT $a,$b";
        require("result.php");
        return $data;
    }
    function related_products($a, $b, $id)
    {
        $query = "SELECT * FROM sanpham WHERE trangthai = 1 AND MaLSP = $id ORDER BY ThoiGian DESC LIMIT $a ,$b";
        require("result.php");
        return $data;
    }
}
