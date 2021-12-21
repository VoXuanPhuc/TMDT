<?php
require_once("model.php");
class Cart extends model{
    function detail_product($id){
        $query = "SELECT * FROM sanpham WHERE MaSP = $id";
        $result = $this->conn->query($query);

        return $result->fetch_assoc();
    }
}