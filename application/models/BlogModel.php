<?php
class BlogModel extends CI_Model
{
    public function getAllBlogs()
    {
        $data = array(
            array("title" => "Title will goes here1"),
            array("title" => "Title will goes here2"),
            array("title" => "Title will goes here3"),
            array("title" => "Title will goes here4"),
        );

        return $data;
    }
}
