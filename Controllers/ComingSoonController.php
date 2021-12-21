<?php
require_once("Models/home.php");
class ComingSoonController
{
    var $ComingSoon_model;
    public function __construct()
    {
        $this->ComingSoon_model = new home();
    }
    function list()
    {
        $ComingSoon_data = $this->ComingSoon_model->comingsoon();
        require_once("Views/shop/coming-soon.php");
    }
}
