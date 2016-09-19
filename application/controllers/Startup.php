<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Startup extends CI_Controller
{
    public function index($id)
    {
        $this->load->view('layouts/header');
        $this->load->view('startup');
        $this->load->view('layouts/footer');
    }
}
