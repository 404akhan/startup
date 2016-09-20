<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function index($id)
    {
        $transactions = $this->data->get_transactions($id);

        $data['id'] = $id;
        $data['transactions'] = $transactions;

        $this->load->view('layouts/header');
        $this->load->view('profile', $data);
        $this->load->view('layouts/footer');
    }
}
