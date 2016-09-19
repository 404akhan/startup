<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Startup extends CI_Controller
{
    public function index($id)
    {
        $data = $this->data->get_by_id($id);

        $this->load->view('layouts/header');
        $this->load->view('startup', $data);
        $this->load->view('layouts/footer');
    }
}
