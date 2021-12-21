<?php
require_once("model.php");
class khuyenmai extends Model
{
    var $table = "khuyenmai";
    var $contens = "MaKM";

    function find_km($id)
    {
        $query = "select * from $this->table where $this->contens ='$id'";
        return $this->conn->query($query)->fetch_assoc();
    }
}