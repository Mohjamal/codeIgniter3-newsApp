<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
    public function index()
    {
        echo 'This is the test index';
    }

    public function welcome()
    {
        echo 'Welcome to CodeIgniter';
    }

    public function greeting()
    {
        echo 'Greetings for You';
    }

    function edit($id)
    {
        echo $id;
    }
}
