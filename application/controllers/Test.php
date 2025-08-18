<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
    private function myFun()
    {
        echo 'Hello This is MyFun';
    }

    // public function _myFun()
    // {
    //     echo 'Hello This is MyFun';
    // }

    public function _remap($action)
    {
        if ($action === "greeting") {
            $this->greeting();
        } else if ($action === "index") {
            $this->index();
        } else {
            $this->defaultMethod();
        }
    }

    public function index()
    {
        // show_404();
        // echo VIEWPATH;
        // echo FCPATH;
        // echo ENVIRONMENT;
        // echo 'This is the test index';
    }

    public function welcome($name)
    {
        // echo 'Welcome to CodeIgniter';
        print_r($name);
    }

    public function greeting()
    {
        $this->myFun();
        echo 'Greetings for You';
    }

    function edit($id)
    {
        echo $id;
    }

    function defaultMethod()
    {
        echo "Sorry! Not able to process";
    }
}
