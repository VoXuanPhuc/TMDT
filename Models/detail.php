<?php 
require_once("model.php");
class Detail extends model{
    function detail_product($id){
        $query = "SELECT * FROM sanpham WHERE MaSP = $id";
        $result = $this->conn->query($query);

        return $result->fetch_assoc();
    }
    function categories_where($id){
        $query = "SELECT * FROM danhmuc WHERE MaDM = $id";
        $result = $this->conn->query($query);

        return $result->fetch_assoc();
    }
}