<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Startup extends CI_Controller
{
    public function index($id)
    {
        echo 'hello  ' . $id;
    }
}