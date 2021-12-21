<?php
require_once("Models/quickview.php");
class QuickviewController
{
    var $quickview_model;
    public function __construct()
    {
        $this->quickview_model = new quickview();
    }
    function list()
    {
        $random_khuyenmai= $this->quickview_model->random_khuyenmai();
        $id =  $_GET['id'];
        $data = $this->quickview_model->detail_sp($id);
        require_once("Views/quickView.php");
    }
}
