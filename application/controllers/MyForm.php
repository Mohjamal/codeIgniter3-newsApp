<?php

class MyForm extends CI_Controller
{
    public function index()
    {
        $this->load->view("myform_view");
        if (isset($_POST['submit'])) {
            $name = $_POST['uname'];
            $email = $_POST['email'];

            $this->load->model('myformmodel');
            $this->myformmodel->saveData($name, $email);
        }
    }
}
