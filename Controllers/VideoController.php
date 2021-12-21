<?php
require_once("Models/video.php");
class VideoControler
{
    var $video_model;
    public function __construct()
    {
        $this->video_model = new video();
    }
    function list()
    {
        $random_khuyenmai= $this->video_model->random_khuyenmai();
        require_once("Views/video/video.php");
    }
}
