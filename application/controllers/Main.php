<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('main');
        $this->load->view('layouts/footer');
    }
}
