<?php
class MyFormModel extends CI_Model
{
    public function saveData($name, $email)
    {
        echo $name . " " . $email . ' are collected in model';
    }
}
