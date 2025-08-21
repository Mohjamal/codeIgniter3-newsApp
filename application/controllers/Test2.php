<?php
class Test2 extends CI_Controller
{
    function index()
    {
        /* Array Helper */
        // $this->load->helper("array");
        // $quotes = array(
        //     "She let the balloon float up into the air with her hopes and dreams.",
        //     "Cats are good pets, for they are clean and are not noisy.",
        //     "Having no hair made him look even hairier.",
        //     "Too many prisons have become early coffins.",
        //     "I've always wanted to go to Tajikistan, but my cat would miss me."
        // );

        // $data['quote'] = random_element($quotes);
        // $this->load->view("test2_view", $data);

        /* Form Helper */
        $this->load->helper("form");
        $this->load->view("test2_view");
    }
}
