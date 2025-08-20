<?php

class Blog extends CI_Controller
{
    public function index()
    {
        /*
        The $this->load->model() method does not return the model object itself. 
        Instead, it loads the model and makes it available as a property of the controller, 
        which you can then access using $this->ModelName.
        */
        $this->load->model("BlogModel");

        //Call the function on the loaded model object.
        $blogs["articles"] = $this->BlogModel->getAllBlogs();

        // Pass the data to the view.
        $this->load->view("blogview", $blogs);
    }
}
