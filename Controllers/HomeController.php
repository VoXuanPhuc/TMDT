<?php
require_once("Models/home.php");
class HomeController
{
    var $home_model;
    public function __construct()
    {
        $this->home_model = new home();
    }
    function list()
    {
        $data_categories = $this->home_model->categories();
        $data_catalogdetails = array();

        for ($i = 1; $i <= count($data_categories); $i++) {
            $data_catalogdetails[$i] = $this->home_model->catalogdetails($i);
        }

        $data_slider = $this->home_model->slider();

        $data_limit = $this->home_model->limit(0, 10);

        $random_khuyenmai= $this->home_model->random_khuyenmai();
        $data_tvs = $this->home_model->products(6, 0, 10);
        $data_cumputers = $this->home_model->products(2, 0, 10);
        $data_tablets = $this->home_model->products(3, 0, 10);
        $data_phones = $this->home_model->products(1, 0, 10);
        $data_smartwatches = $this->home_model->products(4, 0, 10);
        $data_accessories = $this->home_model->products(8, 0, 10);
        $top_rated = $this->home_model->random(1,10);
        $best_selling = $this->home_model->sanpham_noibat();
        $on_sale = $this->home_model->sale();
        $data_recommendationforyou = $this->home_model->random(0,15);
        require_once("Views/index.php");
    }
}
