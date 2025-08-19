<?php

class Subjects extends CI_Controller
{
    public function index()
    {
        $data['subjects'] = [
            'HTML',
            'CSS',
            'JAVASCRIPT',
            'BootStrap',
            'PHP',
            'MYSQL',
            'CodeIgniter',
            'WordPress',
            'Drupal'
        ];

        $this->load->view("subjects_view", $data);
    }
}
