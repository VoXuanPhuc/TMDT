<?php
require_once("Models/detail.php");
class DetailController{
    var $detail_model;
    public function __construct()
    {
        $this->detail_model = new Detail();
    }
    function show_detail(){
        $id = $_GET['id'];

        $data = $this->detail_model->detail_product($id);
        $random_khuyenmai= $this->detail_model->random_khuyenmai();
        if($data != NULL){
            $data_products = $this->detail_model->related_products(0,10, $data['MaLSP']);
            $category_where = $this->detail_model->categories_where($data['MaDM']);
        }
        require_once("Views/index.php");
    }
}